<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('resources')->insert([
            'title' => 'Symptoms of Depression in Children',
            'content' => '
            <div class="m-8 text-justify">
              <p class="text-center>By Dr. Guinea Pig</p>
              <p class="my-4">Childhood depression differs from everyday emotions that children exhibit when growing up. If your child is sad, it does not necessarily mean they are depressed. However, if the sadness becomes persistent or becomes to interfere with their everyday activies, schoolwork, family life or relationships, then it may in fact be depression.</p>
              <p class="my-4">How can you tell if your child is depressed? Some symptoms include:</p>
              <div class="flex mx-6 my-4 justify-between">
                <ul class="list-disc ml-8 mb-4">
                  <li>anger,</li>
                  <li>continous sadness,</li>
                  <li>social withdrawal,</li>
                  <li>changes in appetite,</li>
                  <li>vocal outburts,</li>
                  <li>fatigue,</li>
                  <li>trouble concentrating,</li>
                  <li>thoughts of suicide, and</li>
                  <li>feelings of worthlessness or guilt</li>
                </ul>
                <img class="w-48 h-48"src="/images/doctor-article1.jpg">
              </div>
              <p class="my-4">
                If these symptoms of depression have remained for at least 2 weeks, it is recommended you seek professional help either through Seedling Consultations or at a clinic who specialises in childrens mental health. Click
                <a href="https://www.childrens.health.qld.gov.au/chq/our-services/mental-health-services/" target="_blank" class="underline">here</a>
                to find a clinic near you.
              </p>
              <p class="my-4">If you suspect your child is depressed, it is beneficial for parents to listen to their concerns. If you listen closely, you may be able to uncover the cause of your childs depression.</p>
              <p class="my-4">If your child appears to be severly depressed, parents should be particularly attentive for signs that indicate your child is at risk of suicide and seek help IMMEDIATELY.</p>
            </div>
            ',
        ]);

        DB::table('resources')->insert([
            'title' => 'Parenting Tips for Children with ADHD',
            'content' => '
            <div class="m-8 text-justify">
              <p class="text-center">By Dr. Eliza Gaitor</p>
              <p class="my-4">Raising a child with ADHD is more difficult than regular parenting. Depending on the severity of the child\'s symptoms, it may be impossible to create normal household routines. This article highlights different approaches to make parenting easier with children with ADHD</p>
              <p class="my-4">First and foremost, children with ADHD function differently than those without. The disorder makes the child more prone to impulsive behaviour and self-doubt.</p>
              <p class="my-4">So as a parent, you must modify your behaviour and approaches in order to manage your child. These behavioural techniques do not replace medication, but rather supplement them.</p>
          
              <h2 class="text-xl font-medium underline">Identify Boundaries</h2>
              <p class="justify-center mb-3">Children should be taught to consider the consequences of their actions and control the impulse to act on it. Parents must decide which behaviours they will and won\'t tolerate. It is important that you stick to these identified boundaries as punishing a behaviour one day, and allow it the next, will confuse the child. Some examples of unacceptable behaviours include:</p>
              <ul class="list-disc ml-8 mb-4">
                <li>physical outbursts,</li>
                <li>unwillingness to get out of bed,</li>
                <li>refusal to comply with demands such as turning off the television,</li>
              </ul>
          
              <h2 class="text-xl font-medium underline">Create Structure</h2>
              <p class="justify-center mb-6">Create a daily routine that the child will follow. Establish rituals when eating, doing homework, playing and during bedtime. This repetition enables the child to feel safe and in control.</p>
          
              <h2 class="text-xl font-medium underline">Simplify and Organise</h2>
              <p class="justify-center mb-6">Create a quiet place in the home for the child to take a break from the busy-ness of everyday life. Keep your home organised and clean to reduce distraction and allows the child to know where everything goes.</p>
          
              <h2 class="text-xl font-medium underline">Limit Distraction</h2>
              <p class="justify-center mb-6">Children with ADHD are more prone to distractions. Distractions such as the televison or computer encourage impulsive behaviour, and therefore should be limited. By decreasing screen time and increasing engaging activities, your child can expend their energy in less destructive ways.</p>
          
              <h2 class="text-xl font-medium underline">Encourage Thinking Aloud</h2>
              <p class="justify-center mb-6">Children with ADHD often act without thinking. By verbalising their thoughts prior to acting, it allows the child to reason when an urge to act arises. Additionally, it allows parents to better understand their child\'s thought process.</p>
          
              <h2 class="text-xl font-medium underline">Find Private Counselling</h2>
              <p class="justify-center mb-6">There is a limit to how much you, as a parent, can help your child. It is necessary to remember that you aren\'t alone and to not neglect your own mental needs. Don\'t be afraid to seek professional assistance for both you and your child whether it be through Seedlings Counselling or at a clinic near you.</p>
              <p class="justify-center mb-6">
                Click <a href="https://www.childrens.health.qld.gov.au/chq/our-services/mental-health-services/" target="_blank" class="underline">here</a>
                to find a clinic specialising in children\'s mental health near you.
              </p>
            </div>
          ',
        ]);

        DB::table('resources')->insert([
            'title' => 'Environment on Children\'s Mental Health',
            'content' => '<div class="m-8 text-justify">
            <p class="text-center">By Dr. Guinea Pig</p>
            <p class="my-4">Research has proven that early experiences impact the development of the brain, which further impacts mental health. So, by improving a child\'s environment, relationships and experiences earlier in life, more significant issues can be avoided or alleviated in the future.</p>
            <p class="my-4">Children can show signs of anxiety disorder, ADHD, depression, PTSD and autism at a very early age. They also respond to and process emotional and traumatic experiences in different ways to adults.</p>
          
            <h2 class="text-l font-semibold underline">Genetic Influence</h2>
            <p class="my-4">Genes dictate how our bodies will function from birth to well into the adult years. However, toxic stress can also damage the brain architecture, increasing the likelihood of developing a mental health problem. Circumstances associated with family, relationships and finance may elevate the risk of serious mental health issues developing.</p>
            <q class="italic">Most potential mental health problems will not become mental health problems if we respond to them early </q>
          
            <p class="my-4">From this, in additional to profressional help, it is important to treat young children\'s mental health issues within the context of their families, homes and communities. Reducing the stressors affecting children requires addressing the stresses prevelant in their environment.</p>
          </div>
          ',
        ]);

        DB::table('resources')->insert([
            'title' => 'Developing Self-Awareness in Children',
            'content' => '<div class="m-8 text-justify">
            <p class="text-center">By Dr. Eliza Gaitor</p>
            <p class="my-4">Children are quickly growing, both physically and emotionally. We, as parents, try to guide them to understand who they are. We shouldn\'t be raising a child based on your own goals and values, but should recognise that our children are unique individuals who require assistance growing into their true selves.</p>
            <p class="my-4">In order to help the child understand themselves, children should be taught about self-awareness. A better understanding of yourself results in:</p>
            <ul class="list-disc ml-8 mb-4">
              <li>Ability to regulate emotions</li>
              <li>Strong sense of self-worth</li>
              <li>Thoughtful decision-making</li>
              <li>Better relationships with others</li>
              <li>Self-acceptance</li>
            </ul>
            <h2 class="text-xl font-semibold mt-8 mb-2 underline">Questions to develop self-awareness</h2>
            <ol class="list-decimal ml-8 mb-4">
              <li class="my-1">What are your strengths?</li>
              <li class="my-1">What are your goals for this school year?</li>
              <li class="my-1">Who do you talk to when you have a problem? How do they help?</li>
              <li class="my-1">What are you worried about?</li>
              <li class="my-1">What do you like to do for fun?</li>
              <li class="my-1">What do you feel ashamed of?</li>
              <li class="my-1">Where do you feel the safest?</li>
              <li class="my-1">What does failure mean to you? Have you ever felt like a failure? How did you cope?</li>
              <li class="my-1">How can you tell that you\'re angry? What does your body feel like? What are you thinking?</li>
              <li class="my-1">What do you like about yourself</li>
            </ol>
          </div>
          ',
        ]);
    }
}
