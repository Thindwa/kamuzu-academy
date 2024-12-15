@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Scholarships</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/upper') }}">Scholarships</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Scholarships</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="ka-text">Form 6 Scholarships at Kamuzu Academy</h6>
                                    <p class="lead">Students may apply to join Form 6 both from within the Academy and
                                        from other schools, as long as they meet the basic entry requirements of an A*- C
                                        grade in English Language and Mathematics, in addition to at least four other A*- C
                                        grades. Students should have achieved A*- B grades in the 3 subjects which they wish
                                        to study at A level. </p>

                                    <h6 class="ka-text">Scholarships for Academic Excellence at IGCSE</h6>
                                    <p class="lead">
                                        Students who achieve outstanding grades (A*and A) at IGCSE and who wish to study A
                                        levels at the Academy are eligible for Scholarships, which provide them with reduced
                                        school fees. this applies to students from other schools as well as those who took
                                        their IGCSEs at the Academy.

                                    <ul class="list-group lead">
                                        <li class="list-group-item">6 A*/A grades – 10% reduction in school fees</li>
                                        <li class="list-group-item">7 A*/A grades – 15% reduction in school fees</li>
                                        <li class="list-group-item">8 A*/A grades – 20% reduction in school fees</li>
                                        <li class="list-group-item">9 A*/A grades – 35% reduction in school fees</li>
                                        <li class="list-group-item">10 A*/A grades – 40% reduction in school fees</li>
                                    </ul>
                                    </p>
                                    <p class="lead">These scholarships are awarded to all eligible students, who present
                                        evidence of their IGCSE grades.</p>

                                    <h6 class="ka-text">Scholarships for Elite Sports</h6>
                                    <p class="lead">Students who can demonstrate sustained performance at elite level are
                                        eligible for a scholarship of up to 50% reduction in school fees. Students should
                                        have represented their school in a number of sports for a sustained period or
                                        competed in sports ata national or international level.


                                    </p>
                                    <p class="lead"> To find out more information about how to apply for an Elite Sports
                                        Scholarship
                                        please email: <a href="#">academic@ka.ac.mw</a></p>

                                    <h6 class="ka-text">
                                        Scholarships for Outstanding Character
                                    </h6>
                                    <p class="lead">Students who have demonstrated outstanding character in their
                                        Leadership, Resilience, Responsibility, Community and over a sustained period of
                                        time, can apply for a Scholarship for Outstanding Character.


                                    </p>
                                    <p class="lead"> To find out more information about how to apply for a Scholarship for
                                        Outstanding
                                        Character please email: <a href="#">academic@ka.ac.mw</a></p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="ka-text">University Scholarships open to students from Kamuzu Academy</h6>
                                    <ol class="">
                                        <li><i>Phyllis Barclay-Smith CBE Memorial Scholarship </i></li>

                                        <p class="lead text-justify">The “Barclay-Smith Scholarship” is awarded to eligible
                                            students at
                                            Gonville and Caius College, at Cambridge University in the UK. Any student from
                                            Malawi who is offered a place to study at the college will be considered for
                                            this
                                            prestigious scholarship, which is only open to Malawian students. It is a fully
                                            funded scholarship covering full tuition fees and living expenses. </p>
                                        <p class="lead">In order to be considered, you must apply through the normal UCAS
                                            route for applications to UK universities and include Gonville and Caius
                                            College,
                                            Cambridge in your choices. There are no restrictions on the subjects you choose
                                            to
                                            study, as long as it is offered at Cambridge University. </p>
                                        <p class="lead">Walinase Chinula is the only student from Kamuzu Academy to have
                                            secured the Barclay-Smith scholarship in recent years. She went up to Gonville &
                                            Caius in 2014 to read Law. She graduated in 2018 and became associate partner at
                                            Savjani & Co. (Blantyre). She was called to the Malawi bar by her father, who is
                                            also a lawyer. In 2022 she returned to academia to read for her Masters in Law
                                            at
                                            the University of Leeds. </p>
                                        <p class="lead">In 2002 Heather Katsonga-Phiri secured the scholarship to read
                                            Economics. She has pursued a career in investment banking at Goldman Sachs and
                                            is
                                            now a financial consultant and published author.


                                        </p>
                                        <p class="lead"> For further details see:
                                            <a href=" https://www.cai.cam.ac.uk/barclay-smith-scholarship">
                                                https://www.cai.cam.ac.uk/barclay-smith-scholarship</a>
                                        </p>


                                        <li> <i>Needs-Blind Scholarships at Universities in the USA</i></li>
                                        <p class="lead">Many American universities operate a “Needs Blind” approach to
                                            awarding scholarships to students, including prestigious universities such as
                                            Yale. When you apply to these universities you are asked to complete details of
                                            your family circumstances. If you are offered a place to study there, the
                                            university will provide you with the necessary financial support to enable you
                                            to take up the place, if your family are unable to support you. This could mean
                                            that the university will meet all your fees and provide you with a generous
                                            living allowance, including paying for travel.


                                        </p>
                                        <p class="lead"> See Mr Hewitt for further details.</p>


                                        <li><i>Chinese Government Scholarships for Malawian Students</i></li>
                                        <p class="lead">The Chinese Government has for several years offered generous
                                            scholarships to students to study at Chinese universities. There are a number of
                                            criteria which applicants must meet, however the most important is that they
                                            should have passed the Chinese language examinations at Level 3. A number of
                                            students from Kamuzu Academy have benefitted from these scholarships in the
                                            past.
                                        </p>
                                        <p class="lead"> If you are interested in applying for one of these scholarships
                                            please see Mr
                                            Kamsesa as he is available to help you study for the language tests – but you
                                            will need to give yourself plenty of time to reach the required level and be
                                            committed to the task.</p>
                                        <p class="lead"> In addition, Mr Kamsesa can tell you about living and studying at
                                            a Chinese
                                            university, as he was awarded a Chinese Government Scholarship to study his
                                            degree in China.</p>
                                        <li><i>Nottingham Trent University Scholarship</i></li>
                                        <p class="lead">In 2022 Nottingham Trent University in the UK awarded their first
                                            scholarship for students from Kamuzu Academy. </p>
                                        <p class="lead">See Mr Hewitt to find out more
                                            about this scholarship. </p>
                                    </ol>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
