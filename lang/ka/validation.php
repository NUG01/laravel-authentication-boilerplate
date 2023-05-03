<?php



return [

  'custom' => [
    'name' => [
      'required' => 'სახელის ველის შევსება აუცილებელია!',
      'string' => 'სახელის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
      'min' => 'სახელი უნდა იყოს მინიმუმ 2 სიმბოლო!',
      'max' => 'გვარი უნდა იყოს მაქსიმუმ 16 სიმბოლო!',
    ],
    'surname' => [
      'required' => 'გვარის ველის შევსება აუცილებელია!',
      'string' => 'გვარის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
      'min' => 'გვარის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
      'max' => 'გვარი უნდა იყოს მაქსიმუმ 16 სიმბოლო!',
    ],
    'email' => [
      'required' => 'მეილის ველის შევსება აუცილებელია!',
      'string' => 'ელ.ფოსტის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
      'email' => 'ელ.ფოსტის ველი უნდა იყოს მეილის ფორმატში!',
      'unique' => 'ელ.ფოსტა უკვე არსებობს!',
      'exists' => 'ელ.ფოსტა არ არსებობს!',

    ],
    'password' => [
      'required_with' => 'აუცილებელია პაროლის გამეორება!',
      'same' => 'აუცილებელია პაროლი ემთხვეოდეს გამეორებულ პაროლს!',
      'string' => 'პაროლის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
      'min' => 'პაროლი უნდა იყოს მინიმუმ 8 სიმბოლო!',

    ],
    'current_password' => [
      'required_with' => 'აუცილებელია პაროლის გამეორება!',
      'min' => 'პაროლი უნდა იყოს მინიმუმ 8 სიმბოლო!',
    ],
    'new_password' => [
      'required' => 'აუცილებელია პაროლის გამეორება!',
      'min' => 'პაროლი უნდა იყოს მინიმუმ 8 სიმბოლო!',
    ],
    'password_confirmation' => [
      'required' => 'პაროლის გამეორება აუცილებელია!',
      'string' => 'პაროლის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
    ],
    'role' => [
      'required' => 'როლის ველის შევსება აუცილებელია!',
      'integer' => 'როლის ველი უნდა იყოს არჩეული მოცემული ვარიანტებიდან!',
    ],
    'code' => [
      'required' => 'ვერიფიკაციის კოდი არასწორია!',
      'string' => 'ვერიფიკაციის კოდი არასწორია!',
      'exists' => 'ვერიფიკაციის კოდი არასწორია!',
    ],
    'token' => [
      'required' => 'დაფიქსირდა შეცდომა!',
      'string' => 'დაფიქსირდა შეცდომა!',
      'min' => 'დაფიქსირდა შეცდომა!',
      'max' => 'დაფიქსირდა შეცდომა!',
    ],

    'image' => [
      'required' => 'სურათის ატვირთვა აუცილებელია!',
      'image' => 'სურათის ფორმატი შეუსაბამოა!',
      'max' => 'მაქსიმუმ 6 სურათი!',
    ],
    'question' => [
      'required' => 'სურათის ატვირთვა აუცილებელია!',
      'min' => 'მინიმუმ 10 სიმბოლო!',
      'max' => 'მაქსიმუმ 300 სიმბოლო!',
    ],
  ],
];
