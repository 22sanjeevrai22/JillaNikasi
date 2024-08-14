<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();
        return view('panel.persons.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.persons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        dd($request);

        $data = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
        ];
        if ($request->hasFile('person_image')) {
            $person = Person::create($data);
            try {
                // $image = $request->file('person_image');
                // $imagePath = $image->store('temp', 'public');
                // $request->session()->put('temp_person_image', $imagePath);

                $person
                    ->addMediaFromRequest('person_image')
                    ->usingName($request->first_name)
                    ->toMediaCollection('cover');

                // $request->session()->forget('temp_person_image');
            } catch (FileDoesNotExist $e) {
                return redirect()->back()->with('error', 'File does not exist.');
            } catch (FileIsTooBig $e) {
                return redirect()->back()->with('error', 'File is too big.');
            }
            return redirect()->back()->with('success', 'Person Created Successfully');
        }
        return redirect()->back()->with('success', 'Person Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return view('panel.persons.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        // dd($request);
        $data = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
        ];

        $person->update($data);
        if ($request->hasFile('person_image')) {
            try {
                // $image = $request->file('person_image');
                // $imagePath = $image->store('temp', 'public');
                // $request->session()->put('temp_person_image', $imagePath);

                $person
                    ->addMediaFromRequest('person_image')
                    ->usingName($request->first_name)
                    ->toMediaCollection('cover');

                // $request->session()->forget('temp_person_image');
            } catch (FileDoesNotExist $e) {
                return redirect()->back()->with('error', 'File does not exist.');
            } catch (FileIsTooBig $e) {
                return redirect()->back()->with('error', 'File is too big.');
            }

            return redirect()->back()->with('success', 'Person Edited Successfully');
        }
        return redirect()->back()->with('success', 'Person Edited Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person = Person::find($person->id);
        if ($person) {
            $person->delete();
            return redirect()->back()->with('success', 'Person Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Person Not Found');
        }
    }
}
