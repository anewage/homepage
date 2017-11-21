@extends('layouts.app')

@section('sections')

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
            <div class="">
                <div class="text-center d-xs-block d-lg-none">
                    <span>
                        <img class="img-fluid img-profile hiding-photo rounded-circle mx-auto mb-2" src="{{ asset('img/amir.jpg') }}" alt="">
                    </span>
                </div>
                <div>
                    <h1 class="mb-0">Amir
                        <span class="text-primary">Haghighati</span>
                    </h1>
                </div>
            </div>
            <div class="subheading mb-5">141 Hafez Ave., Tehran · Amirkabir U. of T. (Tehran Polytechnic) · +98 (936) 153-2428 ·
                <a href="mailto:haghighati.amir@gmail.com" target="_blank" rel="noopener">haghighati.amir@gmail.com</a>
            </div>
            <p class="mb-1">
                Welcome to my homePage!
                My full name is Amir Haghighati Maleki and I was born in Tabriz. I am a senior student (B.S.c) in
                Computer Engineering and IT Department (A.K.A CEIT) of Amirkabir University of Technology (Tehran Polytechnic).
                Currently working on my bachelor's thesis with <a href="http://ceit.aut.ac.ir/~ahmad">Dr. A. A. Barforoush</a>.
                Interested in the study of interaction between people, technologies and computers, I have found myself
                enthusiastic about technology, social computing and the people using those technologies.
                Checkout <a herf="{{route('blog::index')}}">my blog</a>, if you were interested.
                How to reach me? You can simply, just use the links below.
            </p>
            <div class="mb-5 d-flex flex-row justify-content-center">
                <div class="p-2">
                    <a href="{{ asset('files/CV_Amir_Haghighati_Maleki_21Nov17v2.pdf') }}">
                        Download my C. V. as PDF
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </div>
                <div class="p-2">
                    <a href="https://www.sharelatex.com/project/59ce0029478e804b755b8283">
                        View my C. V. on ShareLaTeX
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-external-link fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="text-center list-inline list-social-icons mb-0">
                <li class="list-inline-item">
                    <a href="mailto:haghighati.amir@gmail.com?Subject=Hi Amir - Emailing you from your homePage&body=I'd like to have a conversation with you!" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/amirhmaleki/" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://github.com/anewage" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="skype:haghighati.amir?call" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://t.me/amirhaghighati" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-telegram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/amir_haghighati/" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/amir.haghighati" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://twitter.com/amir_haghighati" target="_blank" rel="noopener">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Amirkabir University of Technology (Tehran Polytechnic)</h3>
                    <div class="subheading mb-2">Bachelor of Science</div>
                    <div>Computer Engineering - Information Technology Focus</div>
                    <div>Supervisor: <a href="http://ceit.aut.ac.ir/~ahmad/"><b>Dr. Ahmad Abdollahzadeh Barfourosh</b></a>. Thesis (ongoing): <i>"Implementing a web app for performing usability tests using a crowdsourced solution"</i></div>
                    <div>GPA (selected courses): [18.23/20.00]</div>
                    <div>GPA (last two years): [16.60/20.00]</div>
                    <div class="ml-4">
                        In order to see the selected courses, coursework and all the information about my education
                        please refer to <a href="#cv" class="js-scroll-trigger">my Curriculum Vitae</a>.
                    </div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">September 2014 - Current</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">National Organization for Development of Exceptional Talents (NODET), Maragheh (Shahid Beheshti Highschool)</h3>
                    <div class="subheading mb-2">High School Diploma in Math & Physics</div>
                    <p>GPA: [19.00/20.00]</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">September 2010 - June 2014</span>
                </div>
            </div>

        </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Web App Research Intern</h3>
                    <div class="subheading mb-3">Fandogh Team</div>
                    <p>
                        Responsibilities include providing high-tech solutions for enterprise applications and
                        infrastructure-related problems like scaling up, minimizing delay, access-control etc.,
                        developing and maintaining <a href="https://developers.google.com/web/progressive-web-apps" target="_blank" rel="noopener">
                            Progressive Web Applications <i class="fa fa-external-link" aria-hidden="true"></i></a> and
                        analyzing multiple organizational needs and research about SPA web apps and their performance
                        (<a href="https://tikio.io" target="_blank" rel="noopener" class="font-italic">Tikio - an Event Organizing Platform <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        A product of <a href="https://fandogh.org" rel="noopener" target="_blank" class="font-italic">Fandogh Team <i class="fa fa-external-link" aria-hidden="true"></i></a>).
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">February 2017 - September 2017</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Web App Developer</h3>
                    <div class="subheading mb-3">Emaarat Services</div>
                    <p>
                        Responsibilities included developing Emaarat’s core web application using <i>Laravel</i>
                        framework, API and database systems and maintaining the production environments with virtualization
                        solutions like <i>Docker Containers</i> (<a href="https://emaarat.com" target="_blank" class="font-italic" rel="noopener">Emaarat Services Platform <i class="fa fa-external-link" aria-hidden="true"></i></a>).
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">April 2016 - January 2017</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Freelance Developer</h3>
                    <div class="subheading mb-3">Self-employed</div>
                    <p>Visit <a href="https://github.com/anewage" target="_blank" rel="noopener">my github page <i class="fa fa-external-link" aria-hidden="true"></i></a> for more details.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">September 2015 - January 2016</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Volunteer Media Translator</h3>
                    <div class="subheading mb-3">BaranMovie Online Translating Team</div>
                    <p>
                        Responsibilities included planning release of movies with different translating teams and
                        providing the members with suitable movies to translate, in order to prevent duplicate subtitles
                        among teams, and grade team members to award the translator of month; also, translating a
                        foreign movie or TV-series' English subtitle to the native (Persian) language and, in some cases,
                        translate the movie directly via it’s sound and provide Persian SRT files
                        (<a href="https://subscene.com/u/618697" target="_blank" rel="noopener">My Profile on Subscene <i class="fa fa-external-link" aria-hidden="true"></i></a>).
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">2012 - 2015</span>
                </div>
            </div>

        </div>

    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
            <h2 class="mb-5">Areas of Interest</h2>

            <h3 class="mb-0">Research</h3>
            <div class="subheading mb-3">Interests</div>
            <ul class="fa-ul mb-5">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Crowdsourcing and Crowdsourced Problem Solving</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Virtual and Augmented Reality Technologies</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    User-centered Design and User-driven Development</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Software Testing, Verification and Validation</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Progressive Web Applications</li>
            </ul>



            <h3 class="mb-0">Application Development</h3>
            <div class="subheading mb-3">Interests</div>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Progressive Web Application and Cross-Platform Applications
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Real-time Application Development over RTMP (Network Protocol)</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Infrastructure and Middleware Development (Server, Back-end and host configuration automation)</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Agile Development Methodologies like SCRUM</li>
            </ul>
        </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="honors">
        <div class="my-auto">
            <h2 class="mb-5">Honors, Awards and Certificates</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-graduation-cap text-warning"></i>
                        <b>Ranked top 0.4%</b> in the National Entrance Exam among all Iranian Students in Mathematics & Physics (2014)
                    </i>
                </li>
                <li>
                    <i class="fa-li fa fa-graduation-cap text-warning"></i>
                        <b>Ranked top 0.7%</b> in the National Entrance Exam among all Iranian Students in the foreign
                        languages (English) track (2014)
                    </i>
                </li>
                <li>
                    <i class="fa-li fa fa-certificate text-warning"></i>
                    <b>Executive Director and Chief of Staff</b> of the 16<sup>th</sup> (2016) Amirkabir International Collegiate Programming Contest (ICPC)
                    and a member of the executive committee at the 15<sup>th</sup> AUT ICPC (both contests were held <b>jointly
                        with TUM, KTH, Jagellonian and EPFL universities </b>) More information:
                    <a href="http://icpc.aut.ac.ir" target="_blank" rel="noopener" class="font-italic">AUT ICPC group</a>
                </li>
                <li>
                    <i class="fa-li fa fa-certificate text-warning"></i>
                    <b>Member of the executive and organizing committee</b> of the 7<sup>th</sup> (2015), the 8<sup>th</sup> (2016)
                    and the 9<sup>th</sup> (2017) Amirkabir Linux Festival held jointly with thousands of participants
                    from all over the country (AUT LinuxFest)
                </li>
                <li>
                    <i class="fa-li fa fa-certificate text-warning"></i>
                    <b>Volunteer Assistantat</b> at CEIT Department Guild Council (Students Association), Tehran Polytechnic (2014 - 2017)
                </li>
                <li>
                    <i class="fa-li fa fa-star text-warning"></i>
                    <b>Director of Informatics</b> during the 11<sup>th</sup> round of Students Scientific Chapter (SSC) of CEIT
                    Department at Amirkabir U. of T. (<i>Elected by the students of the department in 2016</i>)
                </li>
                <li>
                    <i class="fa-li fa fa-star text-warning"></i>
                    <b>Tech-and-executive Adviser</b> during the 12<sup>th</sup> SSC of CEIT at AUT (2017)
                </li>
                <li>
                    <i class="fa-li fa fa-star text-warning"></i>
                    Climbed <b>Damavand(5610 meters)</b>, <b>Alam-kouh(4850 meters)</b>, <b>Sabalan(4810 meters)</b>,
                    Sarakchaal, Tochal, Sahand and some other peaks of Iran (2012 - 2017).
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Awarded <b>The Best Ritual Folklore Performance Award</b> in the <a href="http://iran-tt.ir/" target="_blank" rel="noopener">18<sup>th</sup> Traditional and Ritual
                    Theater Festival</a> held in Tehran as a member of <i><a href="https://aylandance.com" target="_blank" rel="noopener">Aylan Azerbaijani Dance Group</a></i> (Aug. 2017)
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Awarded <b>First Prize of the Folklore Dances</b> in the <i><a href="http://eaff.eu/en" target="_blank" rel="noopener">
                        International Folklore, Dance and Music Festival and Competition Vienna Stars 2017</a></i>
                    held in Vienna, Austria as a member of <i><a href="https://aylandance.com" target="_blank" rel="noopener">Aylan Azerbaijani Dance Group</a></i> (Nov. 2017)
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Awarded <b>First Prize of the Folklore Dances</b> in the <i><a href="http://eaff.eu/en" target="_blank" rel="noopener">
                        International Folklore, Dance and Music Festival and Competition Prague Stars 2017</a></i>
                    held in Prague, Czech Republic as a member of <a href="https://aylandance.com" target="_blank" rel="noopener">Aylan Azerbaijani Dance Group</a> (Nov. 2017)
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Awarded <b>The Best Innovation</b> of NODET’s annual innovations event from the administration of
                    Maragheh Shahid Beheshti highschool, for the art-historical computer software (2012)
                </li>
            </ul>
        </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="cv">
        <div class="my-auto">
            <h2 class="mb-5">Extended C. V.</h2>
            <p>
                My Curriculum Vitae is available online on
                <a href="https://www.sharelatex.com/project/59ce0029478e804b755b8283">ShareLaTeX <i class="fa fa-external-link" aria-hidden="true"></i></a>.
                Also you can get the pdf version using the link below:
            </p>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <a href="{{ asset('files/CV_Amir_Haghighati_Maleki_21Nov17v2.pdf') }}" class="btn btn-outline-dark">
                    Download my C. V. as PDF <i class="fa fa-download" aria-hidden="true"></i>
                </a>
                <a href="https://www.sharelatex.com/project/59ce0029478e804b755b8283" class="btn btn-outline-dark mt-1">
                    View my C. V. on ShareLaTeX <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

@endsection
