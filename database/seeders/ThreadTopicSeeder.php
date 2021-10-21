<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thread_topics')->insert([
            'title' => 'Wellbeing',
            'icon' => '/images/Icon_wellbeing.png',
            'short_description' => 'Discuss any non-specific topics about mental health here.',
            'description' => 'The purpose of Seedlings is to give parents a way to support their child, through consultations and improved parenting skills. Sharing experiences and learning from them are critical in be able to better help your children on their path through life. This is a general subcommunity to discuss any and everything related to parenting and supporting children who may have a mental condition.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Behavioural',
            'icon' => '/images/Icon_behavioural.png',
            'short_description' => "Discuss behavioural disorders in this community.",
            'description' => "Children with behavioural disorders tend to have behaviours which parents find challenging or difficult to deal with for their age. Disruptive behaviour is usually attributed to attention deficit hyperactivity disorder (ADHD) or conduct disorder (CD). Behavioural disorders can be treated with therapy, but be able to manage a child with a behavioural disorders is critical. This subcommunity provides parent's of challenged children a way to seek advice, suggestions and give their personal experiences to help one another."
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Mood',
            'icon' => '/images/Icon_mood.png',
            'short_description' => 'Discuss mood disorders in this community.',
            'description' => "Mood disorders is a broad term for all forms of depression or bipolar disorder. Mood disorders are a serious mental condition, generally caused by an imbalance of brain chemicals, and often catalysed by stressful life events. This subcommunity aims to help parents identify possible symptoms of their child based on experiences of other parents, and how to best support children who could be suffering from this mental illness."
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Anxiety',
            'icon' => '/images/Icon_anxiety.png',
            'short_description' => 'Discuss anxiety disorders in this community.',
            'description' => 'Anxiety disorders are very common and quite normal in children. Children who display signs of anxiety do require support to eventually overcome it. This subcommunity provides a space for you to safely discuss possible symptoms, and get ways to address the issue from parents with similar experiences. Anxiety is normal for children going through new social changes or separation from a parent, but to prevent this worry from continuing it needs to be addressed.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Development',
            'icon' => '/images/Icon_developmental.png',
            'short_description' => 'Discuss developmental disorders in this community.',
            'description' => "Developmental disorders are neurological conditions which often impairing a child's social, physical, language or learning abilities. Developmental disorders are usually associated with the autism spectrum, learning disabilities or sensory impairment. As a parent, it can be difficult to understand or care for a child with a developmental disorder - but you are not alone. If you have any experiences, advice or need support please post in this subcommunity regarding developmental disorders."
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Eating',
            'icon' => '/images/Icon_eating.png',
            'short_description' => 'Discuss eating disorders in this community.',
            'description' => 'Eating disorders are a serious mental health condition that is more common in adolescents, involving an unhealthy relationship with foods. Common conditions include bulimia nervosa and anorexia nervosa, both of which usually result from a poor body image. This subcommunity aims to provide a safe space for discussion, identification and to share experiences to better help those caring for people who may have diagnosed or undiagnosed eating conditions.'
        ]);
    }
}
