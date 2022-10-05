@extends('frontend.layouts.master')
@section('css')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            /*font-family: 'Poppins', sans-serif;*/
        }

        .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
            background-color: #F9735A;
            border-radius: 50px;
        }
        @media only screen and (max-width: 980px) {
            .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
                background-color: transparent;
                border-radius: 0px;
            }
        }


        .footer-2 {
            background: #ffffff;
            border: 1px solid #ddd;
            padding: 0.5rem 0;
        }
        .copy a:hover{
            text-decoration: underline;
        }
        .copy a:visited {
            color: green;
        }
    </style>
@endsection

@section('content')
    <!--banner img------------->
    <section class="banner mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <a href="#"><img src="{{asset('public/img/homepage.jpeg')}}" class="img-fluid" alt=""></a>
                </div>
            </div>

        </div>
    </section>


    <!--dnc content-->
    <section class="dnc-section mb-3 mt-3">
        <div class="container">
            <div class="dnc-content">
                <p class="color-dark">
                    আশির দশকে সারা বিশ্বে মাদকদ্রব্যের অপব্যবহার ও অবৈধ পাচার আশঙ্কাজনকভাবে বৃদ্ধি পায়।
                    বাংলাদেশে এ সমস্যার মোকাবেলায় মাদকদ্রব্যের অপব্যবহার ও অবৈধ পাচার রোধ, মাদকের ক্ষতিকর প্রতিক্রিয়া
                    সম্পর্কে গণসচেতনতার বিকাশ এবং মাদকাসক্তদের চিকিৎসা ও পুনর্বাসনকল্পে ১৯৮৯ সনের শেষের দিকে মাদকদ্রব্য নিয়ন্ত্রণ অধ্যাদেশ,
                    ১৯৮৯ জারী করা হয়। অতঃপর ২ জানুয়ারী, ১৯৯০ তারিখে মাদকদ্রব্য নিয়ন্ত্রণ আইন,১৯৯০ প্রণয়ন করা হয় এবং নারকটিকস এন্ড লিকারের স্থলে
                    একই বছর তৎকালীন রাষ্ট্রপতির সচিবালয়ের অধীন মাদকদ্রব্য নিয়ন্ত্রণ অধিদপ্তর প্রতিষ্ঠা করা হয়। এরপর ৯ সেপ্টেম্বর ১৯৯১ তারিখ এ অধিদপ্তরকে
                    স্বরাষ্ট্র মন্ত্রণালয়ের অধীন ন্যাস্ত করা হয়।
                </p>

                <p class="color-dark">
                    গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের স্বরাষ্ট্রমন্ত্রণালেয়র অধীন মাদকদ্রব্য নিয়ন্ত্রণ অধিদপ্তর। দেশে অবৈধ মাদকের প্রবাহ রোধ,
                    ঔষধ ও অন্যান্য শিল্পে ব্যবহার্য বৈধ মাদকের শুল্ক আদায় সাপেক্ষে আমদানি, পরিবহন ও ব্যবহার নিয়ন্ত্রণ, মাদকদ্রব্যের সঠিক পরীক্ষণ,
                    মাদকাসক্তদের চিকিৎসা ও পুনর্বাসন নিশ্চিতকরণ,  মাদকদ্রব্যের কুফল সম্পর্কে ব্যাপক গণসচেতনতা সৃষ্টির লক্ষ্যে নিরোধ কার্যক্রমের পরিকল্পনা ও বাস্তবায়ন,
                    জাতিসংঘসহ অন্যান্য আন্তর্জাতিক সংস্থার সাথে নিবিড় কর্ম-সম্পর্ক তৈরির মাধ্যমে জাতীয় ও আন্তর্জাতিকভাবে মাদকের বিরুদ্ধে
                    প্রতিরোধ গড়ে তোলা অধিদপ্তেরর প্রধান দায়িত্ব।
                </p>
            </div>
        </div>
    </section>


@endsection
















