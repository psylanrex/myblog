const hasSubmenu = document.getElementsByClassName('has-submenu')
const countHasSubmenu = hasSubmenu.length

for (var i = 0; i < countHasSubmenu; i++) {
    let keepParentActive = false
    const submenu = hasSubmenu[i].nextElementSibling
    keepSubmenuOpen(keepParentActive, hasSubmenu[i], submenu.children)
    if (hasSubmenu[i].classList.contains('is-active')) {
        setSubmenuStyles(submenu, submenu.scrollHeight, '0.75em')
    }
    
    hasSubmenu[i].onclick = function() {
        const currentActive = document.getElementsByClassName('is-active')
        for (var j = 0; j < currentActive.length; j++) {
            currentActive[j].classList.remove('is-active')
        }
        this.classList.toggle('is-active')
        if (this.classList.contains('is-active')) {
            setSubmenuStyles(submenu, submenu.scrollHeight, '0.75em')
        } else {
            setSubmenuStyles(submenu, null, '0')
        }
        keepSubmenuOpen(keepParentActive, this, submenu.children)
    }
}

/**
 * Creates style for submenu expansion or collapse
 **/
 
function setSubmenuStyles(submenu, maxHeight, margins) {
    submenu.style.maxHeight = maxHeight + 'px'
    submenu.style.marginTop = margins
    submenu.style.marginBottom = margins
}

/**
 * Keeps submenu open if an element of that submenu is active  
 **/
function keepSubmenuOpen(keep=false, parent, children) {
    for (var m = 0; m < children.length; m++) {
        if (children[m].firstElementChild.classList.contains('is-active')) {
            keep = true
            break
        }
    }
    if (keep) {
        parent.classList.add('is-active')
    }
}