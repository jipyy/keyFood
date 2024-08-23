<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('faqs.index')
            ->with('success', 'FAQ created successfully.');
    }

    public function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $faq->update($request->all());

        return redirect()->route('faqs.index')
            ->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')
            ->with('success', 'FAQ deleted successfully.');
    }

    public function showFaqPage()
    {
        $faqs = Faq::all();
        return view('faq', compact('faqs'));
    }
}
