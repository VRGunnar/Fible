if (document.readyState !== 'loading') {
    setupTabs();
} else {
    document.addEventListener('DOMContentLoaded', function () {
        setupTabs();
    });
}

function setupTabs() {
    document.querySelectorAll(".choice").forEach(button => {
        button.addEventListener('click', () => {
            const choices = button.parentElement;
            const content = choices.parentElement;
            const choiceName = button.dataset.forTab;
            const choiceActivate = content.querySelector(`.tab[data-tab="${choiceName}"]`)

            choices.querySelectorAll('button').forEach(button => {
                button.classList.remove('btn-active');
                button.classList.add('btn-non-active');
            })
            content.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('tab-active');
            })
            button.classList.add('btn-active');
            button.classList.remove('btn-non-active');
            choiceActivate.classList.add('tab-active');
        })
    })
}

const card = document.querySelector('.cardInner');
card.addEventListener('click', function () {
    card.classList.toggle('isFlipped');
})