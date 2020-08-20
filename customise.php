<div id="customiseSidebar" class="sidebar"> 
        <a href="javascript:void(0)" id="closeButton">&times;</a>
        <h2>Customise</h2>
        <form>
            <fieldset>
                <legend>Change Colours</legend>
                <div class="form-option"><input type="radio" name="mode" id="dayMode" value="1" checked onclick="swapStyleSheet('include/css/day-mode.css')"><label for="dayMode">Day Mode</label></div>
                <div class="form-option"><input type="radio" name="mode" id="eveningMode" value="2" onclick="swapStyleSheet('include/css/evening-mode.css')"><label for="eveningMode">Evening Mode</label></div>
                <div class="form-option"><input type="radio" name="mode" id="nightMode" value="3" onclick="swapStyleSheet('include/css/night-mode.css')"><label for="nightMode">Night Mode</label></div>
            </fieldset>

            <fieldset>
                <legend>Change Font</legend>
                <div class="form-option"><input type="radio" name="font" id="openDyslexic" value="1" onclick="changeFont('include/css/openDyslexic.css')"><label for="openDyslexic">Open Dyslexic</label></div>
                <div class="form-option"><input type="radio" name="font" id="quickSand" value="2" checked onclick="changeFont('include/css/quickSand.css')"><label for="quickSand">Quicksand</label></div>
            </fieldset>

            <button id="save">Save Changes</button>
        </form>



       <!-- <button class="button-left" id="lightMode" onclick="swapStyleSheet('include/css/day-mode.css')">Day</button>
        <button class="button-middle" id="eveningMode" onclick="swapStyleSheet('include/css/evening-mode.css')">Evening</button>
        <button class="button-right" id="darkMode" onclick="swapStyleSheet('include/css/night-mode.css')">Night</button>
        <br>
        <button class="button-left" onclick="changeFontDys()">Open Dyslexic</button>
        <button class="button-right" onclick="changeFontQui()">Quicksand</button> -->
    </div>