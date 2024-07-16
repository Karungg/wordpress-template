document.addEventListener("DOMContentLoaded", function () {
  if(document.querySelector("footer")) {
    var footer = document.querySelector("footer");
    if (footer) {
        var footerInnerDiv = footer.querySelector("div");
        if (footerInnerDiv) {
            var htmlContent = `
                <div style="color: #fff; margin-block-start: var(--wp--preset--spacing--40) !important;">
                    <small>
                        Savora Wordpress Theme. Designed by: 
                        <a style="color: #fff;" href="https://effethemes.com/" data-type="link" data-id="https://effethemes.com/" target="_blank" rel="noreferrer noopener">
                            Effe Themes
                        </a>
                    </small>
                </div>
            `;
            footerInnerDiv.innerHTML += htmlContent;
        }
    }
  }
});
