@extends('layouts.frontend-master')
<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-color: #1d1f20;
        font-family: 'Helvetica Neue', 'Helvetica', Arial, sans-serif;
    }

    #wrapper {
        margin-left: auto;
        margin-right: auto;
        max-width: 80em;
    }

    #container {
        float: left;
        padding: 1em;
        width: 100%;
    }

    ol.organizational-chart,
    ol.organizational-chart ol,
    ol.organizational-chart li,
    ol.organizational-chart li>div {
        position: relative;
    }

    ol.organizational-chart,
    ol.organizational-chart ol {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    ol.organizational-chart {
        text-align: center;
    }

    ol.organizational-chart ol {
        padding-top: 1em;
    }

    ol.organizational-chart ol:before,
    ol.organizational-chart ol:after,
    ol.organizational-chart li:before,
    ol.organizational-chart li:after,
    ol.organizational-chart>li>div:before,
    ol.organizational-chart>li>div:after {
        background-color: #b7a6aa;
        content: '';
        position: absolute;
    }

    ol.organizational-chart ol>li {
        padding: 1em 0 0 1em;
    }

    ol.organizational-chart>li ol:before {
        height: 1em;
        left: 50%;
        top: 0;
        width: 3px;
    }

    ol.organizational-chart>li ol:after {
        height: 3px;
        left: 3px;
        top: 1em;
        width: 50%;
    }

    ol.organizational-chart>li ol>li:not(:last-of-type):before {
        height: 3px;
        left: 0;
        top: 2em;
        width: 1em;
    }

    ol.organizational-chart>li ol>li:not(:last-of-type):after {
        height: 100%;
        left: 0;
        top: 0;
        width: 3px;
    }

    ol.organizational-chart>li ol>li:last-of-type:before {
        height: 3px;
        left: 0;
        top: 2em;
        width: 1em;
    }

    ol.organizational-chart>li ol>li:last-of-type:after {
        height: 2em;
        left: 0;
        top: 0;
        width: 3px;
    }

    ol.organizational-chart li>div {
        background-color: #fff;
        border-radius: 3px;
        min-height: 2em;
        padding: 0.5em;
    }

    /*** PRIMARY ***/
    ol.organizational-chart>li>div {
        background-color: #a2ed56;
        margin-right: 1em;
    }

    ol.organizational-chart>li>div:before {
        bottom: 2em;
        height: 3px;
        right: -1em;
        width: 1em;
    }

    ol.organizational-chart>li>div:first-of-type:after {
        bottom: 0;
        height: 2em;
        right: -1em;
        width: 3px;
    }

    ol.organizational-chart>li>div+div {
        margin-top: 1em;
    }

    ol.organizational-chart>li>div+div:after {
        height: calc(100% + 1em);
        right: -1em;
        top: -1em;
        width: 3px;
    }

    /*** SECONDARY ***/
    ol.organizational-chart>li>ol:before {
        left: inherit;
        right: 0;
    }

    ol.organizational-chart>li>ol:after {
        left: 0;
        width: 100%;
    }

    ol.organizational-chart>li>ol>li>div {
        background-color: #83e4e2;
    }

    /*** TERTIARY ***/
    ol.organizational-chart>li>ol>li>ol>li>div {
        background-color: #fd6470;
    }

    /*** QUATERNARY ***/
    ol.organizational-chart>li>ol>li>ol>li>ol>li>div {
        background-color: #fca858;
    }

    /*** QUINARY ***/
    ol.organizational-chart>li>ol>li>ol>li>ol>li>ol>li>div {
        background-color: #fddc32;
    }

    /*** MEDIA QUERIES ***/
    @media only screen and (min-width: 64em) {

        ol.organizational-chart {
            margin-left: -1em;
            margin-right: -1em;
        }

        /* PRIMARY */
        ol.organizational-chart>li>div {
            display: inline-block;
            float: none;
            margin: 0 1em 1em 1em;
            vertical-align: bottom;
        }

        ol.organizational-chart>li>div:only-of-type {
            margin-bottom: 0;
            width: calc((100% / 1) - 2em - 4px);
        }

        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2),
        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2)~div {
            width: calc((100% / 2) - 2em - 4px);
        }

        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3),
        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3)~div {
            width: calc((100% / 3) - 2em - 4px);
        }

        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4),
        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4)~div {
            width: calc((100% / 4) - 2em - 4px);
        }

        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5),
        ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5)~div {
            width: calc((100% / 5) - 2em - 4px);
        }

        ol.organizational-chart>li>div:before,
        ol.organizational-chart>li>div:after {
            bottom: -1em !important;
            top: inherit !important;
        }

        ol.organizational-chart>li>div:before {
            height: 1em !important;
            left: 50% !important;
            width: 3px !important;
        }

        ol.organizational-chart>li>div:only-of-type:after {
            display: none;
        }

        ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after,
        ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
            bottom: -1em;
            height: 3px;
            width: calc(50% + 1em + 3px);
        }

        ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after {
            left: calc(50% + 3px);
        }

        ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
            left: calc(-1em - 3px);
        }

        ol.organizational-chart>li>div+div:not(:last-of-type):after {
            height: 3px;
            left: -2em;
            width: calc(100% + 4em);
        }

        /* SECONDARY */
        ol.organizational-chart>li>ol {
            display: flex;
            flex-wrap: nowrap;
        }

        ol.organizational-chart>li>ol:before,
        ol.organizational-chart>li>ol>li:before {
            height: 1em !important;
            left: 50% !important;
            top: 0 !important;
            width: 3px !important;
        }

        ol.organizational-chart>li>ol:after {
            display: none;
        }

        ol.organizational-chart>li>ol>li {
            flex-grow: 1;
            padding-left: 1em;
            padding-right: 1em;
            padding-top: 1em;
        }

        ol.organizational-chart>li>ol>li:only-of-type {
            padding-top: 0;
        }

        ol.organizational-chart>li>ol>li:only-of-type:before,
        ol.organizational-chart>li>ol>li:only-of-type:after {
            display: none;
        }

        ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after,
        ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
            height: 3px;
            top: 0;
            width: 50%;
        }

        ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after {
            left: 50%;
        }

        ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
            left: 0;
        }

        ol.organizational-chart>li>ol>li+li:not(:last-of-type):after {
            height: 3px;
            left: 0;
            top: 0;
            width: 100%;
        }

    }
</style>

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    {{-- <h2 class="mb-3 text-capitalize text-white">Child Protection</h2> --}}
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/form6') }}">Child Protection</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h5 class="text-center mb-4 ka-text">CHILD PROTECTION POLICY</h5>

                    <h6 class="mb-3 ka-text">RATIONALE</h6>
                    <p class="lead">Kamuzu Academy aims to create a safe environment for all children to learn and
                        flourish, with zero
                        tolerance for child abuse in any form.</p>

                    <h6 class="mb-3 ka-text">AIMS</h6>
                    <p class="lead">Our vision is to create a community where pupils feel happy, protected, respected, and
                        confident that
                        their health, safety, well-being, and interests are protected and prioritized. The policy also helps
                        safeguard the integrity of the institution and its staff.</p>

                    <h6 class="mb-3 ka-text">OBJECTIVES</h6>
                    <ul class="lead">
                        <li>Ensure the safety and protection of all pupils at the Academy</li>
                        <li>Ensure the safety and protection of all members of staff employed by the Academy</li>
                        <li>Ensure zero tolerance for child abuse in any form</li>
                        <li>Provide clear guidelines on how child abuse allegations are reported and managed</li>
                        <li>Provide clear guidance on reintegration for any individuals involved</li>
                        <li>Integrate child protection into all areas of organizational strategy, structures, and working
                            practices within the wider school community</li>
                        <li>Empower and educate children on their safeguarding rights</li>
                    </ul>

                    <h6 class="mb-3 ka-text">PROTOCOLS AND PROCEDURES</h6>
                    <p class="lead">Each member of staff should be equipped with professional knowledge on how to handle
                        reported cases
                        of child abuse. This includes, among other things, the need for confidentiality and promptness in
                        reporting to the subsequent level.</p>

                    <h5 class="mb-2 ka-text">Steps for staff to take on reported/disclosed cases of child abuse</h5>
                    <ol class="lead">
                        <li>Cases of child abuse must be reported to the Designated Safeguarding Lead (DSL)</li>
                        <li>If the DSL is unavailable, reports should be handed to the Deputy Designated Safeguarding Leads
                            (DDSL) as soon as possible.</li>
                        <li>Each case must be dealt with promptly and an initial report must be generated within 24 hours
                        </li>
                        <li>The DSL (or DDSL) must report the allegations to the Headmaster immediately before commencing an
                            investigation</li>
                        <li>Each case has to be treated as highly confidential</li>
                        <li>The DSL (or DDSL) is required to investigate the allegations and present to the safeguarding
                            committee</li>
                        <li>The safeguarding committee then present their findings to the Headmaster</li>
                        <li>The Headmaster will recommend to the Board of Governors the course of action to be taken (if the
                            accused is one of the employees/teaching staff or students of Kamuzu Academy)</li>
                        <li>The Headmaster will inform all relevant authorities (especially if the case falls outside the
                            bounds of the Academy)</li>
                        <li>The Deputy Head Pastoral will liaise with parents/guardians of all students involved</li>
                    </ol>
                </div>
            </div>

            <div class="col-lg-12 mt-2 py-5 mt-lg-0">
                <img loading="lazy" decoding="async" src="{{ asset('images/org.JPG') }}" class="rounded w-100">
            </div>

        </div>





    </section>
@endsection
