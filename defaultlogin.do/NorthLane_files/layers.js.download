function myVoid() { }
function toggleLayer(layerNames)
{
    //alert('toggleLayer(' + layerNames + ')');
    if (layerNames != null && layerNames != '') {
        var layersToToggle = layerNames.split(",");
        var toggleThisLayer = "";
        for (var i=0; i < layersToToggle.length; i++) {
            toggleThisLayer = layersToToggle[i];
            //alert('[ REQUESTED LAYER TO TOGGLE = ' + toggleThisLayer + ' ]');
            var target = document.getElementById(toggleThisLayer);
            if (target != null) {
                if ( target.style.display != null) {
                    //alert('[ ' + toggleThisLayer + ' target.style.display = ' + target.style.display + ' ]');
                    if ( target.style.display == 'none') {
                        //alert('[ *** SETTING ' + toggleThisLayer + ' TO BLOCK *** ]');
                        target.style.display = "block";
                    } else {
                        //alert('[ *** SETTING ' + toggleThisLayer + ' TO NONE *** ]');
                        target.style.display = "none";
                    }
                }
            }
        }
    }
    return;
}
function disableButtons(disableThese)
{
    //alert('disableButtons(' + disableThese + ')');
    if (disableThese != null && disableThese != '') {
        var buttonsToDisable = disableThese.split(",");
        var disableThisButton = "";
        for (var i=0; i < buttonsToDisable.length; i++) {
            disableThisButton = buttonsToDisable[i];
            try {
                var disableTarget = document.getElementById(disableThisButton);
                if(disableTarget != null) {
                    disableTarget.disabled = true;
                }
            } catch (e) {
            }
        }
    }
    return;
}
function hideLayers(hideLayers)
{
    //alert('hideLayers(' + hideLayers + ')');
    if (hideLayers != null && hideLayers != '') {
        var layersToHide = hideLayers.split(",");
        var hideThisLayer = "";
        for (var i=0; i < layersToHide.length; i++) {
            hideThisLayer = layersToHide[i];
            //alert('hideThisLayer => ' + hideThisLayer);
            if (hideThisLayer != null && hideThisLayer != '' && hideThisLayer != ',') {
                var hideTarget = document.getElementById(hideThisLayer);
                if (hideTarget != null) {
                    hideTarget.style.display = "none";
                }
            }
        }
    }
    return;
}
function displayLayers(displayLayers)
{
    //alert('displayLayers(' + displayLayers + ')');
    if (displayLayers != null && displayLayers != '') {
        var layersToDisplay = displayLayers.split(",");
        var displayThisLayer = "";
        for (var i=0; i < layersToDisplay.length; i++) {
            displayThisLayer = layersToDisplay[i];
            if (displayThisLayer != null && displayThisLayer != '' && displayThisLayer != ',') {
                //alert('displayThisLayer => ' + displayThisLayer);
                var displayTarget = document.getElementById(displayThisLayer);
                if (displayTarget != null) {
                    displayTarget.style.display = "block";
                }
            }
        }
    }
    return;
}
function disableLayers(disableLayers)
{
    //alert('disableLayers(' + disableLayers + ')');
    if (disableLayers != null && disableLayers != '') {
        var layersToDisable = disableLayers.split(",");
        var disableThisLayer = "";
        for (var i=0; i < layersToDisable.length; i++) {
            disableThisLayer = layersToDisable[i];
            //alert('disableThisLayer => ' + disableThisLayer);
            var disableTarget = document.getElementById(disableThisLayer);
            if (disableTarget != null) {
                disableTarget.style.display = "none";
            }
        }
    }
    return;
}
function enableLayers(enableLayers)
{
    //alert('enableLayers(' + enableLayers + ')');
    if (enableLayers != null && enableLayers != '') {
        var layersToEnable = enableLayers.split(",");
        var enableThisLayer = "";
        for (var i=0; i < layersToEnable.length; i++) {
            enableThisLayer = layersToEnable[i];
            //alert('enableThisLayer => ' + enableThisLayer);
            var enableTarget = document.getElementById(enableThisLayer);
            if (enableTarget != null) {
                enableTarget.style.enable = "block";
            }
        }
    }
    return;
}
function hideAndDisplayLayers(hideStuff,displayStuff)
{
    //alert('hideAndDisplayLayers(' + hideStuff + ',' + displayStuff + ')');
    if (hideStuff != null && hideStuff != '') hideLayers(hideStuff);
    if (displayStuff != null && displayStuff != '') displayLayers(displayStuff);
}
function formSubmitOnce(disableStuff,hideStuff,displayStuff)
{
    //alert('formSubmitOnce(\'' + disableStuff + '\' , \'' + hideStuff + '\' , \'' + displayStuff + '\')');
    if (disableStuff != null && disableStuff != '') disableButtons(disableStuff);
    if (hideStuff != null && hideStuff != '') hideLayers(hideStuff);
    if (displayStuff != null && displayStuff != '') displayLayers(displayStuff);
}

function hide2AndDisplayLayers(hideStuff1,hideStuff2,displayStuff)
{
    if (hideStuff1 != null && hideStuff1 != '') hideLayers(hideStuff1);
    if (hideStuff2 != null && hideStuff2 != '') hideLayers(hideStuff2);
    if (displayStuff != null && displayStuff != '') displayLayers(displayStuff);
}

function disableButtonsTimer(disableThese)
{
    //alert('disableButtonsTimer(' + disableThese + ')');
    if (disableThese != null && disableThese != '') {
        var disableFunction = "disableButtons('" + disableThese + "')";
        //alert("==> " + disableFunction);
        setTimeout(disableFunction,500);
    }
    return;
}
function enableProgramSelection()
{
    var programSelect = document.getElementById('programInfo.programSelection');
    var promotionSelect = document.getElementById('programInfo.promotionSelection');
    if (programSelect.disabled == true) programSelect.disabled = false;
    if (promotionSelect.style.display != "none" && promotionSelect.disabled == true) promotionSelect.disabled = false;
}
