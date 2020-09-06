let footerElement = document.querySelector('.webfooterbar')

function component() {
    let element = document.createElement('div');
    element.innerHTML = 'Curso webpack';

    return element;
}

footerElement.appendChild(component());