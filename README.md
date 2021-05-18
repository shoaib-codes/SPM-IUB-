# SPM-IUB (Group 4)
Here we store the codes/reports for the SPMS software done by me and 5 other members from IUB.
System Requirements
In a university a student gets admitted under a specific Degree Program. Each program
belongs to a department and the related departments are kept under schools. Courses
are taught by instructors, departments are run by department heads and schools are run
by deans. You are requested to explore the information required for the schools and the
departments of IUB for this purpose. Please find out the information that is related to
the degree programs as well. Also identify the student information needed for
monitoring their performances and the information you may need to keep track of for
the students themselves.
Students enroll in a certain program under a department which falls under a certain
school. Students usually take courses as per the curriculum of their respective programs.
You should explore the data regarding student enrollment.
Students are graded based on their performance in assessments in each course they
take by the instructors who teach that corresponding course to them. The grades from
the courses contribute to the cumulative grade point average of a student and the grade
point average at the end of each semester based on the courses taken in that semester.
Courses may be retaken by students if they wish to improve their grade. You should
explore the grading procedure and its relevant data.
Each program consists of many courses. There are different categories of the courses
(e.g., foundation, major, minor). Students are required to complete the courses
associated with the programs to fulfil the requirement of the degree. Please find out the
related information regarding courses and categories.
Under the OBE model for each program there will be a set of program learning
outcomes (PLO). To fulfil the requirement of a degree program a student must achieve
the PLOs associated with that program. To evaluate the students in each course, there
are a set of course outcomes that are mapped with the PLOs of the degree program.
Under each course, the COs are measured through different assessment techniques. The
faculty members evaluate the COs achieved and mapped PLOs achieved by each student
in a course. Please find related information regarding PLOs, COs and Faculty members.
All the COs and the mapped PLOs are stored in the system and finally compared with
each other so that we can generate the result of PLO fulfilment. Please note that a
student may fail to fulfil a PLO in a course but they can fulfil the requirement by

achieving the PLO from another course higher than the previous course. However, in
case a student can’t fulfill a PLO that they already fulfilled in the previous course, it can
be misleading, and the decision on how to handle such cases might be reserved by the
faculty members of the courses. Also, take into consideration the comparison of
performance between two students who possibly took the same set of courses, where
one might have achieved a certain PLO in all courses that had it, and the other achieved
it in fewer courses. Needless to say, all COs and PLOs need to be tracked regardless of
whether they have already been achieved or not. Try to consider many such use cases
that would be necessary for future analyses for the purposes of a student performance
monitoring system. Think of the evaluation technique, assessment plan and storing
mechanism of the result.

Following is a list of requirements w.r.t output reports that should be fulfilled in order to
build a system that enables users to monitor student performance and analyse relevant
metrics. Please note that input forms should be available to enter the data required to
generate any output report. System should be implemented first using dummy data and
then tested on sample data.
● School-wise, department-wise and program-wise student enrollment comparison.
For example, a graph showing how many students have enrolled in each
department with respect to a given period of time/semesters.
● School-wise, department-wise and program-wise student performance trends
based on CGPA with respect to a given period of time/semesters.
● Course-wise (for a selection of courses) student performance trend based on GPA
with respect to a given period of time/semesters.
● Instructor-wise (for a selection of instructors) student performance trend based
on the GPA of the students in the courses taught by each of the instructors so far
with respect to a given period of time/semesters.
● VC-wise,dean-wise, or head-wise student performance trend based on the GPA of
the students under the school/program corresponding to the leadership team.
● Instructor-wise student performance trend for a chosen course with respect to a
given period of time/semesters.
● PLO total percentage score for each PLO calculated from the scores achieved in
each CO associated with the corresponding PLO among all the courses the
student has done so far, along with the departmental average performance for
comparison. Also, for each PLO, what percentage of it was achieved from each of
the courses associated with the corresponding PLO, and what percentage was

achieved via each of all the COs associated with the corresponding PLO. All of this
for a chosen school, program, or department.
● PLO achievement of a student for each of the courses taken so far.
● Comparison of PLO-achieved percentage versus PLO-attempted percentage
● Comparison of a course’s, student’s, department’s, program’s, or school’s
expected PLO-achievement versus actual with respect to a given period of
time/semesters.
● Summary of CO-PLO achievement stats for a chosen course, program,
department, school.



