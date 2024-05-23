document.addEventListener("DOMContentLoaded", () => {
  const save = document.getElementById("save");
  const editor = new EditorJS({
    holder: "editor",
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
  save.addEventListener("click", (e) => {
    editor
      .save()
      .then((outputData) => {
        let blob = new Blob([JSON.stringify(outputData.blocks)], { type: "application/json" });
        e.target.download = prompt("The article permalink name?", "article");
        e.target.href = URL.createObjectURL(blob);
      })
      .catch((error) => {
        alert("Saving failed: ", error);
      });
  });
});
