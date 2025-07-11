function calcularDiasSemUpdate() {
    const dataInicio = new Date(2022, 10, 1); // 01/11/2022 (mês começa em 0)
    const hoje = new Date();
    const diffTime = hoje - dataInicio;
    const diffDias = Math.floor(diffTime / (1000 * 60 * 60 * 24));
    document.getElementById('diasSemUpdate').textContent = diffDias;
    document.getElementById('recordeDias').textContent = diffDias;
}
window.addEventListener('DOMContentLoaded', calcularDiasSemUpdate);
