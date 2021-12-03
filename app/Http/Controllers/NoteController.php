<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Repository\NoteRepository;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    protected $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
        //        $userId = Auth::user()->id;
//        $categories = $this->categoryRepository->getByUserId($userId);
        $notes = $this->noteRepository->getAll();
        return view("backend.note.list", compact("notes"));
    }

    public function create()
    {
        return view("backend.note.create");
    }

    public function store(CreateNoteRequest $request)
    {
        //        $validated = $request->validate([
//            "name" => "required | max:20 | min:6",
//            "description" => "required"
//        ]);
        $this->noteRepository->create($request);
        return redirect()->route('notes.list');
    }

    public function show($id)
    {
        $note = $this->noteRepository->getById($id);
        return view("backend.note.detail", compact("note"));
    }

    public function edit($id)
    {
        $note = $this->noteRepository->getById($id);
        return view("backend.note.update", compact("note"));
    }

    public function update(Request $request, $id)
    {
        $this->noteRepository->update($request, $id);
        return redirect()->route("notes.list");
    }

    public function destroy($id)
    {
        $this->noteRepository->delete($id);
        return redirect()->route("notes.list");
    }
}
