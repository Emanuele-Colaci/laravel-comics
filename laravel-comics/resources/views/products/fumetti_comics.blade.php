@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-7">
                <h2>{{ $comic['title'] }}</h2>
                <div class="d-flex">
                    <div class="mt-4 p-2 px-3 bg-success border-end d-flex justify-content-between align-items-center w-100"> 
                        <p class="pt-2 text-white"><span class="text-white-50">U.S. Price:</span> $19.99</p>
                        <div>
                            <p class="pt-2 text-white-50">AVAILABLE</p>
                        </div>
                    </div>
                    <select class="border border-0 bg-success w-50 text-end text-white mt-4">
                        <option>Check Availability</option>
                    </select>
                </div>
                <p class="mt-4">
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
            </div>
            <div class="col-5">
                <img class="dimension-img float-end" src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="Jumbotron">
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row">
            <div class="col-6">
                <h5 class="mb-5">Talent</h5>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>Art by:</p>
                    </div>
                    <div class="dimension-text">
                        <a href="#" class="text-primary">
                            José Luis García-López,
                            Clay Mann,
                            Rafael Albuquerque,
                            Patrick Gleason,
                            Dan Jurgens,
                            Joe Shuster,
                            Neal Adams,
                            Curt Swan,
                            John Cassaday,
                            Olivier Coipel,
                            Jim Lee
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>Written by:</p>
                    </div>
                    <div class="dimension-text">
                        <a href="#" class="text-primary text-end">
                            Brad Meltzer,
                            Tom King,
                            Scott Snyder,
                            Geoff Johns,
                            Brian Michael Bendis,
                            Paul Dini,
                            Louise Simonson,
                            Richard Donner,
                            Marv Wolfman,
                            Peter J. Tomasi,
                            Dan Jurgens,
                            Jerry Siegel,
                            Paul Levitz
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h5 class="mb-5">Specs</h5>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>Series:</p>
                    </div>
                    <div class="dimension-text">
                        <a href="#" class="text-primary">
                            ACRION COMICS
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>U.S. Price:</p>
                    </div>
                    <div class="dimension-text">
                        $19.99
                    </div>
                </div>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>On Sale Date:</p>
                    </div>
                    <div class="dimension-text">
                        Oct 02 2018
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection