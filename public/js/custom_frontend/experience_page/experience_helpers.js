function escapeHtml(str) {
    if (!str) return "";
    return str
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;");
}

function nl2br(str) {
    return escapeHtml(str).replace(/\n/g, "<br>");
}

function highlightText(text, keyword) {
    if (!text) return "";

    const safe = escapeHtml(text);

    if (!keyword) return safe.replace(/\n/g, "<br>");

    const regex = new RegExp(`(${keyword})`, "gi");

    return safe
        .replace(regex, `<mark class="highlight-word">$1</mark>`)
        .replace(/\n/g, "<br>");
}

function normalizeText(text) {
    return (text || "").toLowerCase().replace(/\s+/g, " ").trim();
}

function countWords(text) {
    return normalizeText(text).split(" ").filter(Boolean).length;
}

function countMatches(text, keyword) {
    if (!text || !keyword) return 0;

    const safe = text.toLowerCase();
    const key = keyword.toLowerCase();

    return (safe.match(new RegExp(key, "g")) || []).length;
}