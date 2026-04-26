<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pertemuan 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #7fb9f4;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .framecolor {
            background-color: white;
            margin: 30px 80px 30px 80px;
        }

        .title {
            text-align: center;
            font-size: xx-large;
            font-weight: 400;
            margin: 45px 50px 0px 50px;
        }

        .main {
            margin: 60px 120px 60px 120px;
        }

        .marginright {
            margin-right: 90px;
        }

        .paddingrow {
            padding: 60px 30px 120px 30px;
        }

        .profile {
            text-align: center;
        }

        .profile img {
            width: 90px;
            height: 90px;
            object-fit: cover;
        }

        .quote {
            font-size: small;
            font-style: italic;
            color: rgb(144, 144, 144);
            margin-bottom: 60px;
        }

        .nama {
            font-size: small;
            font-weight: 600;
        }

        .jabatan {
            font-size: small;
            color: rgb(144, 144, 144);
            font-weight: 400;
            font-style: italic;
        }

        .logo {
            background-color: #0066cc;
            padding: 120px 160px 120px 160px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="framecolor">
        <div>
            <!-- judul -->
            <div class="row">
                <div class="col ">
                    <div class="title">
                        Our client love us.
                    </div>
                </div>
            </div>
            <!-- main -->
            <div class="main">
                <div>
                    <!-- baris 1 -->
                    <div class="row paddingrow">
                        <!-- profil 1 -->
                        <div class="col-2 ">
                            <div class="profile">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrQ8yBKdNVPSoiBS4S0MbEbOB--HT7JmGf-w&s"
                                    alt="" class="rounded-circle" alt="profil 1">
                            </div>
                        </div>
                        <div class="col-3 marginright">
                            <div class="row">
                                <div class="col">
                                    <div class="quote">
                                        “Innovation and sustainability drive everything we do at Unilever to improve
                                        everyday life.”
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="nama">
                                        ALAN JOPE
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="jabatan">
                                        Former CEO of Unilever
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 ">
                            <div class="profile">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLGBpqoh_QVCGgS02P9dlYA60R5HmpFhtndL77HFo1bCBX6Z0ny5vXuZSKFyt3-GqhW4FQdwgeyw2mKKr7l3J4kPiHcOKAMj2BJXpVqt65&s=10"
                                    alt="" class="rounded-circle" alt="profil 2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col ">
                                    <div class="quote">
                                        “Innovation and sustainability drive everything we do at Unilever to improve
                                        everyday life.”
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="nama">
                                        HEIN SCHUMACHER
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="jabatan">
                                        CEO of Unilever
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- baris 2 -->
                    <div class="row paddingrow">
                        <div class="col-2 ">
                            <div class="profile">
                                <img src="data:image/jpeg;base64,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"
                                    alt="" class="rounded-circle" alt="profi 3">
                            </div>
                        </div>
                        <div class="col-3 marginright">
                            <div class="row">
                                <div class="col">
                                    <div class="quote">
                                        “Data, technology, and collaboration strengthen Unilever’s growth worldwide.”
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="nama">
                                        GRAEME PITKETHLY
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="jabatan">
                                        Former CFO of Unilever
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 ">
                            <div class="profile">
                                <img src="data:image/jpeg;base64,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"
                                    alt="" class="rounded-circle" alt="profil 4">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col ">
                                    <div class="quote">
                                        “Working together enables us to deliver better products for millions of
                                        consumers.”
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="nama">
                                        SUNIL D’SOUZA
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="jabatan">
                                        Former Unilever Executive
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- logo -->
            <div class="logo">
                <div class="row">
                    <div class="col-2">
                        <div>
                            <img src="https://www.unilever.co.id/content-images/92ui5egz/production/b953900d039e64d54e396b500343f64065fe3f62-280x280.jpg?w=160&h=160&fit=crop&auto=format"
                                alt="" height="75px">
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="https://www.unilever.co.id/content-images/92ui5egz/production/fa3cb6f1a030086ccbd2b112d9a06418a8f07fa1-1080x1080.png?w=160&h=160&fit=crop&auto=format"
                                alt="" height="75px">
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="https://www.unilever.co.id/content-images/92ui5egz/production/d8447f3984055cf69641d5497c63c90bdc6da46e-1080x1080.jpg?w=160&h=160&fit=crop&auto=format"
                                alt="" height="75px">
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="https://www.unilever.co.id/content-images/92ui5egz/production/25a54e5c0d33ca2e373190b483c34330cdb09abc-1080x1080.jpg?w=160&h=160&fit=crop&auto=format"
                                alt="" height="75px">
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="https://www.unilever.co.id/content-images/92ui5egz/production/18fde71cd8fa5407d5e39d41ded8cb2468a3ff88-1080x1080.jpg?w=160&h=160&fit=crop&auto=format"
                                alt="" height="75px">
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="https://www.unilever.co.id/content-images/92ui5egz/production/990a82ebf4b2895341b0a7b98d85c0b1c3819956-1080x1080.jpg?w=160&h=160&fit=crop&auto=format"
                                alt="" height="75px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
