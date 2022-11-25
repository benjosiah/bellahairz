<template>
     <div class="published">
        <input type="checkbox" name="published" class="published-checkbox" id="ispublished" :checked="status" >
        <label class="published-label" for="ispublished">
            <span class="published-inner"></span>
            <span class="published-switch"></span>
        </label>
    </div>
</template>

<script>
export default {
    props: ['status']
}
</script>


<style>
.published {
    position: relative; width: 155px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.published-checkbox {
    display: none;
}
.published-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 4px solid #efefef; border-radius: 20px;
}
.published-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.published-inner:before, .published-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.published-inner:before {
    content: "Published!";
    padding-left: 10px;
    background-color:#1DDE7D; color: #FFFFFF;
}
.published-inner:after {
    content: "Disabled";
    padding-right: 10px;
    background-color: #999; color: #FFFFFF;
    text-align: right;
}
.published-switch {
    display: block; width: 46px; margin: 2px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 101px;
    border: 2px solid #ffffff; border-radius: 20px;
    transition: all 0.3s ease-in 0s;
}
.published-checkbox:checked + .published-label .published-inner {
    margin-left: 0;
}
.published-checkbox:checked + .published-label .published-switch {
    right: 0px;
}
</style>
