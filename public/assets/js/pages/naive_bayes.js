$("#naive-bayes-table").DataTable();

$("#selectTitle").on("change", function () {
    var selectTitle = $(this).val();
    var bookType = $("#bookType");

    if (selectTitle == "Dilan 1990") {
        bookType.val("Romantis");
    } else if (selectTitle == "Hendrick") {
        bookType.val("Biografi");
    } else if (selectTitle == "Hujan") {
        bookType.val("Fiksi");
    } else if (selectTitle == "Rasuk") {
        bookType.val("Horor");
    } else if (selectTitle == "William") {
        bookType.val("Biografi");
    }
});
