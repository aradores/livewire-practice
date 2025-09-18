import './bootstrap';

Livewire.directive('bigger-text', ({ el, directive, component, cleanup }) => {
    let content =  directive.expression

    let onClick = e => {
        e.target.className = 'text-4xl'
    }

    el.addEventListener('click', onClick, { capture: true })

    cleanup(() => {
        el.removeEventListener('click', onClick)
    })
})

