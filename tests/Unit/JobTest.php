<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    //AAA

    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        "employer_id" => $employer->id,
    ]);
    //Act
    expect($job->employer->is($employer))->toBeTrue();
    //Assert
});

test("it has tags",function (){
    //AAA
    //Arrange
    $job=Job::factory()->create();

    $job->tag('frontend');

    expect($job->tags)->toHaveCount(1);
    //Act
    //Assert
});
