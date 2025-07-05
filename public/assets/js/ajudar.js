document.addEventListener('DOMContentLoaded', function () {
    const copyBtn = document.getElementById('copy-endereco');
    const feedback = document.getElementById('copy-feedback');

    if (copyBtn && feedback) {
        copyBtn.addEventListener('click', function () {
            const endereco = "LOREM LOREM - LOREM, 12345";
            navigator.clipboard.writeText(endereco).then(function () {
                feedback.style.display = 'inline';
                setTimeout(() => {
                    feedback.style.display = 'none';
                }, 2000);
            }).catch(function (err) {
                console.error("Erro ao copiar: ", err);
            });
        });
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const copyBtn = document.getElementById('copy-pix');
    const feedback = document.getElementById('copy-feedback-pix');

    if (copyBtn && feedback) {
        copyBtn.addEventListener('click', function () {
            const chave = "51981536015";
            navigator.clipboard.writeText(chave).then(function () {
                feedback.style.display = 'inline';
                setTimeout(() => {
                    feedback.style.display = 'none';
                }, 2000);
            }).catch(function (err) {
                console.error("Erro ao copiar: ", err);
            });
        });
    }
});