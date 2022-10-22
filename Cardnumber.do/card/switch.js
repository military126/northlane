function display(target, displayMode) {
    var t = document.getElementById(target);

    if(t != null) {
        t.style.display = displayMode;
    }
}

function hide(target) {
    var t = document.getElementById(target);

    if(t != null) {
        t.style.display = "none";
    }
}

function isDisplayed(target) {
    var t = document.getElementById(target);

    if(t != null) {
        return t.style.display != "" && t.style.display != "none";
    }
    else {
        return false;
    }
}

function toggle(elementID){
	var target1 = document.getElementById(elementID)
		
	if (target1.style.display == 'none') {
		target1.style.display = 'block'
	} else {
		target1.style.display = 'none'
	}
}