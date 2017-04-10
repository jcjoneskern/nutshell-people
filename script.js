var people = [
    {
        "name": "Rebekka Roosevelt",
        "email": null,
        "signup_date": "2011-12-8"
    },
    {
        "name": "Dan Bush",
        "email": "danbush@example.com",
        "signup_date": "2010-5-28"
    },
    {
        "name": "Matt Jackson",
        "email": "mattjackson@example.com",
        "signup_date": "2009-4-24"
    },
    {
        "name": "Dan Truman",
        "email": null,
        "signup_date": "2001-9-28"
    },
    {
        "name": "Guy Adams",
        "email": "guyadams@example.com",
        "signup_date": "2000-1-24"
    }
]


people.sort(function(a,b) {
  const dateA = new Date(a.signup_date), dateB = new Date(b.signup_date);
  return dateB - dateA;
});

// function logDates() {
//   people.forEach(function(person) {
//     console.log(person.signup_date);
//   });
// }
// logDates();

for(var i = 0; i <= 4; i++) {
  if(people[i].email !== null) {
    console.log(people[i]);
  }
}
