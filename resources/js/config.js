function getMetaContent(metaName) {
    const metaElement = document.querySelector(`meta[name="${metaName}"]`);
    return metaElement ? metaElement.getAttribute("content") : null;
}

const csrf = getMetaContent("csrf-token");


export {csrf };