class Gallery {
  constructor(data) {
    this.data = data;
    this.loadProject(data[0].apiUrl);
  }

  loadProject(url) {
    $.getJSON(url, data => {
      console.log(data);
    });
  }
}

window.Gallery = Gallery;
