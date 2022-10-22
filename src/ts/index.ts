
customElements.define("test-message", class extends HTMLElement {
  constructor() {
    super()
      const template = document.getElementById("test_message") as HTMLElement
      const content = template?.content
      const shadowRoot = this.attachShadow({mode: "open"}).appendChild(content.cloneNode(true))
  }
})
customElements.define("see-more", class extends HTMLElement {
  constructor() {
    super()
    // const template = document.getElementById("see-more") as HTMLElement
    // const content = template?.content
    // const shadowRoot = this.attachShadow({mode: "open"}).appendChild(content.cloneNode(true))
  }

  connectedCallback() {

  }
})