<?php

namespace App\Http\Controllers\Form;
use App\Http\Controllers\Controller;
use App\Models\FoodPremise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\User;
use PDF;

class FoodPremiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('food.create_report');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food.create_report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FoodPremise::insert([
            'PremiseName' => $request->PremiseName,
            'location' => $request->location,
            'declaration' => $request->declaration,
            'remarks1' => $request->remarks1,
            'Q1' => $request->Q1,
            'remarks2' => $request->remarks2,
            'Q2' => $request->Q2,
            'remarks3' => $request->remarks3,
            'Q3' => $request->Q3,
            'remarks4' => $request->remarks4,
            'Q4' => $request->Q4,
            'remarks5' => $request->remarks5,
            'Q5' => $request->Q5,
            'remarks6' => $request->remarks6,
            'Q6' => $request->Q6,
            'remarks7' => $request->remarks7,
            'Q7' => $request->Q7,
            'remarks8' => $request->remarks8,
            'Q8' => $request->Q8,
            'remarks9' => $request->remarks9,
            'Q9' => $request->Q9,
            'remarks10' => $request->remarks10,
            'Q10' => $request->Q10,
            'remarks11' => $request->remarks11,
            'Q11' => $request->Q11,
            'remarks12' => $request->remarks12,
            'Q12' => $request->Q12,
            'remarks13' => $request->remarks13,
            'Q13' => $request->Q13,
            'remarks14' => $request->remarks14,
            'Q14' => $request->Q14,
            'remarks15' => $request->remarks15,
            'Q15' => $request->Q15,
            'remarks16' => $request->remarks16,
            'Q16' => $request->Q16,
            'remarks17' => $request->remarks17,
            'Q17' => $request->Q17,
            'remarks18' => $request->remarks18,
            'Q18' => $request->Q18,
            'remarks19' => $request->remarks19,
            'Q191' => $request->Q191,
            'Q192' => $request->Q192,
            'remarks20' => $request->remarks20,
            'Q20' => $request->Q20,
            'remarks21' => $request->remarks21,
            'Q21' => $request->Q21,
            'remarks22' => $request->remarks22,
            'Q221' => $request->Q221,
            'Q222' => $request->Q222,
            'Q223' => $request->Q223,
            'Q224' => $request->Q224,
            'remarks23' => $request->remarks23,
            'Q23' => $request->Q23,
            'remarks24' => $request->remarks24,
            'Q24' => $request->Q24,
            'remarks25' => $request->remarks25,
            'Q25' => $request->Q25,
            'remarks26' => $request->remarks26,
            'Q26' => $request->Q26,
            'remarks27' => $request->remarks27,
            'Q27' => $request->Q27,
            'remarks28' => $request->remarks28,
            'Q28' => $request->Q28,
            'remarks29' => $request->remarks29,
            'Q29' => $request->Q29,
            'remarks30' => $request->remarks30,
            'Q30' => $request->Q30,
            'remarks31' => $request->remarks31,
            'Q31' => $request->Q31,
            'remarks32' => $request->remarks32,
            'Q32' => $request->Q32,
            'remarks33' => $request->remarks33,
            'Q33' => $request->Q33,
            'remarks34' => $request->remarks34,
            'Q34' => $request->Q34,
            'remarks35' => $request->remarks35,
            'Q35' => $request->Q35,
            'others36' => $request->others36,
            'remarks36' => $request->remarks36,
            'Q36' => $request->Q36,
            'remarks37' => $request->remarks37,
            'Q37' => $request->Q37,
            'remarks38' => $request->remarks38,
            'Q38' => $request->Q38,
            'remarks39' => $request->remarks39,
            'Q39' => $request->Q39,
            'remarks40' => $request->remarks40,
            'Q40' => $request->Q40,
            'remarks41' => $request->remarks41,
            'Q41' => $request->Q41,
            'remarks42' => $request->remarks42,
            'Q42' => $request->Q42,
            'remarks43' => $request->remarks43,
            'Q43' => $request->Q43,
            'others44' => $request->others44,
            'remarks44' => $request->remarks44,
            'Q44' => $request->Q44,
            'remarks45' => $request->remarks45,
            'Q45' => $request->Q45,
            'remarks46' => $request->remarks46,
            'Q46' => $request->Q46,
            'remarks47' => $request->remarks47,
            'Q47' => $request->Q47,
            'remarks48' => $request->remarks48,
            'Q48' => $request->Q48,
            'comment' => $request->comment,
            'correctiveaction' => $request->correctiveaction,
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(food $food)
    {
        $food = DB::select('select * from food_premises');
        return view('food.show_report',['food_premises'=>$food]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(food $food)
    {
        //
    }
}
