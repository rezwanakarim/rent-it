<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'title' => ['required', 'min:4', 'max:30', Rule::unique('categories', 'title')],
    //             'description' => ['required'],
    //         ]);

    //         Category::create([
    //             'title' => $request->title,
    //             'description' => $request->description,

    //         ]);
    //         return redirect()->route('categories.create')->withMessage("Category Created!");
    //     } catch (QueryException $e) {

    //         return redirect()->back()->withInput()->withErrors('Something went wrong!');
    //     }
    // }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'title' => ['required', 'min:4', 'max:30', Rule::unique('categories', 'title')],
        //     'description' => ['required'],
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()]);
        // }

        try {
            $request->validate([
                'title' => ['required', 'min:4', 'max:30', Rule::unique('categories', 'title')],
                'description' => ['required'],
            ]);

            Category::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return response()->json(['success' => true, 'message' => 'Category Created!']);
        } catch (QueryException $e) {
            return response()->json(['success' => false, 'message' => 'Something went wrong!']);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $category = Category::find($id);

        return view('backend.category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('backend.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Category $category)
    {
        try {
            $request->validate([
                'title' => ['required', 'min:5', 'max:30', Rule::unique('categories', 'title')->ignore($category->id)],
                'description' => ['required', 'min:5', 'max:100']
            ]);

            $category->update([
                'title' => $request->title,
                'description' => $request->description,
                //'image'=>$request->image,
            ]);
            //when storing done! redirect to
            return redirect()->route('categories.list')->with('message', "Category Successfully Updated!");
        } catch (QueryException $e) {
            //dd($th->getMessage());
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('categories.list')->withMessage("Deleted");
            // dd('here');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
    // PDF
    public function categoryPdf()
    {
        try {
            $categories = Category::all();
            $fileName = 'category list.pdf';
            $pdf_blade = view('backend.category.pdf', compact('categories'))->render();

            $mpdf = new \Mpdf\Mpdf();
            $mpdf->SetHeader('Table Header | Center Text|{PAGENO}');
            $mpdf->SetFooter('<table width="100%">
            <tr>
                <td width="33%">{DATE j-m-Y}</td>
                <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                <td width="33%" style="text-align: right;">My document</td>
            </tr>
        </table>');
            $mpdf->WriteHTML($pdf_blade);
            $mpdf->Output($fileName, 'I');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    
}
