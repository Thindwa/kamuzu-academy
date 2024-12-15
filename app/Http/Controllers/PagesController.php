<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Policy;
use App\Models\Result;
use App\Models\Picture;
use App\Models\Document;
use App\Models\Hierarchy;
use App\Models\Leadership;
use App\Models\StaticText;
use App\Models\StaticImages;
use App\Models\SubjectContent;



class PagesController extends Controller
{
    //
    public function vision()
    {

        $StaticText = [

            'vision' => StaticText::where('identifier', 'vision')->first(),
        ];

        $images = [
            'vision' => StaticImages::where('identifier', 'vision')->first(),

        ];
        return view('frontendViews.pages.vision', compact('StaticText', 'images'));
    }

    public function governance()
    {
            $boardOfTrustees = Hierarchy::where('position', 'like', '%Board of Trustees%')->get();
            // $boardOfTrusteesChair = Hierarchy::where('position', 'like', '%Board of Trustees%')
            // ->where('name', 'like', '%chairman%')->get();
            $boardOfGovernors = Hierarchy::where('position', 'like', '%Board of Governors%')->get();
            $TACDC = Hierarchy::where('position', 'like', '%TA&CDC chair%')->get();
            $GeneralPurposes  = Hierarchy::where('position', 'like', '%General Purposes Chair%')->get();
            $Finances = Hierarchy::where('position', 'like', '%Finance chair%')->get();

        return view('frontendViews.pages.governance', compact('boardOfTrustees', 'boardOfGovernors', 'TACDC', 'GeneralPurposes', 'Finances'));
    }

    public function community()
    {
        return view('frontendViews.pages.community');
    }
    public function council()
    {
        return view('frontendViews.pages.studentcouncil');
    }

    public function facilities()
    {
        return view('frontendViews.pages.facilities');
    }

    public function scholarship()
    {
        return view('frontendViews.pages.scholarship');
    }

    public function subjects()
    {
         // Get all subjects content from the database
        $subjects = SubjectContent::all();
        return view('frontendViews.pages.subjects', compact('subjects'));
    }

   public function staff()
{
    $academicStaff = Staff::where('category', 'AcademicStaff')->get();  
    $secretarialStaff = Staff::where('category', 'SecretarialStaff')->get(); 
    $supportDepartments = Staff::where('category', 'SupportDepartment')->get(); 

    return view('frontendViews.pages.staff', compact('academicStaff', 'secretarialStaff', 'supportDepartments'));
}

    public function childProtection()
    {
        return view('frontendViews.pages.child_protection');
    }


  public function leadership()
{
    $leaderships = Leadership::all();
    return view('frontendViews.pages.leadership', compact('leaderships'));
}


    public function calendar()
    {
        $term1Calendar = Document::where('name', 'Term 1 Calendar')->first();
        $term2Calendar = Document::where('name', 'Term 2 Calendar')->first();
        $term3Calendar = Document::where('name', 'Term 3 Calendar')->first();

        return view('frontendViews.pages.calendar', compact('term1Calendar', 'term2Calendar', 'term3Calendar'));
    }

    public function history()
    {
        return view('frontendViews.pages.history');
    }


    public function support()
    {
        return view('frontendViews.pages.studentsupport');
    }

    public function career()
    {
        return view('frontendViews.pages.career');
    }
    public function pastoral()
    {
        return view('frontendViews.pages.pastoral');
    }
    public function chapel()
    {
        return view('frontendViews.pages.chapel');
    }
    public function curriculum()
    {
         
        return view('frontendViews.pages.curriculum');
    }
    
     public function results()
    {
         $results = Result::with('subjects')->get();
         $pictures = Picture::all();
        
        return view('frontendViews.pages.results', compact('results', 'pictures'));
    }
    public function form6()
    {
        return view('frontendViews.pages.form6');
    }
     public function policy()
    {
        $policies = Policy::all();
        return view('frontendViews.pages.policy', compact('policies'));
       
    }
    public function primary()
    {
        return view('frontendViews.pages.primary');
    }
    public function lower()
    {
        return view('frontendViews.pages.lower');
    }
    public function upper()
    {
        return view('frontendViews.pages.upper');
    }
    public function activities()
    {
        return view('frontendViews.pages.activities');
    }
    public function extra()
    {
        return view('frontendViews.pages.extra_curricular');
    }
    public function sports()
    {
        return view('frontendViews.pages.sports');
    }
    public function classics()
    {
        return view('frontendViews.pages.classics');
    }
    public function boarding()
    {
        return view('frontendViews.pages.boardinglife');
    }
    public function accomodation()
    {
        return view('frontendViews.pages.accommodation');
    }
    public function admission()
    {
        return view('frontendViews.pages.admissions');
    }
    public function vacancies()
    {
        return view('frontendViews.pages.vacancy');
    }
    public function alumni()
    {
        return view('frontendViews.pages.alumni');
    }
    public function contact()
    {
        return view('frontendViews.pages.contact');
    }


}
