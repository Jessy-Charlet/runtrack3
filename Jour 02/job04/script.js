let textarea = document.getElementById('keylogger');
let activeElement = document.activeElement;

function addArea() {
    document.addEventListener('keydown', (e) => {
        if (activeElement == textarea) {
            textarea.insertAdjacentText('beforeend', e.key + e.key);
        }
        else {
            textarea.insertAdjacentText('beforeend', e.key);
        }
    }
    );
}

addArea();
