"use strict";

$.uploadPreview({
  input_field: "#image-upload",   // Default: .image-upload
  preview_box: "#image-preview",  // Default: .image-preview
  label_field: "#image-label",    // Default: .image-label
  label_default: "Choose File",   // Default: Choose File
  label_selected: "Change File",  // Default: Change File
  no_label: false,                // Default: false
  success_callback: null          // Default: null
});

 $.uploadPreview({
    input_field: "#image-upload2",
    preview_box: "#image-preview",
    label_field: "#image-label2",
    label_default: "Choose File",
    label_selected: "Change File",
    no_label: false,
    success_callback: null
  });
