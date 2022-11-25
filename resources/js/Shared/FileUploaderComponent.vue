<template>
    <div class="">
        <vue-dropzone
            ref="myVueDropzone"
            :options="dropzoneOptions"
            @vdropzone-success="uploadSuccess"
            @vdropzone-error="uploadError"
            @vdropzone-removed-file="fileRemoved"
            @vdropzone-sending="sendingEvent"
            :include-styling="false"
            :useCustomSlot="true"
            v-on:vdropzone-thumbnail="thumbnail"
            id="customdropzone"
            class="flex flex-wrap items-center justify-center text-sm px-4 py-8 bg-green-50 text-gray-700"
            @click="message()">

            <div class="dropzone-custom-content text-center">
                <span
                    class="
                        dropzone-custom-title
                        rounded
                        bg-gray-500
                        py-2
                        px-4
                        text-white
                        inline-block
                    "
                    >Upload image</span
                >
            </div>
        </vue-dropzone>
    </div>
</template>

<script>
import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";

export default {
    components: {
        vueDropzone: vue2Dropzone,
    },
    props: ["productId"],
    data() {
        return {
            dropzoneOptions: {
                url: "/product-media",
                addRemoveLinks: true,
                previewTemplate: this.template(),
                acceptedFiles: "image/jpeg,image/png,image/gif,image/jpg",
                maxFilesize: 15,
                maxFiles: 3,
                dictDefaultMessage: "UPLOAD ME",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
            },
        };
    },
    methods: {
        uploadSuccess(file, response) {
            this.$emit("file-uploaded", response);
        },
        uploadError(file, message) {
            console.log(`An Error Occurred: ${JSON.stringify(message)}`);
        },
        fileRemoved() {
        },
        sendingEvent(file, xhr, formData) {
            if (this.productId) {
                formData.append("product_id", this.productId);
            }
        },
        template: function () {
            return `
            <div class="dz-preview dz-file-preview mr-2 mt-2">
                <div class="dz-image">
                    <div data-dz-thumbnail-bg class="w-28 h-28 bg-center bg-cover rounded-md"></div>
                </div>
                <div class="dz-details mt-2">
                    <div class="dz-size"><span data-dz-size></span></div>
                </div>
                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
            </div>
        `;
        },
        thumbnail: function (file, dataUrl) {
            var j, len, ref, thumbnailElement;
            if (file.previewElement) {
                file.previewElement.classList.remove("dz-file-preview");
                ref = file.previewElement.querySelectorAll(
                    "[data-dz-thumbnail-bg]"
                );
                for (j = 0, len = ref.length; j < len; j++) {
                    thumbnailElement = ref[j];
                    thumbnailElement.alt = file.name;
                    thumbnailElement.style.backgroundImage =
                        'url("' + dataUrl + '")';
                }
                return setTimeout(
                    (function (_this) {
                        return function () {
                            return file.previewElement.classList.add(
                                "dz-image-preview"
                            );
                        };
                    })(this),
                    1
                );
            }
        },
        message: function () {
            var message = document.querySelector(".dz-message");
            message.style.display = "none";
        },
    },
};
</script>
<style scoped></style>