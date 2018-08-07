

https://www.youtube.com/watch?v=dd4JdzVjC3E&pbjreload=10






CREATE VIEW patient_view AS
SELECT patient.id,patient.name,patient.email,city.name ctname,country.name cname,patient.gender,patient.contact,patient.dob
 FROM patient,city,country
 
 WHERE patient.cityid=city.id AND patient.countryid=country.id;
 
 
 
create procedure home()

begin
select count(doctor.id) as total,doctor.name,degrees.name,specialist.name,designetion.name

from doctor,degrees,designetion,specialist

where doctor.degreesid=degrees.id and doctor.designetionid = designetion.id and doctor.specialistid = specialist.id
GROUP BY doctor.designetionid;

end


create procedure category(in IDS int)
begin
SELECT doctor.id,doctor.name,doctor.email,doctor.gender,doctor.fees,doctor.contact,doctor.picture,degrees.name dename,designetion.name dname,specialist.name sname 
FROM doctor,degrees,designetion,specialist 
WHERE doctor.degreesid=degrees.id AND doctor.designetionid = designetion.id AND doctor.specialistid=specialist.id and designetion.name = IDS 
ORDER BY doctor.id DESC;
end 
   
 




SELECT
    charities.id,
    charities.userid as donerid,
    users.name as donername,
    charities.Title,   
    charities.description,
    charities.location,
    charities.categoryid,
    charities_category.categoryName,
    charities.fundingRequirement,
    charities.endDate,
    charities.minimumContribution,    
    charities.submitDate,
    COUNT(
        charities_contribution.charitiesid
    ) AS totalcontributers,
    SUM(charities_contribution.amount) AS totalamount
FROM
    charities,
    charities_category,
    charities_contribution,
    users
WHERE
    charities.slug = 'build-hospital-ranpur'
    AND
    charities_category.id = charities.categoryid
    AND
    charities_contribution.charitiesid = charities.id
    AND
    charities.userid = users.id


    
    
SELECT
    test.id,
    test.test_name,   
  
    COUNT(
        test.amount
    ) AS totalamount,
    SUM(  test.amount) AS totalamount
FROM
  test
  

WHERE
   
    charities.userid = users.id

