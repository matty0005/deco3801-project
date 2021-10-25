<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 

class DoctorSeeder extends Seeder {
    /**
     * Run the database seeds. 
     * 
     * @return void
     */
    public function run() {

        $doctors = array(
            array(
                "id" => 1,
                "user_id" => 15,
                "title" => "Dr",
                "gender" => 1,
                "specialisation" => "Psychologist",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>My name is Dr Samantha Tran, I am a registered counsellor with the ACA (Australian Counselling Association) and hold a Doctor in Clinical Psychology. I offer a professional and gentle approach to providing counselling.</p>
                <br>
                <p>I have over 5 years specialised experience with youth and troubled adolescents, extending to supporting children and their families.</p>
                <br>
                <p>My experience and education uniquely provides me with tools to assist your child with their troubles, family relationships and social struggles including stress, anxiety, mood and behavioural disorders.</p>
                </div>",
                "cost" => 90,

            ),
            array(
                "id" => 2,
                "user_id" => 9,
                "title" => "Mr",
                "gender" => 0,
                "specialisation" => "Counselor",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>I am a counselor who works primarily with children, troubled youths and young people who struggle with anxiety, depression and other mood disorders. I will support your child by providing education to learn about physical symptoms and provide them with strategies, tools and techniques that you can immediately start to adopt. I include parents in my sessions if the child is willing, to provide practical tips to use when your child is affected by anxiety and other mental health concerns.</p>
                <br>
                <p>I promise to provide a safe space for your child to be heard, supported and listened to where they can address their biggest concerns and worries. I provide education, knowledge and understanding so they create the change you need and overcome their difficulties.</p>
                </div>",
                "cost" => 65,
            ),
            array(
                "id" => 3,
                "user_id" => 5,
                "title" => "Ms",
                "gender" => 1,
                "specialisation" => "Social Worker",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>Hi there! My name Eliza, thank you for considering me as your child's mental health consultant. I am a qualified social worker and counsellor with over 10 years experience. I am passionate about mental health and wellbeing and achieving a holistic balance to life . I offer a confidential, supportive, safe, and non-judgmental space for your child to explore issues that might be difficult to discuss with their parents or family. I understand that life for children in the modern world can be tough, and am passionate about helping your child to develop invaluable skills to support them later in life.</p>
                <br>
                <p>I look forward to meeting you and your child in a session.</p>
                </div>",
                "cost" => 55,
            ),
            array(
                "id" => 4,
                "user_id" => 6,
                "title" => "Dr",
                "gender" => 0,
                "specialisation" => "Psychologist",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>My name is Clavin, a qualified and experienced Psychologist. I have fifteen years of experience working with adolescents for all mental health concerns including anxiety, depression, stress, anger etc...</p>
                <br>
                <p>My therapy approach focuses on person-centred, using both cognitive behavioural therapy and acceptance behaviour therapy approaches. My work also focuses on integral holistic therapy, working with the emotions and the body, as well as the mind. Recently, I have been accepting many more younger clients experiencing anxiety and depression during the pandemic period. I aim to use my approaches to best help your child to take charge of their mental health condition.</p>
                </div>",
                "cost" => 75,

            ),
            array(
                "id" => 5,
                "user_id" => 13,
                "title" => "Mr",
                "gender" => 0,
                "specialisation" => "Social Worker",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>I feel a great therapist is one who is considerate, gentle and patient. Someone listens to the needs of their clients. For the past six years, I have been a social worker in private practice with a foundation of a psychology Degree. I use a holistic approach that is tailored to each child's unique and individual situation.</p>

                <p>I support each child's emotional and mental wellbeing. My qualifications in psychology and social work position me in the best place to listen to their troubles, understand your worries and make a plan for them to leave all our sessions with positive change to their health and wellbeing.</p>
                </div>",
                "cost" => 70,
            ),
            array(
                "id" => 6,
                "user_id" => 14,
                "title" => "Dr",
                "gender" => 0,
                "specialisation" => "Psychotherapist",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>I am a clinical psychotherapist and counsellor with over forty years experience in providing people related services. For the past twenty years, I have had a focus on helping helping youths (10 to 16) turn their lives around after suffering from the effects of anxiety and stress using a range of clinically proven modalities.</p>
                <br>
                <p>I also have significant experience with children on the autism spectrum and other disabilities, with my son being diagnosed at a young age. This has provided me with invaluable tools to help understand and support parents as well as their children who are on the spectrum.</p>
                <br>
                <p>To best diagnose my clients and support them, I use Seedling's Kid's Mode to provide additional information. This is an invaluable tool for assessing the mental state's of young children, and I ask that if you book me you encourage your child to use this feature extensively.</p>
                </div>",
                "cost" => 80,
            ),
        );

        \DB::table('doctors')->delete();
        \DB::table('doctors')->insert($doctors);  
    }
}