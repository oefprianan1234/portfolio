<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('name')->paginate(10);
        return SkillResource::collection($skills);
    }

    public function store(SkillRequest $request)
    {
        $skill = Skill::create($request->validated());
        return new SkillResource($skill);
    }

    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }

    public function update(SkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return new SkillResource($skill);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json(null, 204);
    }
}