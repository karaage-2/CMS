const save = document.getElementById("save");
save.addEventListener("click", () => {
    editor
        .save()
        .then((outputData) => {
            console.log("Article data: ", outputData);
        })
        .catch((error) => {
            console.log("Saving failed: ", error);
        });
});
