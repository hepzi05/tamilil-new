<?php
session_start();

if (isset($_POST["searchButton"])) {
    $_SESSION["searchedDomain"] = $_POST["search"];
}

if (isset($_POST['choose'])) {
    header("Location: domain-thankyou.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head><?php #include "html-head.php"; 
        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your website in tamil : Tamilil.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@300;400;700&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-theme justify-content-between px-4 px-lg-5 py-3">
                <a href="../index.php" class="navbar-brand p-0">
                    <img src="../assets/img/tamili-logo-white.png" class="brand-logo" alt="Logo">
                </a>
                <div class="float-end">
                    <a href="pages/login.php" class="btn btn-theme me-4">Login</a>
                    <a href="#domain" class="btn btn-theme">Get Started</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Domain Search Start -->
        <div class="container-xxl domain mb-5" id="domain" style="padding-top:7.5rem;">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <form method="post">
                        <div class="col-lg-10">
                            <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="mb-3">உங்கள் இணைய முகவரியை தெரிவு செய்யுங்கள்</h1>
                            </div>
                            <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" id="search" name="search" type="text" value="<?php echo ($_SESSION['searchedDomain']); ?>" placeholder="முருகன்.com">
                                <button name="searchButton" onclick="searchDomain()" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">தேடுக</button>
                            </div>
                            <div class="card wow fadeInUp mt-3 mb-3 shadow">
                                <div class="card-body">
                                    <h5 class="fw-bold"><?php echo ($_SESSION["searchedDomain"]); ?></h5>
                                    <p class="text-success fw-bold" id="searchedAvailable"></p>
                                    <button onclick="setReg()" name="choose" id="choose" style="visibility: hidden;" class="btn btn-primary float-end">பதிக</button>
                                </div>
                            </div>
                            <!-- <div class="wow fadeInUp">
                                <h4 class="fw-bold">Related domain</h5>
                                    <div class="card wow fadeInUp mt-3">
                                        <div class="card-body">
                                            <h5 class="fw-bold">domain1.com</h5>
                                            <p class="text-success fw-bold">Available</p>
                                            <button onclick="setReg()" name="submit" class="btn btn-primary float-end">பதிக</button>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp mt-3">
                                        <div class="card-body">
                                            <h5 class="fw-bold">domain2.com</h5>
                                            <p class="text-success fw-bold">Available</p>
                                            <button onclick="setReg()" name="submit" class="btn btn-primary float-end">பதிக</button>
                                        </div>
                                    </div>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Domain Search End -->

        <!-- Footer Start -->
        <?php include "components/footer.php"; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/counterup/counterup.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/nav.js"></script>
    <script>
        var punycode = new function Punycode() {
            // This object converts to and from puny-code used in IDN
            //
            // punycode.ToASCII ( domain )
            // 
            // Returns a puny coded representation of "domain".
            // It only converts the part of the domain name that
            // has non ASCII characters. I.e. it dosent matter if
            // you call it with a domain that already is in ASCII.
            //
            // punycode.ToUnicode (domain)
            //
            // Converts a puny-coded domain name to unicode.
            // It only converts the puny-coded parts of the domain name.
            // I.e. it dosent matter if you call it on a string
            // that already has been converted to unicode.
            //
            //
            this.utf16 = {
                // The utf16-class is necessary to convert from javascripts internal character representation to unicode and back.
                decode: function(input) {
                    var output = [],
                        i = 0,
                        len = input.length,
                        value, extra;
                    while (i < len) {
                        value = input.charCodeAt(i++);
                        if ((value & 0xF800) === 0xD800) {
                            extra = input.charCodeAt(i++);
                            if (((value & 0xFC00) !== 0xD800) || ((extra & 0xFC00) !== 0xDC00)) {
                                throw new RangeError("UTF-16(decode): Illegal UTF-16 sequence");
                            }
                            value = ((value & 0x3FF) << 10) + (extra & 0x3FF) + 0x10000;
                        }
                        output.push(value);
                    }
                    return output;
                },
                encode: function(input) {
                    var output = [],
                        i = 0,
                        len = input.length,
                        value;
                    while (i < len) {
                        value = input[i++];
                        if ((value & 0xF800) === 0xD800) {
                            throw new RangeError("UTF-16(encode): Illegal UTF-16 value");
                        }
                        if (value > 0xFFFF) {
                            value -= 0x10000;
                            output.push(String.fromCharCode(((value >>> 10) & 0x3FF) | 0xD800));
                            value = 0xDC00 | (value & 0x3FF);
                        }
                        output.push(String.fromCharCode(value));
                    }
                    return output.join("");
                }
            }

            //Default parameters
            var initial_n = 0x80;
            var initial_bias = 72;
            var delimiter = "\x2D";
            var base = 36;
            var damp = 700;
            var tmin = 1;
            var tmax = 26;
            var skew = 38;
            var maxint = 0x7FFFFFFF;

            // decode_digit(cp) returns the numeric value of a basic code 
            // point (for use in representing integers) in the range 0 to
            // base-1, or base if cp is does not represent a value.

            function decode_digit(cp) {
                return cp - 48 < 10 ? cp - 22 : cp - 65 < 26 ? cp - 65 : cp - 97 < 26 ? cp - 97 : base;
            }

            // encode_digit(d,flag) returns the basic code point whose value
            // (when used for representing integers) is d, which needs to be in
            // the range 0 to base-1. The lowercase form is used unless flag is
            // nonzero, in which case the uppercase form is used. The behavior
            // is undefined if flag is nonzero and digit d has no uppercase form. 

            function encode_digit(d, flag) {
                return d + 22 + 75 * (d < 26) - ((flag != 0) << 5);
                //  0..25 map to ASCII a..z or A..Z 
                // 26..35 map to ASCII 0..9
            }
            //** Bias adaptation function **
            function adapt(delta, numpoints, firsttime) {
                var k;
                delta = firsttime ? Math.floor(delta / damp) : (delta >> 1);
                delta += Math.floor(delta / numpoints);

                for (k = 0; delta > (((base - tmin) * tmax) >> 1); k += base) {
                    delta = Math.floor(delta / (base - tmin));
                }
                return Math.floor(k + (base - tmin + 1) * delta / (delta + skew));
            }

            // encode_basic(bcp,flag) forces a basic code point to lowercase if flag is zero,
            // uppercase if flag is nonzero, and returns the resulting code point.
            // The code point is unchanged if it is caseless.
            // The behavior is undefined if bcp is not a basic code point.

            function encode_basic(bcp, flag) {
                bcp -= (bcp - 97 < 26) << 5;
                return bcp + ((!flag && (bcp - 65 < 26)) << 5);
            }

            // Main decode
            this.decode = function(input, preserveCase) {
                // Dont use utf16
                var output = [];
                var case_flags = [];
                var input_length = input.length;

                var n, out, i, bias, basic, j, ic, oldi, w, k, digit, t, len;

                // Initialize the state: 

                n = initial_n;
                i = 0;
                bias = initial_bias;

                // Handle the basic code points: Let basic be the number of input code 
                // points before the last delimiter, or 0 if there is none, then
                // copy the first basic code points to the output.

                basic = input.lastIndexOf(delimiter);
                if (basic < 0) basic = 0;

                for (j = 0; j < basic; ++j) {
                    if (preserveCase) case_flags[output.length] = (input.charCodeAt(j) - 65 < 26);
                    if (input.charCodeAt(j) >= 0x80) {
                        throw new RangeError("Illegal input >= 0x80");
                    }
                    output.push(input.charCodeAt(j));
                }

                // Main decoding loop: Start just after the last delimiter if any
                // basic code points were copied; start at the beginning otherwise. 

                for (ic = basic > 0 ? basic + 1 : 0; ic < input_length;) {

                    // ic is the index of the next character to be consumed,

                    // Decode a generalized variable-length integer into delta,
                    // which gets added to i. The overflow checking is easier
                    // if we increase i as we go, then subtract off its starting 
                    // value at the end to obtain delta.
                    for (oldi = i, w = 1, k = base;; k += base) {
                        if (ic >= input_length) {
                            throw RangeError("punycode_bad_input(1)");
                        }
                        digit = decode_digit(input.charCodeAt(ic++));

                        if (digit >= base) {
                            throw RangeError("punycode_bad_input(2)");
                        }
                        if (digit > Math.floor((maxint - i) / w)) {
                            throw RangeError("punycode_overflow(1)");
                        }
                        i += digit * w;
                        t = k <= bias ? tmin : k >= bias + tmax ? tmax : k - bias;
                        if (digit < t) {
                            break;
                        }
                        if (w > Math.floor(maxint / (base - t))) {
                            throw RangeError("punycode_overflow(2)");
                        }
                        w *= (base - t);
                    }

                    out = output.length + 1;
                    bias = adapt(i - oldi, out, oldi === 0);

                    // i was supposed to wrap around from out to 0,
                    // incrementing n each time, so we'll fix that now: 
                    if (Math.floor(i / out) > maxint - n) {
                        throw RangeError("punycode_overflow(3)");
                    }
                    n += Math.floor(i / out);
                    i %= out;

                    // Insert n at position i of the output: 
                    // Case of last character determines uppercase flag: 
                    if (preserveCase) {
                        case_flags.splice(i, 0, input.charCodeAt(ic - 1) - 65 < 26);
                    }

                    output.splice(i, 0, n);
                    i++;
                }
                if (preserveCase) {
                    for (i = 0, len = output.length; i < len; i++) {
                        if (case_flags[i]) {
                            output[i] = (String.fromCharCode(output[i]).toUpperCase()).charCodeAt(0);
                        }
                    }
                }
                return this.utf16.encode(output);
            };

            //** Main encode function **

            this.encode = function(input, preserveCase) {
                //** Bias adaptation function **

                var n, delta, h, b, bias, j, m, q, k, t, ijv, case_flags;

                if (preserveCase) {
                    // Preserve case, step1 of 2: Get a list of the unaltered string
                    case_flags = this.utf16.decode(input);
                }
                // Converts the input in UTF-16 to Unicode
                input = this.utf16.decode(input.toLowerCase());

                var input_length = input.length; // Cache the length

                if (preserveCase) {
                    // Preserve case, step2 of 2: Modify the list to true/false
                    for (j = 0; j < input_length; j++) {
                        case_flags[j] = input[j] != case_flags[j];
                    }
                }

                var output = [];


                // Initialize the state: 
                n = initial_n;
                delta = 0;
                bias = initial_bias;

                // Handle the basic code points: 
                for (j = 0; j < input_length; ++j) {
                    if (input[j] < 0x80) {
                        output.push(
                            String.fromCharCode(
                                case_flags ? encode_basic(input[j], case_flags[j]) : input[j]
                            )
                        );
                    }
                }

                h = b = output.length;

                // h is the number of code points that have been handled, b is the
                // number of basic code points 

                if (b > 0) output.push(delimiter);

                // Main encoding loop: 
                //
                while (h < input_length) {
                    // All non-basic code points < n have been
                    // handled already. Find the next larger one: 

                    for (m = maxint, j = 0; j < input_length; ++j) {
                        ijv = input[j];
                        if (ijv >= n && ijv < m) m = ijv;
                    }

                    // Increase delta enough to advance the decoder's
                    // <n,i> state to <m,0>, but guard against overflow: 

                    if (m - n > Math.floor((maxint - delta) / (h + 1))) {
                        throw RangeError("punycode_overflow (1)");
                    }
                    delta += (m - n) * (h + 1);
                    n = m;

                    for (j = 0; j < input_length; ++j) {
                        ijv = input[j];

                        if (ijv < n) {
                            if (++delta > maxint) return Error("punycode_overflow(2)");
                        }

                        if (ijv == n) {
                            // Represent delta as a generalized variable-length integer: 
                            for (q = delta, k = base;; k += base) {
                                t = k <= bias ? tmin : k >= bias + tmax ? tmax : k - bias;
                                if (q < t) break;
                                output.push(String.fromCharCode(encode_digit(t + (q - t) % (base - t), 0)));
                                q = Math.floor((q - t) / (base - t));
                            }
                            output.push(String.fromCharCode(encode_digit(q, preserveCase && case_flags[j] ? 1 : 0)));
                            bias = adapt(delta, h + 1, h == b);
                            delta = 0;
                            ++h;
                        }
                    }

                    ++delta, ++n;
                }
                return output.join("");
            }

            this.ToASCII = function(domain) {
                var domain_array = domain.split(".");
                var out = [];
                for (var i = 0; i < domain_array.length; ++i) {
                    var s = domain_array[i];
                    out.push(
                        s.match(/[^A-Za-z0-9-]/) ?
                        "xn--" + punycode.encode(s) :
                        s
                    );
                }
                return out.join(".");
            }
            this.ToUnicode = function(domain) {
                var domain_array = domain.split(".");
                var out = [];
                for (var i = 0; i < domain_array.length; ++i) {
                    var s = domain_array[i];
                    out.push(
                        s.match(/^xn--/) ?
                        punycode.decode(s.slice(4)) :
                        s
                    );
                }
                return out.join(".");
            }
        }();

        DomainCheck();

        function searchDomain() {
            localStorage.setItem('searchedDomain', punycode.ToASCII(document.getElementById('search').value));
        }

        function DomainCheck() {
            var search = localStorage.getItem("searchedDomain");

            // Check domaim pricing
            $.post({
                url: "../api/domain/check/check-domain.php",
                data: {
                    domain: search
                },
                success: function(result) {
                    const response = JSON.parse(result);

                    const data = localStorage.getItem('searchedDomain').split('.');

                    if (response[data[1]]["AVAILABLE"] == "false") {
                        document.getElementById("searchedAvailable").innerText = "Not Available";
                        document.getElementById("choose").style.visibility = 'hidden';
                        document.getElementById("searchedAvailable").style.color = 'red';
                    } else {
                        document.getElementById("searchedAvailable").innerText = "Available";
                        document.getElementById("choose").style.visibility = 'visible';
                        document.getElementById("searchedAvailable").style.color = 'green';
                    }

                },
                error: function(error) {
                    console.log(JSON.stringify(error), "error");
                }
            })
        }
    </script>
</body>

</html>