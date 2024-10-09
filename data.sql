INSERT INTO Users (Username, FirstName, LastName, DateOfBirth, Password)
VALUES 
('user1', 'Kyanah', 'Balinado', '2004-03-17', 'password1'),
('user2', 'Kurt', 'Balinado', '2003-03-15', 'password2'),
('user3', 'Ghen', 'Balinado', '1983-01-28', 'password3'),
('user4', 'Paul', 'Balinado', '1983-11-06', 'password4'),
('user5', 'Porsche', 'Balinado', '2023-06-20', 'password5');

-- Groups Table
INSERT INTO Groups (GroupName, CreatedBy)
VALUES 
('Group bunso', 1),
('Group panganay', 2),
('Group mama', 3),
('Group papa', 4),
('Group dog', 5);

-- Posts Table
INSERT INTO Posts (PostDescription, PostedBy, IsPublic, IsOnlyForFriends, GroupID)
VALUES 
('Post by Kyanah Balinado', 1, FALSE, TRUE, 1),
('Post by Kurt Balinado', 2, TRUE, FALSE, 2),
('Post by Ghen Balinado', 3, FALSE, TRUE, 3),
('Post by Paul Balinado', 4, TRUE, FALSE, 4),
('Post by Porsche Balinado', 5, TRUE, FALSE, NULL);

-- Group Membership Requests Table
INSERT INTO GroupMembershipRequests (GroupID, GroupMemberUserID, IsGroupMemberShipAccepted)
VALUES 
(1, 2, FALSE),
(1, 3, TRUE),
(2, 4, FALSE),
(3, 5, TRUE),
(4, 1, FALSE);
