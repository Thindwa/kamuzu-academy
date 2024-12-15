@extends('layouts.frontend-master')

<style>
    .table td:nth-child(2),
    .table td:nth-child(3) {
        width: 75%;
    }

    .equal-image {
        width: 100%;
        height: 8%;
        /* object-fit: cover; */

    }

    @media (max-width: 767px) {
        .equal-image {
            height: auto;
            /* Adjust the height as needed for mobile devices */
        }
    }
</style>

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">History</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/boarding') }}">History</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-10 mx-auto">
                    <div class="section-title">
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Kamuzu Academy History</h2>
                        <hr>

                    </div>
                    <div class="pb-4">
                        <img class="lozad" class="equal-image" src="{{ asset('images/history.jpg') }}" alt="">
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/kachere2.png') }}" class="img-thumbnail" alt="Image 1">
                            </div>
                            <div class="col-md-8 bg-light">
                                <p class="lead">
                                    At the turn of the last century, a young child sat reciting his ABC to his teachers
                                    beneath a
                                    Kachere tree in the district of Kasungu, Nyasaland. His teachers could scarcely have
                                    imagined
                                    the deep desire for learning in their young pupil or the long-term impact of their
                                    rudimentary
                                    lessons.
                                </p>
                                <p class="lead">
                                    The drum that in those days summoned students for lessons in the shade of the Kachere
                                    tree also
                                    called this young boy to a long and remarkable odyssey, largely on foot and through many
                                    lands,
                                    before returning to his homeland to lead the struggle for independence and become the
                                    first
                                    President of the Republic of Malawi.
                                </p>
                                <p class="lead">
                                    As a young man, Hastings Kamuzu Banda worked in a hospital in what was then Southern
                                    Rhodesia
                                    and later in the gold mines of South Africa. He studied assiduously and saved enough to
                                    travel
                                    to the United States where he attended Wilberforce Academy, Ohio before taking his first
                                    degree
                                    in History and Political Science at the University of Chicago. He then took a degree in
                                    Medicine
                                    at Meharry Medical College, Nashville, Tennessee, qualifying as a doctor. He furthered
                                    his
                                    medical training in Edinburgh, Scotland and then established successful practices in
                                    Liverpool
                                    and London.
                                </p>

                            </div>
                        </div>
                        <p class="lead">
                            Dr. H. Kamuzu Banda always maintained contact with political life in his homeland, and
                            his
                            opposition to the Federation of Rhodesia and Nyasaland prompted his return to Africa, to
                            the
                            then Gold Coast, from where he was eventually recalled to lead his people to
                            independence.
                        </p>

                        <div class="row mt-4">
                            <div class="col-md-8 bg-light">
                                <p class="lead">
                                    The Kachere tree is now part of our heritage. Its roots are the roots of nationhood
                                    drawing
                                    sustenance from the richness and diversity of the land and its peoples - its trunk is
                                    testament
                                    to history and development - its green leaves and its branches reaching outwards
                                    signifying the
                                    life and aspirations of our people today; a nation taking its place in the world - its
                                    golden
                                    fruit heavy with the promise of youth and the hopes of generations. The green and gold
                                    of the
                                    Academy's uniform is a reminder of its Founder's roots, experiences, and vision. It also
                                    symbolizes his personal contribution to his people in establishing a model school
                                    offering
                                    education to the very highest international standards.
                                </p>

                                <p class="lead">
                                    Long before his return to his homeland, Dr. H. Kamuzu Banda had resolved to improve the
                                    educational system of his own country so that young Malawians would not have to travel
                                    abroad,
                                    as he had done.
                                </p>

                                <p class="lead">
                                    "I do not want my boys and girls to do what I had to do - to leave their homes and their
                                    families and go away from Malawi to get an education."
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('images/kachere1.jpg') }}" class="img-thumbnail" alt="Image 2">
                            </div>
                        </div>

                        <p class="lead">
                            The former President had stated on a number of occasions that he had very often been shocked by
                            the glaring grammatical mistakes contained in the letters he received. His observations of the
                            shortcomings of the educational system culminated in a very important address given at Soche
                            Hill College on 17th April 1972.
                        </p>



                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/history2.jpg') }}" class="img-thumbnail" alt="Image 1">
                                <img src="{{ asset('images/history4.jpg') }}" class="img-thumbnail" alt="Image 1">
                            </div>
                            <div class="col-md-8 bg-light">

                                <p class="lead">
                                    Meanwhile, many Malawians had seen the Kachere tree under which their President had
                                    started his
                                    early education and had expressed the wish that a model primary school, with modern
                                    facilities,
                                    be built within the vicinity of the Kachere tree. The building of Mtunthama Model
                                    Primary School
                                    by the Ministry of Education marked an important milestone in the history of education
                                    in
                                    Malawi. The school was officially opened by the President in 1975. In one of the most
                                    touching
                                    welcome speeches, a representative of the pupils at Mtunthama Model Primary School
                                    thanked the
                                    President for building a beautiful primary school for them. He then went on to draw a
                                    comparison
                                    between the conditions that prevailed when the President had his early education and the
                                    conditions in which they were learning. Just to emphasize the extent of their gratitude,
                                    in his
                                    winding up welcome address, the young pupil appealed earnestly to the President that the
                                    primary
                                    school be developed eventually into a secondary school.
                                </p>



                            </div>
                        </div>
                        <p class="lead">
                            Further concerns about standards in education and teaching methods prompted the Central
                            Executive Committee of the Malawi Congress Party to look into making detailed
                            preparations for
                            building a model secondary school that would then be presented to the President in
                            recognition
                            of his leadership. When the matter was finally reported, the President accepted the idea
                            of
                            building a model secondary school in principle but felt strongly that neither the
                            government nor
                            the people could really manage to build the type of school that he had in mind.
                        </p>

                        <p class="lead">
                            The President stated explicitly that he wanted to found a grammar school, one that would
                            be
                            recognized for its excellence not only in Malawi but throughout Africa and the world.
                            His vision
                            was to create a school modeled on the best in the English independent boarding school
                            tradition,
                            producing boys and girls who could walk tall in some of the best universities in the
                            world,
                            including Oxbridge, the Ivy League, and, of course, Chicago and Edinburgh. His boys and
                            girls,
                            drawn from all districts of Malawi, would be able to compete with the best on equal
                            terms. They
                            would be smart, well-mannered, disciplined, hard-working, dutiful, good communicators,
                            potential
                            leaders and sharp - Malawian and African citizens of the world.
                        </p>

                        <div class="row mt-4">
                            <div class="col-md-8 bg-secondary  ">




                                <p class="lead text-white">
                                    In July 1977, the Founder established the Board of Governors for Kamuzu Academy and a
                                    month
                                    later the first meeting was held in Blantyre. Some Governors visited the famous public
                                    schools
                                    in England and Scotland to discuss aims and to view buildings. On 4th September 1978,
                                    the
                                    Founder laid the foundation stone of Kamuzu Academy, which can be seen on the right at
                                    the top
                                    of the steps at the entrance. The name, Academy, though originally a center of learning
                                    in
                                    Ancient Greece, is a reminder of the Founder's education at Wilberforce Academy in Ohio,
                                    USA,
                                    whose clock tower is a model

                                    for the clock tower which is so prominent a feature of Kamuzu Academy. The Academy's
                                    distinctive
                                    architecture with its Romanesque arches, cloistered walkways, ornamental lake and
                                    landscaped
                                    gardens - a haven for birdlife - makes it, quite literally, a garden of learning that
                                    few
                                    schools in the world can emulate.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('images/history5.jpg') }}" class="img-thumbnail" alt="Image 2">
                            </div>
                        </div>



                        <p class="lead">
                            The official opening of Kamuzu Academy by the Founder and Proprietor took place on 21st November
                            1981, though in fact, students, selected on the results of Primary School Leaving Certificate
                            Examinations (PSLCE), Junior Certificate examinations (JCE) and Malawi Certificate of Education
                            (MCE) Examinations had been attending classes for over a month. The Founder approved the
                            recommendation of the Board of Governors that 21st November be observed as Founder's Day every
                            year. Students, parents and staff are now celebrating the completion of 25 years since that
                            important occasion. Kamuzu Academy Alumni are living, working and studying throughout Malawi, in
                            several African countries, in Europe, the United States and elsewhere. They are active in almost
                            every field of human endeavor, including the arts, business, government services, environmental
                            conservation, the professions, armed services, sport, tourism and especially medicine. The
                            contributions of Alumni over the last two and a half decades and in the decades to come will
                            more than offset the cost of their education.
                        </p>



                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/history1.jpg') }}" class="img-thumbnail" alt="Image 1">
                            </div>
                            <div class="col-md-8 bg-light">

                                <p class="lead">
                                    When the Academy opened, the Founder stipulated that a minimum of the three best
                                    students - two
                                    boys and one girl - were to be selected on merit from each district in Malawi to enter
                                    Form 1
                                    every year. No student was to be offered a place based on the personal position or
                                    influence of
                                    parents. No expense was spared to ensure that the physical environment of the Academy
                                    and its
                                    academic staff set the tone of excellence he envisaged. The avowed intention of the
                                    Academy is
                                    to challenge academically gifted children with a rigorous but stimulating and enriching
                                    academic
                                    program, preparing them for international examinations at the highest level, accredited
                                    by
                                    examination boards based in the United Kingdom. The Founder stipulated that at the core
                                    of the
                                    academic curriculum must be the study of the Classics - Ancient History, Greek and Latin
                                    -
                                    without which no man can truly call himself educated.
                                </p>

                                <p class="lead">
                                    The hopes in the minds of the young pupils at Mtunthama Model Primary School in 1975
                                    were
                                    realized in what has become known as The Eton of Africa. In 1987, BBC television
                                    produced a
                                    documentary about the Academy making the comparison with the English public school
                                    tradition.
                                    The focus was upon the day-to-day experiences of students and expatriate staff at the
                                    Academy.
                                    It acknowledged the Founder's commitment to the education of the whole person regardless
                                    of
                                    background and to the equality of opportunity for girls as well as boys. The Founder had
                                    created
                                    the Academy as a personal legacy to the people of Malawi. It is a long-term investment,
                                    destined
                                    to raise standards in education and to prepare young men and women today so that they
                                    can assume
                                    the responsibilities of leadership in all walks of life in the years ahead.
                                </p>


                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-8 bg-light">

                                <p class="lead">
                                    The 10th Anniversary celebrations marked the Founder's last visit to the Academy. The
                                    period
                                    since then has been a testing time. The sharp depreciation of the Malawian Kwacha since
                                    flotation in 1994 meant that the Founder's financial commitment in support of the
                                    running costs
                                    of the Academy, and the board and tuition fees of students in particular, became
                                    unsustainable.
                                    Every effort was made to realize funding from a variety of sources, including
                                    benefactors both
                                    in Malawi and overseas. Rationalization and the painful decision to retrench in order to
                                    re-build upon a foundation of students paying more economic fees led to several scholars
                                    having
                                    to be relocated to government schools or private schools with the aid of government
                                    grants. The
                                    Academy did its utmost to keep deserving students and worked tirelessly to ease the
                                    financial
                                    burdens on parents during periods of grave economic difficulty. The Academy's commitment
                                    to
                                    realizing the Founder's vision never faltered.
                                </p>

                                <p class="lead">
                                    The Academy embarked on a process of continuity and change. Students were invited to
                                    apply for
                                    entry into Forms 2, 3 and 4, although rigorous entrance tests in English Language and
                                    Mathematics remained part of the selection process. As the average age of Form 1
                                    students began
                                    to fall, preparation time for IGCSE examinations was lengthened to five years. The
                                    number of
                                    girls being admitted to the Academy increased rapidly, bringing about parity between the
                                    sexes.
                                    Recruitment of qualified and experienced Malawian teachers to fill vacancies and later
                                    assume
                                    positions of responsibility previously held by expatriates was extended. Throughout
                                    these
                                    changes, the Academy's staff and students remained focused on achieving excellence in
                                    every
                                    field of endeavor: students won scholarships to the University of Cambridge, the ‘A'
                                    level and
                                    IGCSE results reached unprecedented heights. The Kamuzu Academy Marathon continued to be
                                    a
                                    magnet to the best runners in the region and raise thousands of Kwacha for charity.
                                </p>


                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('images/history6.jpg') }}" class="img-thumbnail" alt="Image 2">
                            </div>
                        </div>





                        <p class="lead">
                            On 25th November 1997, the Founder, Dr. H. Kamuzu Banda passed away. The Headmaster, staff and
                            students of Kamuzu Academy were in attendance at Chileka Airport as the Founder's body was flown
                            home from the Garden City Clinic in Johannesburg. Academy staff and students also formed part of
                            the Guard of Honour that received the Founder as his body was flown to Lilongwe to lie in state.
                            The distinctive straw boaters and green and gold uniforms of Academy students, from the youngest
                            to the most senior, were noticeable amidst the throng of mourners laying wreaths at his
                            graveside. Each year since then Academy students have formed a Guard of Honour in remembrance of
                            a man whose faith in the power and idealism of youth led him to build the Academy. His belief in
                            the virtues of unity, obedience, discipline and loyalty helped shaped the ethos of the Academy
                            as much as it helped shape a nation.
                        </p>



                        <div class="row">

                            <div class="col-md-7 bg-secondary   mx-auto">


                                <p class="lead text-white">
                                    The Parent-Teacher Association (PTA) has been a tremendous support to the Academy during
                                    these
                                    difficult times. Its fund-raising activities have resulted in the presentation of valued
                                    teaching resources, including TV and video players, a computer and printer. Parents
                                    making the
                                    sacrifice of investing in their children's education readily identify with the Founder's
                                    aspirations and expectations. The Alumni Association, too, has been active in
                                    constructing a
                                    database of Academy Alumni. The first annual Alumni Dinner took place on 7th July 2000
                                    at the
                                    Academy.
                                </p>

                                <p class="lead text-white">
                                    Sadly, the Academy also lost another guiding hand on the tiller when Dr. Fletcher Banda,
                                    Chairman of the Board of Governors, passed away on 11th March 2000. Dr. Banda's
                                    experienced and
                                    calm leadership was resolute and good-humored. The breadth of experience gained at the
                                    Malawi
                                    Bureau of Standards, Malawi Institute of Management, Kamuzu College of Nursing and
                                    African Bible
                                    College saw the Academy through its most difficult times.
                                </p>

                            </div>
                            <div class="col-md-5 bg-light">
                                <p class="lead">The new millennium saw a new Board of Governors and saw the Academy
                                    continuing to
                                    move forward
                                    with confidence and conviction. Student numbers recovered from the low point of the
                                    mid-1990s,
                                    the curriculum expanded and examination results continued to improve. The first phase of
                                    expansion of the Girls' Hostel has been completed thanks to the generosity of Press
                                    Trust. Power
                                    supplies have been improved by the installation of emergency diesel generators. The
                                    cellular
                                    telephone system and connection to the internet have considerably improved
                                    communications.</p>
                            </div>
                        </div>



                        <div class="row mt-4">
                            <div class="col-md-8 bg-light">



                                <p class="lead">So what of the future? Some twenty centuries ago, the Roman writer Horace
                                    stated:


                                    ‘Exegi monumentum aere perennius'

                                    ‘I have built a legacy more lasting than bronze.'</p>

                                <p class="lead">The goal of Kamuzu Academy is ‘ continuing excellence in education ', and
                                    with
                                    that goal in mind
                                    to reintroduce full and partial scholarship places to deserving and gifted students. One
                                    step
                                    towards this goal has been the offer of granting up to 50% scholarships to Sixth Form
                                    entrants
                                    with more than five A grades at IGCSE or its equivalent. January 2006 saw the return to
                                    Kamuzu
                                    Academy of Government-sponsored students – one boy and one girl from each Educational
                                    District,
                                    selected on the basis of PSCLE. Thus, the Academy remains true to the Founder's memory
                                    in
                                    seeking to achieve the original purposes for which it was created: to provide education
                                    to the
                                    highest international standards to deserving boys and girls regardless of means. As we
                                    celebrate
                                    the Academy's first 30 years, let us also give thanks for the life and vision of its
                                    Founder.
                                </p>


                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('images/admin.jpg') }}" class="img-thumbnail" alt="Image 2">
                            </div>
                        </div>


                        <p class="lead">International reputation. It is, however, still a very young school. Of the more
                            established
                            independent schools in the UK, some can trace their history back 500 years, some even have their
                            origins at around the last millennium (give or take a century). The Founder, as in so many
                            things, was in for the long haul. The Academy, as a force for development in Malawi and in the
                            region is likely to make its mark gradually, almost imperceptibly, over the next 20, 30 even 50
                            years. Already, it has succeeded in establishing itself as an institution acknowledged, even by
                            its critics, to be in the active pursuit of excellence. This notion of excellence, so often the
                            stuff of the media catch-phrase, is not about attaining perfection, or achieving ever higher
                            pass rates in examinations. It is about a commitment to raising levels of performance; to
                            recognising and meeting new challenges and getting the best from staff, students and available
                            resources. In this sense excellence is attainable, but no sooner achieved than new goals and new
                            opportunities present themselves. </p>

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
