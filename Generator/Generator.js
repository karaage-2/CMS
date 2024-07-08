document.addEventListener("DOMContentLoaded", () => {
  let isMenuOpen = false;
  const editor = new EditorJS({
    holder: "editor",
    data: "",
    tools: {
      header: {
        class: Header,
        inlineToolbar: ["link"],
      },
      list: List,
      checklist: Checklist,
      quote: Quote,
      code: CodeTool,
    },
  });
  //-----------------------------------------------
  const save = document.getElementById("save");
  save.addEventListener("click", (e) => {
    editor
      .save()
      .then((outputData) => {
        let blob = new Blob([JSON.stringify(outputData.blocks)], { type: "application/json" });
        if (document.getElementById("title").textContent) {
          e.target.download = document.getElementById("title").textContent;
        } else {
          e.target.download = "1";
        }
        e.target.href = URL.createObjectURL(blob);
      })
      .catch((error) => {
        alert("Error: ", error);
      });
  });
  //-----------------------------------------------
  const load = document.forms.JSONloader;
  load.addEventListener('change', function (e) {
    let result = e.target.files[0];
    let reader = new FileReader();
    reader.readAsText(result);
    reader.addEventListener('load', function () {
      let loadedData = JSON.stringify(reader.result, null, "\t");
      console.log(loadedData);
      console.log(result);
      editor.render(loadedData);
      this.editor.data = loadedData;
      editor.render();
    })
  })
});
