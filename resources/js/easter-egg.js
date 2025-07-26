let array = [];
let isRunning = false;
let speed = 100;

// Elements
const arrayContainer = docum    // Calcular largura das barras para caber no container
const containerWidth = isMobile ? 280 : 500; // Aumentado para 500px no desktop
const spacing = isMobile ? 4 : 10; // Espaçamento maior no desktop
const barWidth = Math.min(Math.max(15, (containerWidth - (array.length * spacing)) / array.length), isMobile ? 35 : 50); // Máximo maior no desktop.getElementById('arrayContainer');
const algorithmTitle = document.getElementById('algorithmTitle');
const stats = document.getElementById('stats');
const arraySizeSlider = document.getElementById('arraySize');
const speedSlider = document.getElementById('speed');
const arraySizeValue = document.getElementById('arraySizeValue');
const speedValue = document.getElementById('speedValue');

// Responsive array size limits
function getArrayLimits() {
    const isMobile = window.innerWidth <= 768;
    return {
        min: isMobile ? 5 : 10,
        max: isMobile ? 8 : 25,
        default: isMobile ? 6 : 20
    };
}

// Update slider limits based on screen size
function updateSliderLimits() {
    const limits = getArrayLimits();

    arraySizeSlider.min = limits.min;
    arraySizeSlider.max = limits.max;

    // If current value exceeds new limits, adjust it
    const currentValue = parseInt(arraySizeSlider.value);
    if (currentValue > limits.max) {
        arraySizeSlider.value = limits.max;
        arraySizeValue.textContent = limits.max;
    } else if (currentValue < limits.min) {
        arraySizeSlider.value = limits.default;
        arraySizeValue.textContent = limits.default;
    }
}

// Event listeners
document.addEventListener('DOMContentLoaded', function () {
    // Set initial limits
    updateSliderLimits();

    document.getElementById('generateArray').addEventListener('click', generateArray);
    document.getElementById('bubbleSort').addEventListener('click', () => startSort('bubble'));
    document.getElementById('selectionSort').addEventListener('click', () => startSort('selection'));
    document.getElementById('insertionSort').addEventListener('click', () => startSort('insertion'));

    arraySizeSlider.addEventListener('input', (e) => {
        arraySizeValue.textContent = e.target.value;
    });

    speedSlider.addEventListener('input', (e) => {
        speed = 510 - parseInt(e.target.value);
        speedValue.textContent = e.target.value + 'ms';
    });

    // Update limits on window resize
    window.addEventListener('resize', function () {
        updateSliderLimits();
        // Regenerate array if limits changed
        if (!isRunning) {
            generateArray();
        }
    });

    // Generate initial array
    generateArray();
});

// Generate random array
function generateArray() {
    if (isRunning) return;

    const size = parseInt(arraySizeSlider.value);
    const isMobile = window.innerWidth <= 768;
    const maxValue = isMobile ? 190 : 240; // Subtraindo 10 para garantir que não ultrapasse o limite

    array = [];

    for (let i = 0; i < size; i++) {
        array.push(Math.floor(Math.random() * maxValue) + 10);
    }

    displayArray();
    algorithmTitle.textContent = getLocalizedText('arrayGenerated');
    stats.textContent = '';
}

// Display array as bars
function displayArray() {
    arrayContainer.innerHTML = '';
    const maxValue = Math.max(...array);

    // Altura responsiva do container
    const isMobile = window.innerWidth <= 768;
    const containerHeight = isMobile ? 180 : 250; // Altura do container em pixels
    const maxBarHeight = isMobile ? 120 : 200; // Altura máxima mais conservadora no mobile

    // Calcular largura das barras para caber no container
    const containerWidth = isMobile ? 280 : 380; // Reduzido para considerar as margens maiores
    const barWidth = Math.min(Math.max(15, (containerWidth - (array.length * 8)) / array.length), 35);

    array.forEach((value, index) => {
        const bar = document.createElement('div');
        bar.className = 'array-bar';
        // Calcular altura proporcional que nunca ultrapassa o container
        const barHeight = Math.min((value / maxValue) * maxBarHeight, maxBarHeight);
        bar.style.height = `${barHeight}px`;
        bar.style.width = `${barWidth}px`;
        bar.textContent = value;
        bar.id = `bar-${index}`;
        arrayContainer.appendChild(bar);
    });
}

// Start sorting
async function startSort(algorithm) {
    if (isRunning || array.length === 0) return;

    isRunning = true;
    const startTime = Date.now();
    let comparisons = 0;
    let swaps = 0;

    // Reset colors
    document.querySelectorAll('.array-bar').forEach(bar => {
        bar.classList.remove('comparing', 'swapping', 'sorted');
    });

    switch (algorithm) {
        case 'bubble':
            algorithmTitle.textContent = getLocalizedText('bubbleSortRunning');
            await bubbleSort(() => { comparisons++; }, () => { swaps++; });
            break;
        case 'selection':
            algorithmTitle.textContent = getLocalizedText('selectionSortRunning');
            await selectionSort(() => { comparisons++; }, () => { swaps++; });
            break;
        case 'insertion':
            algorithmTitle.textContent = getLocalizedText('insertionSortRunning');
            await insertionSort(() => { comparisons++; }, () => { swaps++; });
            break;
    }

    const endTime = Date.now();
    const duration = endTime - startTime;

    // Mark all as sorted
    document.querySelectorAll('.array-bar').forEach(bar => {
        bar.classList.add('sorted');
    });

    algorithmTitle.textContent = getLocalizedText('sortCompleted', algorithm);
    stats.textContent = getLocalizedText('stats', { duration, comparisons, swaps });

    isRunning = false;
}

// Bubble Sort
async function bubbleSort(onCompare, onSwap) {
    const n = array.length;

    for (let i = 0; i < n - 1; i++) {
        for (let j = 0; j < n - i - 1; j++) {
            // Highlight comparing elements
            highlightBars([j, j + 1], 'comparing');
            onCompare();
            await sleep(speed);

            if (array[j] > array[j + 1]) {
                // Highlight swapping elements
                highlightBars([j, j + 1], 'swapping');
                onSwap();

                // Swap
                [array[j], array[j + 1]] = [array[j + 1], array[j]];
                updateBars([j, j + 1]);

                await sleep(speed);
            }

            // Remove highlights
            removeBarsHighlight([j, j + 1]);
        }

        // Mark as sorted
        document.getElementById(`bar-${n - i - 1}`).classList.add('sorted');
    }

    // Mark first element as sorted
    document.getElementById('bar-0').classList.add('sorted');
}

// Selection Sort
async function selectionSort(onCompare, onSwap) {
    const n = array.length;

    for (let i = 0; i < n - 1; i++) {
        let minIdx = i;

        // Highlight current position
        highlightBars([i], 'comparing');

        for (let j = i + 1; j < n; j++) {
            // Compare current minimum with j
            highlightBars([j], 'comparing');
            onCompare();
            await sleep(speed);

            if (array[j] < array[minIdx]) {
                // Remove highlight from old minimum
                if (minIdx !== i) {
                    removeBarsHighlight([minIdx]);
                }
                minIdx = j;
                // Keep new minimum highlighted
                highlightBars([minIdx], 'comparing');
            } else {
                // Remove highlight from j if it's not the minimum
                removeBarsHighlight([j]);
            }

            await sleep(speed / 2); // Smaller delay for smoother animation
        }

        // Swap if needed
        if (minIdx !== i) {
            highlightBars([i, minIdx], 'swapping');
            onSwap();

            [array[i], array[minIdx]] = [array[minIdx], array[i]];
            updateBars([i, minIdx]);

            await sleep(speed);
        }

        // Clean all highlights and mark position as sorted
        removeBarsHighlight([i, minIdx]);
        document.getElementById(`bar-${i}`).classList.add('sorted');
    }

    // Mark last element as sorted
    document.getElementById(`bar-${n - 1}`).classList.add('sorted');
}

// Insertion Sort
async function insertionSort(onCompare, onSwap) {
    const n = array.length;

    for (let i = 1; i < n; i++) {
        let key = array[i];
        let j = i - 1;

        highlightBars([i], 'comparing');
        await sleep(speed);

        while (j >= 0) {
            highlightBars([j, j + 1], 'comparing');
            onCompare();
            await sleep(speed);

            if (array[j] > key) {
                highlightBars([j, j + 1], 'swapping');
                onSwap();

                array[j + 1] = array[j];
                updateBars([j + 1]);

                await sleep(speed);
                removeBarsHighlight([j, j + 1]);
                j--;
            } else {
                removeBarsHighlight([j, j + 1]);
                break;
            }
        }

        array[j + 1] = key;
        updateBars([j + 1]);
        removeBarsHighlight([i]);
    }
}

// Helper functions
function highlightBars(indices, className) {
    indices.forEach(index => {
        const bar = document.getElementById(`bar-${index}`);
        if (bar) bar.classList.add(className);
    });
}

function removeBarsHighlight(indices) {
    indices.forEach(index => {
        const bar = document.getElementById(`bar-${index}`);
        if (bar) {
            bar.classList.remove('comparing', 'swapping');
            // Força a re-renderização para garantir alinhamento
            bar.style.transform = '';
        }
    });
}

function updateBars(indices) {
    const maxValue = Math.max(...array);

    // Altura responsiva do container
    const isMobile = window.innerWidth <= 768;
    const maxBarHeight = isMobile ? 120 : 200; // Altura máxima mais conservadora no mobile

    indices.forEach(index => {
        const bar = document.getElementById(`bar-${index}`);
        if (bar) {
            const barHeight = Math.min((array[index] / maxValue) * maxBarHeight, maxBarHeight);
            bar.style.height = `${barHeight}px`;
            bar.textContent = array[index];
        }
    });
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Localization helper
function getLocalizedText(key, params = {}) {
    const locale = document.documentElement.lang || 'pt';

    const translations = {
        pt: {
            arrayGenerated: 'Array gerado! Escolha um algoritmo para ordenar.',
            bubbleSortRunning: 'Bubble Sort em execução...',
            selectionSortRunning: 'Selection Sort em execução...',
            insertionSortRunning: 'Insertion Sort em execução...',
            sortCompleted: (algorithm) => `${algorithm.charAt(0).toUpperCase() + algorithm.slice(1)} Sort concluído!`,
            stats: ({ duration, comparisons, swaps }) => `Tempo: ${duration}ms | Comparações: ${comparisons} | Trocas: ${swaps}`
        },
        en: {
            arrayGenerated: 'Array generated! Choose an algorithm to sort.',
            bubbleSortRunning: 'Bubble Sort running...',
            selectionSortRunning: 'Selection Sort running...',
            insertionSortRunning: 'Insertion Sort running...',
            sortCompleted: (algorithm) => `${algorithm.charAt(0).toUpperCase() + algorithm.slice(1)} Sort completed!`,
            stats: ({ duration, comparisons, swaps }) => `Time: ${duration}ms | Comparisons: ${comparisons} | Swaps: ${swaps}`
        }
    };

    const text = translations[locale][key];
    return typeof text === 'function' ? text(params) : text;
}
