<style>
    input[type="checkbox"] {
        display: none;
    }

    input[type="checkbox"] + .input::before {
        background-color: red;
        content: "+";
    }

    input[type="checkbox"]:checked + .input::before {
        content: "-";
        background-color: green;
    }
</style>
<div>
    <label>
        <input type="checkbox">
        <span class="input">
            <span class="selected">Selected</span>
            <span class="none">None</span>
        </span>
    </label>
</div>

