$("#naive-bayes-table").DataTable();

$("#selectCode").on("change", function () {
    var selectCode = $(this).val();
    var bookTitle = $("#bookTitle");
    var bookType = $("#bookType");

    if (selectCode == "20160067") {
        bookTitle.val("Hendrick");
        bookType.val("Biografi");
    } else if (selectCode == "20160156") {
        bookTitle.val("Hujan");
        bookType.val("Fiksi");
    } else if (selectCode == "20160168") {
        bookTitle.val("Dilan 1990");
        bookType.val("Romantis");
    } else if (selectCode == "20160177") {
        bookTitle.val("William");
        bookType.val("Biografi");
    } else if (selectCode == "20160181") {
        bookTitle.val("Rasuk");
        bookType.val("Horor");
    }
});

$("#selectName").on("change", function () {
    var selectName = $(this).val();
    var nameClass = $("#nameClass");

    if (selectName == "Aisyah Sri Hidayati") {
        nameClass.val("1");
    } else if (selectName == "Alia Salsabila") {
        nameClass.val("2");
    } else if (selectName == "Aliffah Kasih Widyowati") {
        nameClass.val("3");
    } else if (selectName == "Anastasya Vega Marlina") {
        nameClass.val("2");
    } else if (selectName == "Asyera Ajeng Putri Utami") {
        nameClass.val("1");
    } else if (selectName == "Cecillia Dwi Astuti") {
        nameClass.val("1");
    } else if (selectName == "Claudia Sansevieria") {
        nameClass.val("1");
    } else if (selectName == "Davina Nada Kirana") {
        nameClass.val("2");
    } else if (selectName == "Debora Panti Kusdarwati") {
        nameClass.val("3");
    } else if (selectName == "Dewi Wulan Andini") {
        nameClass.val("1");
    } else if (selectName == "Eksan Nuri Nugroho") {
        nameClass.val("3");
    } else if (selectName == "Elvina Bunga Sabella") {
        nameClass.val("2");
    } else if (selectName == "Evita Ayu Tri Hapsari") {
        nameClass.val("1");
    } else if (selectName == "Faisa Firyal Nayaka") {
        nameClass.val("1");
    } else if (selectName == "Fernika Isma Nabilla") {
        nameClass.val("1");
    } else if (selectName == "Fitri Ramadani") {
        nameClass.val("3");
    } else if (selectName == "Hanif Elinna Alkariim") {
        nameClass.val("2");
    } else if (selectName == "Iik Suryani, S.Sn.") {
        nameClass.val("1");
    } else if (selectName == "Kolin Feren Huda Mega Buana") {
        nameClass.val("2");
    } else if (selectName == "Lolita Cani Fatikha") {
        nameClass.val("1");
    } else if (selectName == "Maulana Bagus Saputra") {
        nameClass.val("1");
    } else if (selectName == "Muhammad Dava Syahputra") {
        nameClass.val("1");
    } else if (selectName == "Mutiah Nur Relawati Al Hakim") {
        nameClass.val("2");
    } else if (selectName == "Nabilah Tevy Huwaidah") {
        nameClass.val("1");
    } else if (selectName == "Namila Neysa Setya Putri") {
        nameClass.val("2");
    } else if (selectName == "Nandhita Nur Aqilla") {
        nameClass.val("3");
    } else if (selectName == "Nazma Lola Britania") {
        nameClass.val("1");
    } else if (selectName == "Neza Amelia Agustina") {
        nameClass.val("3");
    } else if (selectName == "Nurani Istigfarrani") {
        nameClass.val("1");
    } else if (selectName == "Ramadina Aulia Nuroviah") {
        nameClass.val("3");
    } else if (selectName == "Ratna Pangestu") {
        nameClass.val("3");
    } else if (selectName == "Rianti Bimas Pratitis") {
        nameClass.val("3");
    } else if (selectName == "Sabrina Mahiya Damai Gozali") {
        nameClass.val("2");
    } else if (selectName == "Sintya Nomi Susilowati") {
        nameClass.val("2");
    } else if (selectName == "Syafa Alifia Ramadani") {
        nameClass.val("3");
    } else if (selectName == "Tiara Putri Pratiwi") {
        nameClass.val("3");
    } else if (selectName == "Yesha Desidera") {
        nameClass.val("3");
    } else if (selectName == "Yesi Tiya Anggraini") {
        nameClass.val("1");
    } else if (selectName == "Yumna Auliyaa Tsabitah") {
        nameClass.val("2");
    } else if (selectName == "Yunia Adellita Putri Setyawan") {
        nameClass.val("2");
    } else if (selectName == "Yusrina Mum Mu'alimah") {
        nameClass.val("1");
    } else if (selectName == "Zahwa Nabilah") {
        nameClass.val("3");
    }
});
