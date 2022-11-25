<template>
    <div>
        <div class="theme-colors mt-4">
            <input type="radio" id="gray" name="color"  value="gray" checked/>
            <label for="gray" class="gray"></label>
            <input type="radio" id="blue" name="color"  value="blue"/>
            <label for="blue" class="blue"></label>
            <input type="radio" id="pink" name="color"  value="pink"/>
            <label for="pink" class="pink"></label>
            <input type="radio" id="yellow" name="color"  value="yellow"/>
            <label for="yellow" class="yellow"></label>
            <input type="radio" id="green" name="color"  value="green"/>
            <label for="green" class="green" ></label>
            <input type="radio" id="orange" name="color"  value="orange"/>
            <label for="orange" class="orange"></label>
            <input type="radio" id="purple" name="color"  value="purple"/>
            <label for="purple" class="purple"></label>
            <input type="radio" id="red" name="color"  value="red"/>
            <label for="red" class="red"></label>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>


<style>
    .theme-colors input[type="radio"] {
        opacity: 0;
        position: fixed;
        width: 0;
    }
    .theme-colors label {
        display: inline-block;
        height: 1.5rem;
        width: 1.5rem;
        border-radius: 50px;
        border: 1px solid #fff;
    }

    .theme-colors input[type="radio"]:checked + label {
        opacity: 0.9;
        border: 2px solid #000;
        -webkit-box-shadow: 2px -1px 5px 0px rgba(50, 50, 50, 0.5);
        -moz-box-shadow:    2px -1px 5px 0px rgba(50, 50, 50, 0.5);
        box-shadow:         2px -1px 5px 0px rgba(50, 50, 50, 0.5);
       
    }

    .gray {
        background-color: #111827;
    }

    .blue {
        background-color: #024E9A;
    }

    .pink {
        background-color: #A91B60;
    }

    .purple {
        background-color: #4D34A0;
    }

    .yellow {
        background-color: #FCD61B;
    }

    .orange {
        background-color: #FF7D63;
    }

    .red {
        background-color: #F94232;
    }

    .green {
        background-color: #285C46;
    }

</style>



