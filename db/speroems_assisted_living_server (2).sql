-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 06:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speroems_assisted_living_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_group_name`
--

CREATE TABLE `bill_group_name` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_desc` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill_group_name`
--

INSERT INTO `bill_group_name` (`group_id`, `group_name`, `group_desc`, `InActive`) VALUES
(1, 'MRI', 'MRI', 0),
(2, 'CT SCAN', 'CT Scan', 0),
(3, 'X-RAY', 'X-Ray', 0),
(4, 'ECG', 'ECG', 0),
(5, 'USG', 'USG', 0),
(6, 'IT', 'IT', 0),
(7, 'LAB', 'LAB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill_particular`
--

CREATE TABLE `bill_particular` (
  `particular_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `particular_name` varchar(150) NOT NULL,
  `particular_desc` text NOT NULL,
  `charge_amount` float(11,2) NOT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill_particular`
--

INSERT INTO `bill_particular` (`particular_id`, `group_id`, `particular_name`, `particular_desc`, `charge_amount`, `InActive`) VALUES
(1, 1, 'MRI BRAIN AND SPINE', 'MRI Brain and Spine', 500.00, 0),
(2, 1, 'MRI BRAIN', 'MRI Brain', 500.00, 0),
(3, 1, 'MRI BRAIN WITH CONTRAST', 'MRI Brain with Contrast', 500.00, 0),
(4, 1, 'MRI ENTIRE SPINE', 'MRI Entire Spine', 500.00, 0),
(5, 1, 'MRI ENTIRE SPINE WITH CONTRAST', 'MRI Entire Spine with Contrast', 500.00, 0),
(6, 1, 'MRI CERVICAL SPINE', 'MRI Cervical Spine', 500.00, 0),
(7, 1, 'MRI BREAST (BOTH)', 'MRI Breast (Both)', 500.00, 0),
(8, 1, 'MRI CERVICAL (C) SPINE WITH CONTRAST', 'MRI Cervical (C) Spine with Contrast', 500.00, 0),
(9, 1, 'MRI ABDOMEN AND PELVIS', 'MRI Abdomen and Pelvis', 500.00, 0),
(10, 1, 'MRI EXTREMITIES', 'MRI Extremities', 500.00, 0),
(11, 1, 'MRI EXTREMITIES WITH CONTRAST', 'MRI Extremities with Contrast', 500.00, 0),
(12, 1, 'MRI WHOLE BODY', 'MRI Whole Body', 500.00, 0),
(13, 3, 'ABDOMINAL X-RAY', 'Abdominal X-ray', 500.00, 0),
(14, 3, 'BARIUM X-RAY', 'Barium X-ray', 500.00, 0),
(15, 3, 'BONE X-RAY', 'Bone X-ray', 500.00, 0),
(16, 3, 'CHEST X-RAY', 'Chest X-ray', 500.00, 0),
(17, 3, 'DENTAL X-RAY', 'Dental X-ray', 500.00, 0),
(18, 3, 'EXTREMITY X-RAY', 'Extremity X-ray', 500.00, 0),
(19, 3, 'HAND X-RAY', 'Hand X-ray', 500.00, 0),
(20, 3, 'JOINT X-RAY', 'Joint X-ray', 500.00, 0),
(21, 3, 'LUMBOSACRAL SPINE X-RAY', 'Lumbosacral Spine X-ray', 500.00, 0),
(22, 3, 'NECK  X-RAY', 'Neck  X-ray', 500.00, 0),
(23, 3, 'PELVIS X-RAY', 'Pelvis X-ray', 500.00, 0),
(24, 3, 'SINUS X-RAY', 'Sinus X-ray', 500.00, 0),
(25, 3, 'SKULL X-RAY', 'Skull X-ray', 500.00, 0),
(26, 3, 'THORACIC SPINE X-RAY', 'Thoracic Spine X-ray', 500.00, 0),
(27, 3, 'UPPER GI AND SMALL BOWEL SERIES X-RAY', 'Upper GI and Small Bowel Series X-ray', 500.00, 0),
(28, 3, 'X-RAY OF THE SKELETON', 'X-ray of the Skeleton', 500.00, 0),
(29, 2, 'CT ANGIOGRAPHY', 'CT Angiography', 500.00, 0),
(30, 2, 'CT ABDOMEN SACN', 'CT Abdomen Sacn', 500.00, 0),
(31, 2, 'CT BONE SCAN', 'CT Bone Scan', 500.00, 0),
(32, 2, 'CT HEAD', 'CT Head', 500.00, 0),
(33, 2, 'CT SCAN CHEST/LUNGS', 'CT Scan Chest/Lungs', 500.00, 0),
(34, 2, 'CT CARDIAC', 'CT Cardiac', 500.00, 0),
(35, 2, 'CT NECK', 'CT Neck', 500.00, 0),
(36, 2, 'CT PELVIS SCAN', 'CT Pelvis Scan', 500.00, 0),
(37, 2, 'CT SCAN KIDNEY', 'CT Scan Kidney', 500.00, 0),
(38, 2, 'CT SCAN OF SPINE', 'CT Scan of Spine', 500.00, 0),
(39, 2, 'CT BRAIN', 'CT Brain', 500.00, 0),
(40, 5, 'US GUIDED BREAST BIOPSY', 'US Guided Breast Biopsy', 500.00, 0),
(41, 5, 'US UTERUS', 'US Uterus', 500.00, 0),
(42, 5, 'US OBSTETRIC', 'US Obstetric', 500.00, 0),
(43, 5, 'US ABDOMEN', 'US Abdomen', 500.00, 0),
(44, 5, 'US ABDOMEN(CHILDREN)', 'US Abdomen(Children)', 500.00, 0),
(45, 5, 'US BREAST', 'US Breast', 500.00, 0),
(46, 5, 'US CAROTID', 'US Carotid', 500.00, 0),
(47, 5, 'US GENERAL', 'US General', 500.00, 0),
(48, 5, 'US MUSCULOSKELETAL', 'US Musculoskeletal', 500.00, 0),
(49, 5, 'US PELVIS', 'US Pelvis', 500.00, 0),
(50, 5, 'US PROSTATE', 'US Prostate', 500.00, 0),
(51, 5, 'US SCROTUM', 'US Scrotum', 500.00, 0),
(52, 5, 'US THYROID', 'US Thyroid', 500.00, 0),
(53, 5, 'US VENOUS(EXTREMITIES)', 'US Venous(Extremities)', 500.00, 0),
(54, 2, 'BALAJI', 'nhj', 1000.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('aaaa522c1e39d873bdea9947c8f66ce1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1403771284, '');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `comp_id` int(20) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `company_address` text NOT NULL,
  `company_contactNo` varchar(50) NOT NULL,
  `TIN` varchar(50) NOT NULL,
  `logo` varchar(900) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`comp_id`, `company_name`, `company_address`, `company_contactNo`, `TIN`, `logo`) VALUES
(1, 'Assisted Living', '1547B, Off, Lokmanya Bal Gangadhar Tilak Rd, opp. Vitthal Mandir, Ramashram Society, Rukmini Sadan Society, Navi Peth, Sadashiv Peth, Pune, Maharashtra 411030', ' 076204 00100', 'NA', 'Screenshot_(14).png');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `complain_name` varchar(999) NOT NULL,
  `complain_desc` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `complain_name`, `complain_desc`, `InActive`) VALUES
(3, 'ABDOMINAL AND PELVIC PAIN', 'Abdominal and pelvic pain', 0),
(4, 'ABNORMAL UTERINE BLEEDING', 'Abnormal uterine bleeding ', 0),
(5, 'ANXIETY, DEPRESSION', 'Anxiety, depression', 0),
(6, 'BACK PAIN', 'Back pain', 0),
(7, 'CHEST PAIN', 'Chest pain ', 0),
(8, 'COUGH', 'Cough', 0),
(9, 'COUGH, DYSPNEA (INFANT, NEWBORN)', 'Cough, dyspnea (infant, newborn) ', 0),
(10, 'CRYING INFANT (INCONSOLABLE)', 'Crying infant (Inconsolable) ', 0),
(11, 'DELIRIUM', 'Delirium', 0),
(12, 'DEMENTIA, MEMORY LOSS', 'Dementia, memory loss', 0),
(13, 'DIARRHEA', 'Diarrhea', 0),
(14, 'DYSPHAGIA', 'Dysphagia', 0),
(15, 'DYSPNEA, TACHYPNEA', 'Dyspnea, tachypnea ', 0),
(16, 'EAR PAIN, OTALGIA', 'Ear pain, otalgia ', 0),
(17, 'EDEMA, LEG', 'Edema, leg ', 0),
(18, 'FACIAL FLUSHING', 'Facial flushing ', 0),
(19, 'FACIAL PAIN', 'Facial pain', 0),
(20, 'FEVER (ACUTE, UNCERTAIN SOURCE)', 'Fever (acute, uncertain source) ', 0),
(21, 'FLANK PAIN', 'Flank pain ', 0),
(22, 'GENITAL SKIN LESION, GENITAL ULCER', 'Genital skin lesion, genital ulcer', 0),
(23, 'HEADACHE', 'Headache', 0),
(24, 'HEARING LOSS (DEAFNESS)', 'Hearing loss (deafness) ', 0),
(25, 'HEMATURIA', 'Hematuria', 0),
(26, 'HYPOTENSION, SHOCK', 'Hypotension, shock', 0),
(27, 'LEG PAIN, BONE PAIN, EXTREMITY PAIN', 'Leg pain, bone pain, extremity pain', 0),
(28, 'LIMP IN CHILD', 'Limp in child ', 0),
(29, 'LYMPHADENOPATHY', 'Lymphadenopathy', 0),
(30, 'MENTAL STATUS, ACUTE CHANGE (COMA,  LETHARGY)', 'Mental status, acute change (coma,  lethargy) ', 0),
(31, 'MUSCLE CRAMPS', 'Muscle cramps', 0),
(32, 'MYALGIAS, ARTHRALGIAS (GENERALIZED)', 'Myalgias, arthralgias (generalized)', 0),
(33, 'NAUSEA, VOMITING', 'Nausea, vomiting ', 0),
(34, 'NUMBNESS, SENSORY LOSS', 'Numbness, sensory loss ', 0),
(35, 'PRURITUS', 'Pruritus', 0),
(36, 'RASH, GENERALIZED', 'Rash, generalized', 0),
(37, 'RED EYE', 'Red eye ', 0),
(38, 'SCROTAL PAIN', 'Scrotal pain ', 0),
(39, 'SEIZURE', 'Seizure', 0),
(40, 'SHOULDER PAIN', 'Shoulder pain ', 0),
(41, 'SINUS TACHYCARDIA', 'Sinus tachycardia', 0),
(42, 'SYNCOPE', 'Syncope', 0),
(43, 'TINNITUS', 'Tinnitus', 0),
(44, 'TREMOR', 'Tremor', 0),
(45, 'URINARY SYMPTOMS (DYSURIA,  FREQUENCY, URGENCY)', 'Urinary symptoms (dysuria,  frequency, urgency) ', 0),
(46, 'VERTIGO', 'Vertigo', 0),
(47, 'WEAKNESS, FATIGUE, MALAISE, VAGUE  SYMPTOMS', 'Weakness, fatigue, malaise, vague  symptoms ', 0),
(48, 'WEIGHT LOSS', 'Weight loss ', 0),
(49, 'OTHER', 'other', 0);

-- --------------------------------------------------------

--
-- Table structure for table `declaredor`
--

CREATE TABLE `declaredor` (
  `id` int(11) NOT NULL,
  `receipt_no` varchar(25) NOT NULL,
  `invoice_no` varchar(25) NOT NULL,
  `old_receipt_no` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `patient_no` varchar(25) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `discount` float(11,2) NOT NULL,
  `subtotal` float(11,2) NOT NULL,
  `total_amount` float(11,2) NOT NULL,
  `amountPaid` float(11,2) NOT NULL,
  `change` float(11,2) NOT NULL,
  `total_purchased` int(3) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `dept_code` varchar(100) NOT NULL,
  `dept_name` varchar(150) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `dept_code`, `dept_name`, `InActive`) VALUES
(1, 'MIS', 'Management Information System', 0),
(2, 'Front Desk', 'Front Desk', 0),
(3, 'asd2', 'asd23', 1),
(4, 'Cardiology', 'Cardiology', 0),
(5, 'Anaesthetics', 'Anaesthetics', 0),
(6, 'Assistants', 'Assistants', 1),
(7, 'sdf', 'sdf', 1),
(8, 'Casualty', 'Casualty', 0),
(9, 'Breast screenin', 'Breast screening', 0),
(10, 'Chaplaincy', 'Chaplaincy', 0),
(11, 'Intensive Care Unit (ICU)', 'Intensive Care Unit (ICU)', 0),
(12, 'Radiography', 'Radiography', 0),
(13, 'Discharge lounge', 'Discharge lounge', 0),
(14, 'Ear nose and throat (ENT)', 'Ear nose and throat (ENT)', 0),
(15, 'Elderly services department', 'Elderly services department', 0),
(16, 'Gastroenterology', 'Gastroenterology', 0),
(17, 'General surgery', 'General surgery', 0),
(18, 'Gynaecology', 'Gynaecology', 0),
(19, 'Maternity departments', 'Maternity departments', 0),
(20, 'Microbiology', 'Microbiology', 0),
(21, 'Neonatal unit', 'Neonatal unit', 0),
(22, 'Nephrology', 'Nephrology', 0),
(23, 'Neurology', 'Neurology', 0),
(24, 'Nutrition and dietetics', 'Nutrition and dietetics', 0),
(25, 'Obstetrics and gynaecology units', 'Obstetrics and gynaecology units', 0),
(26, 'Occupational therapy', 'Occupational therapy', 0),
(27, 'Oncology', 'Oncology', 0),
(28, 'Ophthalmology', 'Ophthalmology', 0),
(29, 'Orthopaedics', 'Orthopaedics', 0),
(30, 'Physiotherapy', 'Physiotherapy', 0),
(31, 'Radiotherapy', 'Radiotherapy', 0),
(32, 'Renal unit', 'Renal unit', 0),
(33, 'Rheumatology', 'Rheumatology', 0),
(34, 'Genitourinary Department', 'Sexual health (genitourinary medicine)', 0),
(35, 'Urology', 'Urology', 0),
(36, 'Dental Department', 'Dental Department', 0),
(37, 'a', 'a', 1),
(38, 'BILLING', 'BILLING', 0),
(39, 'IT DEPARTMENT', 'IT DEPARTMENT', 0),
(40, '101', 'spero', 0);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation`, `description`, `InActive`) VALUES
(1, 'System Administrator', 'System Administrator', 0),
(2, 'Coordinator', 'Coordinator', 0),
(4, 'Doctor', 'Doctor', 0),
(5, 'Nurse', 'Nurse', 0),
(6, 'Pharmacist', 'Pharmacist', 0),
(7, 'Pathologist', 'Pathologist', 0),
(8, 'CASHIER', 'CASHIER', 0),
(10, 'IT', 'IT', 0),
(11, 'Laboratory', 'Laboratory', 0),
(12, 'Physiotherapist', 'Physiotherapist', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `diagnosis_id` int(11) NOT NULL,
  `diagnosis_name` varchar(500) NOT NULL,
  `diagnosis_desc` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagnosis_id`, `diagnosis_name`, `diagnosis_desc`, `InActive`) VALUES
(1, 'ABNORMAL HEART RHYTHMS', 'Abnormal Heart Rhythms', 0),
(7, 'ASCITIES', 'Ascities', 0),
(6, 'APPENDICITIES', 'Appendicities', 0),
(8, 'ASTHMA', 'Asthma', 0),
(9, 'ASTIGMATISM', 'astigmatism', 0),
(11, 'DIARRHEA', 'diarrhea', 0),
(12, 'ACUTE PANCREATITIS', 'Acute pancreatitis', 0),
(13, 'ACUTE ENTRITIS', 'acute Entritis', 0),
(14, 'ARTHRITIS', 'arthritis', 0),
(15, 'AUTOIMMUNE DISEASES', 'autoimmune diseases', 0),
(16, 'BRAIN CANCER', 'brain cancer', 0),
(17, 'BREAST CANCER', 'breast cancer', 0),
(18, 'CANDIDIASIS', 'candidiasis', 0),
(20, 'COLD SORES', 'cold sores', 0),
(21, 'COLON CANCER', 'colon cancer', 0),
(22, 'CONSTIPATION', 'constipation', 0),
(23, 'FIBROMYALGIA', 'fibromyalgia', 0),
(25, 'FOOD POISONING', 'food poisoning', 0),
(26, 'GALLSTONES', 'Gallstones', 0),
(27, 'ALZHEIMER\'S DISEASE', 'alzheimer’s disease', 0),
(28, 'THYROID DISORDERS', 'thyroid disorders', 0),
(29, 'DEMENTIA', 'dementia', 0),
(30, 'STROKE', 'stroke', 0),
(31, 'HYPERTENSION', 'hypertension', 0),
(32, 'SLEEP DISORDERS', 'sleep disorders', 0),
(33, 'SEXUALLY TRANSMITTED DISEASES', 'sexually transmitted diseases', 0),
(34, 'SARS', 'SARS', 0),
(35, 'RAYNAUD\'S PHENOMENON', 'Raynaud\'s Phenomenon', 0),
(36, 'PROSTATE DISORDERS', 'prostate disorders', 0),
(37, 'PROSTATE CANCER', 'prostate cancer', 0),
(38, 'PREMENSTRUAL SYNDROME (PMS)', 'premenstrual syndrome (PMS)', 0),
(39, 'DIABETES', 'diabetes', 0),
(40, 'PERTUSSIS', 'pertussis', 0),
(41, 'PELVIC INFLAMMATORY DISEASE', 'pelvic inflammatory disease', 0),
(42, 'PARKINSON\'S DISEASE', 'Parkinson\'s disease', 0),
(45, 'OVARIAN CANCER', 'ovarian cancer', 0),
(46, 'OTITIS MEDIA (MIDDLE EAR INFECTION)', 'otitis media (middle ear infection)', 0),
(47, 'OSTEOPOROSIS', 'osteoporosis', 0),
(49, 'NON-HODGKIN\'S LYMPHOMA', 'Non-Hodgkin\'s lymphoma', 0),
(50, 'NARCOLEPSY', 'narcolepsy', 0),
(51, 'MUSCULAR DYSTROPHY', 'muscular dystrophy', 0),
(52, 'MULTIPLE SCLEROSIS', 'multiple sclerosis', 0),
(53, 'LUNG CANCER', 'lung cancer', 0),
(54, 'LIVER DISEASE', 'liver disease', 0),
(55, 'LIVER CANCER', 'liver cancer', 0),
(56, 'LEUKEMIA', 'leukemia', 0),
(58, 'KIDNEY DISEASE', 'kidney disease', 0),
(59, 'INSOMNIA', 'insomnia', 0),
(60, 'HODGKIN\'S DISEASE', 'Hodgkin\'s disease', 0),
(61, 'HIV', 'HIV', 0),
(63, 'HERPES', 'herpes', 0),
(64, 'HEPATITIS', 'hepatitis', 0),
(65, 'HEMOCHROMATOSIS', 'hemochromatosis', 0),
(69, 'OTHER', 'other', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors_fee`
--

CREATE TABLE `doctors_fee` (
  `doctorfeeID` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `invoice_no` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `completeDate` varchar(50) NOT NULL,
  `feeType` varchar(25) NOT NULL,
  `value` float(11,2) NOT NULL,
  `totalFee` float(11,2) NOT NULL,
  `notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctors_fee`
--

INSERT INTO `doctors_fee` (`doctorfeeID`, `user_id`, `invoice_no`, `date`, `completeDate`, `feeType`, `value`, `totalFee`, `notes`) VALUES
(1, '00007', 'SI-000036', '2015-11-14', '2015-11-14 09:25:54 pm', 'percentage', 100.00, 0.00, 'cccc'),
(2, '00017', 'SI-SSAL000015', '2022-01-11', '2022-01-11 01:35:16 pm', 'actual', 2500.00, 2500.00, 'abcd'),
(3, '00017', 'SI-SSAL000015', '2022-01-11', '2022-01-11 01:35:21 pm', 'actual', 2500.00, 2500.00, 'abcd'),
(4, '00016', 'SI-SSAL000019', '2023-04-18', '2023-04-18 09:04:01 am', 'actual', 1000.00, 1000.00, 'fees');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `floor_id` int(11) NOT NULL,
  `floor_name` varchar(25) NOT NULL,
  `floor_description` text NOT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`floor_id`, `floor_name`, `floor_description`, `InActive`) VALUES
(1, 'Ground Floor', 'Ground Floor', 0),
(2, '2nd Floor', '2nd Floor', 0),
(3, '3rd Floor', '3rd Floor', 0),
(4, '4th Floor', '4th Floor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_comp`
--

CREATE TABLE `insurance_comp` (
  `in_com_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `fax_no` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_no_person` varchar(100) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `insurance_comp`
--

INSERT INTO `insurance_comp` (`in_com_id`, `company_name`, `company_address`, `phone_no`, `fax_no`, `email_address`, `contact_person`, `contact_no_person`, `contact_email`, `notes`, `InActive`) VALUES
(5, 'Phil Health', '#0001 Street Salcedo Makati City', '02 456 8595', '', 'contactme@yahoo.com', 'Bobby Mendoza', '091234676454', 'bobby@yahoo.com', 'remarks of insurance company', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_bed_side_procedure`
--

CREATE TABLE `iop_bed_side_procedure` (
  `bed_pro_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) CHARACTER SET latin2 COLLATE latin2_general_ci NOT NULL,
  `category` varchar(255) NOT NULL,
  `bedside_service` varchar(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `notes` text NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_bed_side_procedure`
--

INSERT INTO `iop_bed_side_procedure` (`bed_pro_id`, `iop_id`, `dDate`, `dDateTime`, `category`, `bedside_service`, `qty`, `notes`, `cPreparedBy`, `InActive`) VALUES
(1, 'IP-SSAL000015', '2022-11-01', '2022-11-01 01:43:41 PM', '4', '4', 1, 'test', '00014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_billing`
--

CREATE TABLE `iop_billing` (
  `bill_id` int(11) NOT NULL,
  `receipt_no` varchar(25) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `patient_no` varchar(25) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `dDate` date NOT NULL,
  `discount` float(11,2) NOT NULL,
  `reason_discount` int(5) NOT NULL,
  `sub_total` float(11,2) NOT NULL,
  `total_amount` float(11,2) NOT NULL,
  `total_purchased` float(11,2) NOT NULL,
  `creditCardNo` int(11) NOT NULL,
  `creditCardHolder` int(11) NOT NULL,
  `insurance_company` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_billing_t`
--

CREATE TABLE `iop_billing_t` (
  `invoice_no` varchar(50) NOT NULL,
  `bill_name` varchar(900) NOT NULL,
  `qty` int(5) NOT NULL,
  `rate` float(11,2) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `note` text NOT NULL,
  `InActive` int(1) NOT NULL,
  `id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `isPackage` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_complaints`
--

CREATE TABLE `iop_complaints` (
  `iop_comp_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `complain_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `dDate` date NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_complaints`
--

INSERT INTO `iop_complaints` (`iop_comp_id`, `iop_id`, `complain_id`, `remarks`, `dDate`, `InActive`) VALUES
(1, 'IP-SSAL000014', 7, 'zdfxd', '2022-10-31', 0),
(2, 'IP-SSAL000015', 7, 'test', '2022-11-01', 0),
(3, 'IP-SSAL000016', 14, 'brethlessness', '2022-11-07', 0),
(4, 'IP-SSAL000016', 14, 'brethlessness', '2022-11-07', 0),
(5, 'IP-SSAL000018', 3, 'hghg', '2023-04-18', 0),
(6, 'IP-SSAL000022', 3, 'complaint', '2023-05-02', 0),
(7, 'IP-SSAL000023', 3, 'fgfgf', '2023-05-02', 0),
(8, 'IP-SSAL000029', 8, 'Cough since last night', '2023-06-06', 0),
(9, 'IP-SSAL000029', 19, '', '2023-06-07', 0),
(10, 'IP-SSAL000052', 33, 'since yesterday', '2023-07-01', 0),
(11, 'IP-SSAL000030', 6, 'pain due to fall in washroom', '2023-07-04', 0),
(12, 'IP-SSAL000049', 49, 'Insomnia from past few days', '2023-07-14', 0),
(13, 'IP-SSAL000030', 6, 'rem', '2023-09-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_diagnosis`
--

CREATE TABLE `iop_diagnosis` (
  `iop_diag_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `diagnosis_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `dDate` datetime NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_diagnosis`
--

INSERT INTO `iop_diagnosis` (`iop_diag_id`, `iop_id`, `diagnosis_id`, `remarks`, `dDate`, `InActive`) VALUES
(1, 'IP-SSAL000014', 12, 'jhgjhj', '2021-10-22 01:23:58', 1),
(2, 'IP-SSAL000014', 13, 'sdf', '2022-10-31 12:00:26', 0),
(3, 'IP-SSAL000014', 13, '00014', '2022-10-31 04:29:09', 0),
(4, 'IP-SSAL000015', 9, 'test', '2022-11-01 12:47:58', 0),
(5, 'IP-SSAL000015', 43, 'test', '2022-11-01 12:48:07', 0),
(6, 'IP-SSAL000016', 8, 'need pump', '2022-11-07 12:44:37', 0),
(7, 'IP-SSAL000017', 1, 'test', '2022-11-07 05:37:06', 0),
(8, 'IP-SSAL000014', 8, 'demo', '2023-04-18 03:30:04', 0),
(9, 'IP-SSAL000018', 8, 'demo', '2023-04-18 04:31:14', 0),
(10, 'IP-SSAL000020', 1, 'ggfg', '2023-04-20 05:28:48', 0),
(11, 'IP-SSAL000022', 1, 'disgnosis', '2023-05-02 09:20:13', 0),
(12, 'IP-SSAL000052', 8, '', '2023-07-01 02:31:00', 0),
(13, 'IP-SSAL000030', 69, '', '2023-07-04 12:32:44', 0),
(14, 'IP-SSAL000044', 42, '', '2023-07-04 02:49:57', 0),
(15, 'IP-SSAL000044', 22, '', '2023-07-04 02:55:24', 0),
(16, 'IP-SSAL000049', 69, '', '2023-07-14 12:56:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_discharge_summary`
--

CREATE TABLE `iop_discharge_summary` (
  `dis_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` datetime NOT NULL,
  `reason_admission` text NOT NULL,
  `condition_upon_discharge` int(11) NOT NULL,
  `admitting_impression` text NOT NULL,
  `final_diagnosis` text NOT NULL,
  `physical_exam_findings` text NOT NULL,
  `course_ward` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_discharge_summary`
--

INSERT INTO `iop_discharge_summary` (`dis_id`, `iop_id`, `dDate`, `dDateTime`, `reason_admission`, `condition_upon_discharge`, `admitting_impression`, `final_diagnosis`, `physical_exam_findings`, `course_ward`, `InActive`) VALUES
(6, 'IP-SSAL000014', '2022-10-31', '2022-10-31 04:39:50', 'test', 60, '00014', '00014', 'test', 'test', 0),
(7, 'IP-SSAL000015', '2022-11-01', '2022-11-01 01:45:46', 'test', 60, 'test', 'test', 'test', 'test', 0),
(9, 'IP-SSAL000018', '2023-04-20', '2023-04-20 05:45:51', 'demo', 61, 'demo', 'demo', 'demo', 'demo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_drug_chart`
--

CREATE TABLE `iop_drug_chart` (
  `drug_chart_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(100) NOT NULL,
  `drug` varchar(5000) NOT NULL,
  `morning` int(1) NOT NULL,
  `afternoon` int(1) NOT NULL,
  `night` int(1) NOT NULL,
  `cPreparedBy` varchar(255) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iop_drug_chart`
--

INSERT INTO `iop_drug_chart` (`drug_chart_id`, `iop_id`, `dDate`, `dDateTime`, `drug`, `morning`, `afternoon`, `night`, `cPreparedBy`, `InActive`) VALUES
(1, 'IP-SSAL000022', '2023-05-04', '2023-05-04 03:00 PM', 'delpar', 1, 1, 1, '00030', 0),
(2, 'IP-SSAL000026', '2023-05-11', '2023-05-11 12:00 PM', 'crosinm', 1, 0, 1, '00030', 0),
(3, 'IP-SSAL000029', '2023-05-31', '2023-05-31 04:00 PM', 'Crocin', 1, 1, 1, '00026', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_individual_care_plan`
--

CREATE TABLE `iop_individual_care_plan` (
  `ind_care_plan_id` int(11) NOT NULL,
  `iop_id` varchar(200) NOT NULL,
  `dDate` date DEFAULT NULL,
  `dDateTime` varchar(50) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `comorbid_cond` text DEFAULT NULL,
  `goal` text DEFAULT NULL,
  `plan_action` text DEFAULT NULL,
  `action_taken` text DEFAULT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(200) DEFAULT NULL,
  `review` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iop_individual_care_plan`
--

INSERT INTO `iop_individual_care_plan` (`ind_care_plan_id`, `iop_id`, `dDate`, `dDateTime`, `to_date`, `comorbid_cond`, `goal`, `plan_action`, `action_taken`, `InActive`, `cPreparedBy`, `review`) VALUES
(1, 'IP-SSAL000023', '2023-05-02', '2023-05-02 12:45 PM', NULL, 'comorbid condition1', 'goal', 'plan of action', 'action taken', 0, '00028', 'nice plan'),
(2, 'IP-SSAL000029', '2023-06-07', '2023-06-07 12:15 PM', NULL, 'Bedsore in minor scale', 'heal bedsore ', 'giving position giving at every 2 hrs', 'ok', 0, '00023', NULL),
(3, 'IP-SSAL000052', '2023-07-01', '2023-07-01 02:15 PM', '2023-07-01', 'Bedsore in minor scale', 'heal bedsore ', '', '', 0, '00027', NULL),
(4, 'IP-SSAL000057', '2023-07-07', '2023-07-07 06:00 PM', '2023-07-07', 'na', 'na', 'na', 'na', 0, '00028', NULL),
(5, 'IP-SSAL000030', '2023-07-11', '2023-07-11 01:00 PM', '2023-07-11', 'old age care', 'no accident of fall in washroom', '', 'proper attention while walking and going for washroom', 0, '00027', ''),
(6, 'IP-SSAL000049', '2023-07-14', '2023-07-14 12:30 PM', '2023-07-14', 'Hypertension,Dementia,Onst of Alzhimer,Anaemia,Dehydration', 'To maintain electrolyte balance,BP Haemoglobin', 'Monitoring electrolytes and BP', 'Electrolytes check on every 15 days, Medicines for HB and Electrolytes imbalance if needed', 0, '00027', ''),
(7, 'IP-SSAL000030', '2023-09-15', '2023-09-15 12:00 PM', '2023-09-15', 'fdf', 'fdfd', 'fdfd', 'fd', 0, '00028', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iop_intake_record`
--

CREATE TABLE `iop_intake_record` (
  `intake_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `particulars` varchar(500) NOT NULL,
  `IV_fluids` varchar(25) NOT NULL,
  `oral` varchar(25) NOT NULL,
  `no_stool` varchar(25) NOT NULL,
  `no_urine` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) NOT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_intake_record`
--

INSERT INTO `iop_intake_record` (`intake_id`, `iop_id`, `particulars`, `IV_fluids`, `oral`, `no_stool`, `no_urine`, `dDate`, `dDateTime`, `InActive`, `cPreparedBy`) VALUES
(1, 'IP-SSAL000014', '{\"1\":{\"date\":[\"2022-10-31T12:01\"],\"uop\":[\"sd\"],\"motion\":[\"sd\"],\"fiwi\":[\"\"],\"mobi\":[\"\"]}}', '', '', '', '', '2022-10-31', '2022-10-31 12:01:28 PM ', 0, '00014'),
(2, 'IP-SSAL000015', '{\"1\":{\"date\":[\"2022-11-01T14:51\"],\"uop\":[\"4\"],\"motion\":[\"4\"],\"fiwi\":[\"4\"],\"mobi\":[\"4\"]}}', '', '', '', '', '2022-11-01', '2022-11-01 12:50:06 PM ', 0, '00014'),
(3, 'IP-SSAL000015', 'test', '3', '3', '0', '0', '2022-11-07', '2022-11-07 12:00 PM', 0, '00008'),
(4, 'IP-SSAL000016', '{\"1\":{\"date\":[\"2022-11-07T12:47\"],\"uop\":[\"100\"],\"motion\":[\"100\"],\"fiwi\":[\"150\"],\"mobi\":[\"1\"]}}', '', '', '', '', '2022-11-07', '2022-11-07 12:47:43 PM ', 0, '00014'),
(5, 'IP-SSAL000016', 'ghg', '100ml', '20ml', '1', '1', '2023-04-17', '2023-04-17 09:00 PM', 0, '00002'),
(6, 'IP-SSAL000020', '{\"1\":{\"date\":[\"2023-04-20T17:37\"],\"uop\":[\"22\"],\"motion\":[\"22\"],\"fiwi\":[\"70\"],\"mobi\":[\"90\"]}}', '', '', '', '', '2023-04-20', '2023-04-20 05:37:37 PM ', 0, '00014'),
(7, 'IP-SSAL000018', '{\"1\":{\"date\":[\"2023-04-20T17:46\"],\"uop\":[\"22\"],\"motion\":[\"22\"],\"fiwi\":[\"70\"],\"mobi\":[\"90\"]}}', '', '', '', '', '2023-04-20', '2023-04-20 05:46:59 PM ', 0, '00014'),
(8, 'IP-SSAL000021', '{\"1\":{\"date\":[\"2023-04-20T21:23\"],\"uop\":[\"22\"],\"motion\":[\"22\"],\"fiwi\":[\"70\"],\"mobi\":[\"90\"]}}', '', '', '', '', '2023-04-20', '2023-04-20 09:24:08 PM ', 0, '00014'),
(9, 'IP-SSAL000023', 'fdf', 'demo', '20ml', '1', '1', '2023-05-02', '2023-05-02 12:30 PM', 0, '00023'),
(10, 'IP-SSAL000029', 'Dexa', '100 ml', 'juice 100 ml', '0', '0', '2023-05-31', '2023-05-31 03:45 PM', 0, '00026'),
(11, 'IP-SSAL000052', 'Dexa', '20Ml', 'juice 100 ml', '', '', '2023-07-01', '2023-07-01 02:30 PM', 0, '00026'),
(12, 'IP-SSAL000052', 'NS', '50Ml', 'NA', '', '', '2023-07-01', '2023-07-01 02:30 PM', 0, '00026'),
(13, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-01', '2023-07-01 04:15 PM', 0, '00032'),
(14, 'IP-SSAL000046', 'Food', 'Na', 'Breakfast,lunch,', '', '', '2023-07-01', '2023-07-01 04:15 PM', 0, '00033'),
(15, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-01', '2023-07-01 04:30 PM', 0, '00032'),
(16, 'IP-SSAL000047', 'Breakfast,lunch', 'Na', 'Food', '', '', '2023-07-01', '2023-07-01 04:30 PM', 1, '00033'),
(17, 'IP-SSAL000047', 'Breakfast,lunch', 'Na', 'Food', '', '', '2023-07-01', '2023-07-01 04:30 PM', 0, '00033'),
(18, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-01', '2023-07-01 04:30 PM', 0, '00032'),
(19, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-01', '2023-07-01 04:30 PM', 0, '00032'),
(20, 'IP-SSAL000050', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-01', '2023-07-01 04:45 PM', 0, '00033'),
(21, 'IP-SSAL000044', 'Apple juice ', 'Nil', 'Feed', '', '', '2023-07-01', '2023-07-01 04:45 PM', 0, '00032'),
(22, 'IP-SSAL000048', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-01', '2023-07-01 04:45 PM', 0, '00033'),
(23, 'IP-SSAL000051', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-01', '2023-07-01 05:00 PM', 0, '00033'),
(24, 'IP-SSAL000049', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-01', '2023-07-01 05:00 PM', 0, '00033'),
(25, 'IP-SSAL000044', '120 ml water and Ensure ', 'Nil', 'Feed', '', '', '2023-07-02', '2023-07-02 09:15 AM', 0, '00032'),
(26, 'IP-SSAL000046', 'Breakfast,lunch', 'na', 'na', '', '', '2023-07-02', '2023-07-02 10:15 PM', 0, '00033'),
(27, 'IP-SSAL000049', 'Breakfast,lunch', 'na', 'na', '', '', '2023-07-02', '2023-07-02 10:30 PM', 0, '00033'),
(28, 'IP-SSAL000051', 'Breakfast,lunch', 'na', 'na', '', '', '2023-07-02', '2023-07-02 10:30 PM', 0, '00033'),
(29, 'IP-SSAL000048', 'Breakfast,lunch', 'na', 'na', '', '', '2023-07-02', '2023-07-02 10:45 PM', 0, '00033'),
(30, 'IP-SSAL000047', 'Breakfast,lunch', 'na', 'na', '', '', '2023-07-02', '2023-07-02 10:45 PM', 0, '00033'),
(31, 'IP-SSAL000050', 'Breakfast,lunch', 'na', 'na', '', '', '2023-07-02', '2023-07-02 11:00 PM', 0, '00033'),
(32, 'IP-SSAL000044', 'papita juice', 'na', 'feed', '', '', '2023-07-02', '2023-07-02 11:15 PM', 0, '00033'),
(33, 'IP-SSAL000041', 'Breakfast,lunch', 'na', 'food', '', '', '2023-07-02', '2023-07-02 11:15 PM', 0, '00033'),
(34, 'IP-SSAL000042', 'Breakfast,lunch', 'na', 'food', '', '', '2023-07-02', '2023-07-02 11:15 PM', 0, '00033'),
(35, 'IP-SSAL000043', 'Breakfast,lunch', 'na', 'food', '', '', '2023-07-02', '2023-07-02 11:15 PM', 0, '00033'),
(36, 'IP-SSAL000045', 'Breakfast,lunch', 'na', 'food', '', '', '2023-07-02', '2023-07-02 11:15 PM', 0, '00033'),
(37, 'IP-SSAL000044', 'Banana juice ', 'Nil', 'Feed', '', '', '2023-07-02', '2023-07-02 03:45 PM', 0, '00032'),
(38, 'IP-SSAL000044', 'Banana juice ', 'Nil', 'Feed', '', '', '2023-07-02', '2023-07-02 05:30 PM', 0, '00032'),
(39, 'IP-SSAL000044', '120 ml water and Ensure ', 'Nil', 'Feed', '', '', '2023-07-02', '2023-07-02 07:30 PM', 0, '00032'),
(40, 'IP-SSAL000049', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 09:30 AM', 0, '00032'),
(41, 'IP-SSAL000047', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 09:30 AM', 0, '00032'),
(42, 'IP-SSAL000046', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 09:30 AM', 0, '00032'),
(43, 'IP-SSAL000051', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 11:30 AM', 0, '00032'),
(44, 'IP-SSAL000050', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 11:45 AM', 0, '00032'),
(45, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 11:45 AM', 0, '00032'),
(46, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 11:45 AM', 0, '00032'),
(47, 'IP-SSAL000044', 'Papita juice ', 'Nil', 'Feed', '', '', '2023-07-03', '2023-07-03 11:45 AM', 0, '00032'),
(48, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 11:45 AM', 0, '00032'),
(49, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-03', '2023-07-03 12:00 PM', 0, '00032'),
(50, 'IP-SSAL000034', 'Breakfast,lunch', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:15 PM', 0, '00033'),
(51, 'IP-SSAL000036', 'Breakfast,lunch', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:15 PM', 0, '00033'),
(52, 'IP-SSAL000032', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:30 PM', 0, '00033'),
(53, 'IP-SSAL000031', 'Breakfast,lunch', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:30 PM', 0, '00033'),
(54, 'IP-SSAL000037', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:45 PM', 0, '00033'),
(55, 'IP-SSAL000040', 'Breakfast,lunch', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:45 PM', 0, '00033'),
(56, 'IP-SSAL000039', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 01:45 PM', 0, '00033'),
(57, 'IP-SSAL000035', 'Breakfast,lunch', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 02:00 PM', 0, '00033'),
(58, 'IP-SSAL000033', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 02:00 PM', 0, '00033'),
(59, 'IP-SSAL000038', 'Breakfast,lunch', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 02:00 PM', 0, '00033'),
(60, 'IP-SSAL000044', '120 ml water and dal,rice', 'Nil', 'Feed', '', '', '2023-07-03', '2023-07-03 02:00 PM', 0, '00032'),
(61, 'IP-SSAL000030', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-03', '2023-07-03 02:00 PM', 0, '00033'),
(62, 'IP-SSAL000052', 'Evvening snacs (vada)', 'NA', 'juice 100 ml', '', '', '2023-07-03', '2023-07-03 04:30 PM', 0, '00025'),
(63, 'IP-SSAL000052', 'lunch', 'na', 'juice', '', '', '2023-07-03', '2023-07-03 02:45 PM', 0, '00025'),
(64, 'IP-SSAL000030', 'Full diet ', '.', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:30 PM', 0, '00025'),
(65, 'IP-SSAL000030', 'Full diet ', '.', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:30 PM', 1, '00025'),
(66, 'IP-SSAL000031', 'Full diet ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:30 PM', 0, '00025'),
(67, 'IP-SSAL000031', 'Full diet ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:30 PM', 1, '00025'),
(68, 'IP-SSAL000042', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 09:30 PM', 1, '00035'),
(69, 'IP-SSAL000032', 'Full diet ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 1, '00025'),
(70, 'IP-SSAL000032', 'Full diet ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 0, '00025'),
(71, 'IP-SSAL000032', 'Full diet ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 1, '00025'),
(72, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 0, '00025'),
(73, 'IP-SSAL000044', 'Full deit', 'Na', 'No', '', '', '2023-07-03', '2023-07-03 09:45 PM', 0, '00035'),
(74, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 1, '00025'),
(75, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 0, '00025'),
(76, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 09:45 PM', 1, '00025'),
(77, 'IP-SSAL000044', 'Full deit', 'Na', 'Feed', '', '', '2023-07-03', '2023-07-03 09:45 PM', 0, '00035'),
(78, 'IP-SSAL000042', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:00 PM', 0, '00035'),
(79, 'IP-SSAL000042', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:00 PM', 1, '00035'),
(80, 'IP-SSAL000042', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:00 PM', 1, '00035'),
(81, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 10:00 PM', 1, '00025'),
(82, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 10:00 PM', 0, '00025'),
(83, 'IP-SSAL000036', 'Normal dinner ', 'NA', '100', '', '', '2023-07-03', '2023-07-03 10:00 PM', 0, '00025'),
(84, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 10:15 PM', 0, '00025'),
(85, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 10:15 PM', 0, '00025'),
(86, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 10:15 PM', 1, '00025'),
(87, 'IP-SSAL000043', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:15 PM', 0, '00035'),
(88, 'IP-SSAL000041', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:15 PM', 0, '00035'),
(89, 'IP-SSAL000045', 'Full deit', 'Na', '150ml water  and milk', '', '', '2023-07-03', '2023-07-03 10:15 PM', 0, '00035'),
(90, 'IP-SSAL000050', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:15 PM', 0, '00035'),
(91, 'IP-SSAL000048', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:30 PM', 0, '00035'),
(92, 'IP-SSAL000049', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:30 PM', 0, '00035'),
(93, 'IP-SSAL000047', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:30 PM', 0, '00035'),
(94, 'IP-SSAL000047', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:30 PM', 1, '00035'),
(95, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-03', '2023-07-03 10:45 PM', 0, '00025'),
(96, 'IP-SSAL000046', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:45 PM', 0, '00035'),
(97, 'IP-SSAL000051', 'Full deit', 'Na', '150ml water', '', '', '2023-07-03', '2023-07-03 10:45 PM', 0, '00035'),
(98, 'IP-SSAL000038', 'Normal dinner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 12:45 AM', 0, '00025'),
(99, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(100, 'IP-SSAL000031', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(101, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(102, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(103, 'IP-SSAL000034', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(104, 'IP-SSAL000035', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(105, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(106, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 12:45 PM', 0, '00032'),
(107, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 01:00 PM', 0, '00032'),
(108, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 01:00 PM', 0, '00032'),
(109, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-04', '2023-07-04 01:00 PM', 0, '00032'),
(110, 'IP-SSAL000048', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-04', '2023-07-04 06:45 PM', 0, '00033'),
(111, 'IP-SSAL000048', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-04', '2023-07-04 06:45 PM', 0, '00033'),
(112, 'IP-SSAL000050', 'Breakfast, lunch ', 'Na', 'Na', '', '', '2023-07-04', '2023-07-04 07:00 PM', 0, '00033'),
(113, 'IP-SSAL000051', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-04', '2023-07-04 07:00 PM', 0, '00033'),
(114, 'IP-SSAL000054', 'Breakfast,lunch', 'Na', 'Water', '', '', '2023-07-04', '2023-07-04 07:15 PM', 0, '00033'),
(115, 'IP-SSAL000046', 'Breakfast,lunch', 'Na', 'Water', '', '', '2023-07-04', '2023-07-04 07:15 PM', 0, '00033'),
(116, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:15 PM', 1, '00025'),
(117, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00025'),
(118, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00025'),
(119, 'IP-SSAL000055', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00035'),
(120, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00025'),
(121, 'IP-SSAL000043', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:15 PM', 1, '00035'),
(122, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00025'),
(123, 'IP-SSAL000041', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00035'),
(124, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:15 PM', 0, '00025'),
(125, 'IP-SSAL000036', 'Normal dinner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00025'),
(126, 'IP-SSAL000036', 'Normal dinner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00025'),
(127, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00025'),
(128, 'IP-SSAL000042', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00035'),
(129, 'IP-SSAL000038', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00025'),
(130, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00025'),
(131, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-04', '2023-07-04 10:30 PM', 0, '00025'),
(132, 'IP-SSAL000045', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:45 PM', 0, '00035'),
(133, 'IP-SSAL000046', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:45 PM', 0, '00035'),
(134, 'IP-SSAL000054', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:45 PM', 0, '00035'),
(135, 'IP-SSAL000051', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:45 PM', 0, '00035'),
(136, 'IP-SSAL000047', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:45 PM', 0, '00035'),
(137, 'IP-SSAL000050', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 10:45 PM', 0, '00035'),
(138, 'IP-SSAL000049', 'Full deit', 'Na', '150ml water', '', '', '2023-07-04', '2023-07-04 11:00 PM', 0, '00035'),
(139, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 09:45 AM', 0, '00032'),
(140, 'IP-SSAL000031', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 09:45 AM', 0, '00032'),
(141, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:00 AM', 0, '00032'),
(142, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:00 AM', 0, '00032'),
(143, 'IP-SSAL000034', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:00 AM', 0, '00032'),
(144, 'IP-SSAL000035', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:00 AM', 0, '00032'),
(145, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:00 AM', 0, '00032'),
(146, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:15 AM', 0, '00032'),
(147, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:15 AM', 0, '00032'),
(148, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:15 AM', 0, '00032'),
(149, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-05', '2023-07-05 10:15 AM', 0, '00032'),
(150, 'IP-SSAL000055', '3', 'Na', 'Na', '', '', '2023-07-05', '2023-07-05 11:30 AM', 1, '00033'),
(151, 'IP-SSAL000055', 'Breakfast,lunch', 'Na', 'Water,milk', '', '', '2023-07-05', '2023-07-05 11:30 AM', 0, '00033'),
(152, 'IP-SSAL000043', 'Breakfast, lunch ', 'Na', 'Water,milk', '', '', '2023-07-05', '2023-07-05 11:30 AM', 0, '00033'),
(153, 'IP-SSAL000041', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 11:45 AM', 0, '00033'),
(154, 'IP-SSAL000042', 'Breakfast, lunch ', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 11:45 AM', 0, '00033'),
(155, 'IP-SSAL000045', 'Breakfast,lunch', 'Na', 'Water', '', '', '2023-07-05', '2023-07-05 11:45 AM', 0, '00033'),
(156, 'IP-SSAL000049', 'Breakfast, lunch ', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 11:45 AM', 0, '00033'),
(157, 'IP-SSAL000051', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 12:00 PM', 0, '00033'),
(158, 'IP-SSAL000046', 'Breakfast, lunch ', 'Na', 'Water', '', '', '2023-07-05', '2023-07-05 12:00 PM', 0, '00033'),
(159, 'IP-SSAL000054', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 12:00 PM', 0, '00033'),
(160, 'IP-SSAL000047', 'Breakfast, lunch ', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 12:00 PM', 0, '00033'),
(161, 'IP-SSAL000050', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 12:00 PM', 0, '00033'),
(162, 'IP-SSAL000056', 'Breakfast, lunch ', 'Na', 'Water ', '', '', '2023-07-05', '2023-07-05 03:45 PM', 0, '00033'),
(163, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:15 PM', 1, '00025'),
(164, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:15 PM', 1, '00025'),
(165, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:30 PM', 0, '00025'),
(166, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:30 PM', 0, '00025'),
(167, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:30 PM', 0, '00025'),
(168, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(169, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(170, 'IP-SSAL000036', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(171, 'IP-SSAL000036', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(172, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(173, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(174, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(175, 'IP-SSAL000038', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(176, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(177, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 09:45 PM', 0, '00025'),
(178, 'IP-SSAL000041', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(179, 'IP-SSAL000042', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(180, 'IP-SSAL000042', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(181, 'IP-SSAL000043', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(182, 'IP-SSAL000043', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(183, 'IP-SSAL000045', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(184, 'IP-SSAL000045', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(185, 'IP-SSAL000045', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(186, 'IP-SSAL000046', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(187, 'IP-SSAL000047', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(188, 'IP-SSAL000047', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(189, 'IP-SSAL000049', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:00 PM', 0, '00025'),
(190, 'IP-SSAL000050', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(191, 'IP-SSAL000051', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(192, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(193, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(194, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(195, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(196, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(197, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(198, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(199, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(200, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(201, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(202, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(203, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(204, 'IP-SSAL000054', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(205, 'IP-SSAL000055', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(206, 'IP-SSAL000055', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(207, 'IP-SSAL000055', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(208, 'IP-SSAL000055', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(209, 'IP-SSAL000055', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(210, 'IP-SSAL000055', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(211, 'IP-SSAL000056', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(212, 'IP-SSAL000056', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(213, 'IP-SSAL000056', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(214, 'IP-SSAL000056', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-05', '2023-07-05 10:15 PM', 0, '00025'),
(215, 'IP-SSAL000039', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:15 PM', 0, '00035'),
(216, 'IP-SSAL000038', 'Breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:15 PM', 0, '00035'),
(217, 'IP-SSAL000030', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-06', '2023-07-06 03:15 PM', 0, '00035'),
(218, 'IP-SSAL000030', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:15 PM', 0, '00035'),
(219, 'IP-SSAL000040', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:30 PM', 0, '00035'),
(220, 'IP-SSAL000031', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-06', '2023-07-06 03:30 PM', 0, '00035'),
(221, 'IP-SSAL000032', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:30 PM', 0, '00035'),
(222, 'IP-SSAL000033', ' breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:30 PM', 0, '00035'),
(223, 'IP-SSAL000034', 'Breakfast and lunch', 'Na', '150ml water  and milk', '', '', '2023-07-06', '2023-07-06 03:30 PM', 0, '00035'),
(224, 'IP-SSAL000035', ' breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:45 PM', 0, '00035'),
(225, 'IP-SSAL000036', 'Breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-06', '2023-07-06 03:45 PM', 0, '00035'),
(226, 'IP-SSAL000055', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(227, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(228, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(229, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(230, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(231, 'IP-SSAL000044', '120 ml water and Ensure ', 'Nil', 'Feed', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(232, 'IP-SSAL000046', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-06', '2023-07-06 04:00 PM', 0, '00032'),
(233, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:00 PM', 1, '00025'),
(234, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:00 PM', 0, '00025'),
(235, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:00 PM', 0, '00025'),
(236, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(237, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(238, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(239, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(240, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(241, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(242, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-06', '2023-07-06 11:15 PM', 0, '00025'),
(243, 'IP-SSAL000044', '120 ml water and Ensure ', 'Nil', 'Feed', '', '', '2023-07-07', '2023-07-07 11:45 AM', 0, '00032'),
(244, 'IP-SSAL000044', 'Apple juice ', 'Nil', 'Feed', '', '', '2023-07-07', '2023-07-07 11:45 AM', 0, '00032'),
(245, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:15 PM', 0, '00032'),
(246, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(247, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(248, 'IP-SSAL000055', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(249, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(250, 'IP-SSAL000056', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(251, 'IP-SSAL000050', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(252, 'IP-SSAL000049', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(253, 'IP-SSAL000047', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:30 PM', 0, '00032'),
(254, 'IP-SSAL000051', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00032'),
(255, 'IP-SSAL000036', ' breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(256, 'IP-SSAL000034', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(257, 'IP-SSAL000035', 'Full deit', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(258, 'IP-SSAL000033', 'Breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(259, 'IP-SSAL000037', 'Full deit', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(260, 'IP-SSAL000032', 'Full deit', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(261, 'IP-SSAL000031', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(262, 'IP-SSAL000040', 'Regular breakfast and lunch', 'Na', '150ml water  ', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(263, 'IP-SSAL000038', 'Full deit', 'Na', '150ml water  ', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(264, 'IP-SSAL000039', 'Full deit', 'Na', '150ml water', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00035'),
(265, 'IP-SSAL000054', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 12:45 PM', 0, '00032'),
(266, 'IP-SSAL000046', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-07', '2023-07-07 01:00 PM', 0, '00032'),
(267, 'IP-SSAL000044', '120 ml water and dal,rice', 'Nil', 'Feed', '', '', '2023-07-07', '2023-07-07 02:45 PM', 0, '00032'),
(268, 'IP-SSAL000044', 'Papita juice ', 'Nil', 'Feed', '', '', '2023-07-07', '2023-07-07 07:30 PM', 0, '00032'),
(269, 'IP-SSAL000044', 'Banana juice ', 'Nil', 'Feed', '', '', '2023-07-07', '2023-07-07 07:30 PM', 0, '00032'),
(270, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:15 PM', 1, '00025'),
(271, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:15 PM', 0, '00025'),
(272, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:15 PM', 0, '00025'),
(273, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:15 PM', 0, '00025'),
(274, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:15 PM', 0, '00025'),
(275, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:15 PM', 0, '00025'),
(276, 'IP-SSAL000036', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:30 PM', 0, '00025'),
(277, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:30 PM', 0, '00025'),
(278, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:30 PM', 0, '00025'),
(279, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:30 PM', 0, '00025'),
(280, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:30 PM', 0, '00025'),
(281, 'IP-SSAL000038', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-07', '2023-07-07 09:45 PM', 0, '00025'),
(282, 'IP-SSAL000043', 'Breakfast,lunch', 'Na', 'Water ,milk', '', '', '2023-07-07', '2023-07-07 11:45 PM', 0, '00033'),
(283, 'IP-SSAL000042', 'Breakfast, lunch ', 'Na', 'Water ', '', '', '2023-07-07', '2023-07-07 11:45 PM', 0, '00033'),
(284, 'IP-SSAL000041', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-07', '2023-07-07 11:45 PM', 0, '00033'),
(285, 'IP-SSAL000055', 'Breakfast,lunch', 'Na', 'Water , milk ', '', '', '2023-07-08', '2023-07-08 12:00 AM', 0, '00033'),
(286, 'IP-SSAL000045', 'Breakfast,lunch', 'Na', 'Water ,milk', '', '', '2023-07-08', '2023-07-08 12:00 AM', 0, '00033'),
(287, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water', '', '', '2023-07-08', '2023-07-08 12:00 AM', 0, '00033'),
(288, 'IP-SSAL000050', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:00 AM', 0, '00033'),
(289, 'IP-SSAL000047', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:15 AM', 0, '00033'),
(290, 'IP-SSAL000049', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:15 AM', 0, '00033'),
(291, 'IP-SSAL000049', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:15 AM', 0, '00033'),
(292, 'IP-SSAL000056', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:15 AM', 0, '00033'),
(293, 'IP-SSAL000046', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:15 AM', 0, '00033'),
(294, 'IP-SSAL000054', 'Breakfast,lunch', 'Na', 'Water , milk ', '', '', '2023-07-08', '2023-07-08 12:15 AM', 0, '00033'),
(295, 'IP-SSAL000051', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 12:30 AM', 0, '00033'),
(296, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 08:45 AM', 0, '00035'),
(297, 'IP-SSAL000035', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(298, 'IP-SSAL000034', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(299, 'IP-SSAL000033', 'Breakfast  upama', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(300, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(301, 'IP-SSAL000032', 'Breakfast  upama', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(302, 'IP-SSAL000031', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(303, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(304, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(305, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 09:00 AM', 0, '00035'),
(306, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-08', '2023-07-08 01:00 PM', 0, '00032'),
(307, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00032'),
(308, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00032'),
(309, 'IP-SSAL000055', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00032'),
(310, 'IP-SSAL000036', 'Normal deit', 'Na', '150ml water ors', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(311, 'IP-SSAL000034', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(312, 'IP-SSAL000035', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(313, 'IP-SSAL000035', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(314, 'IP-SSAL000044', '120 ml water and milk', 'Nil', 'Feed', '', '', '2023-07-08', '2023-07-08 08:45 AM', 0, '00032'),
(315, 'IP-SSAL000044', 'Banana juice ', 'Nil', 'Feed', '', '', '2023-07-08', '2023-07-08 11:45 AM', 0, '00032'),
(316, 'IP-SSAL000033', 'Lunch', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(317, 'IP-SSAL000037', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(318, 'IP-SSAL000032', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(319, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00032'),
(320, 'IP-SSAL000031', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(321, 'IP-SSAL000040', 'Full deit', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(322, 'IP-SSAL000038', 'Lunch', 'Na', '150ml water', '', '', '2023-07-08', '2023-07-08 01:15 PM', 0, '00035'),
(323, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:30 PM', 1, '00025'),
(324, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:30 PM', 0, '00025'),
(325, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:30 PM', 0, '00025'),
(326, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:30 PM', 0, '00025'),
(327, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:30 PM', 0, '00025'),
(328, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:30 PM', 0, '00025'),
(329, 'IP-SSAL000036', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:45 PM', 0, '00025'),
(330, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:45 PM', 0, '00025'),
(331, 'IP-SSAL000038', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:45 PM', 0, '00025'),
(332, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:45 PM', 0, '00025'),
(333, 'IP-SSAL000046', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-08', '2023-07-08 09:45 PM', 0, '00025'),
(334, 'IP-SSAL000045', 'Breakfast,lunch', 'Na', 'Water, milk ', '', '', '2023-07-08', '2023-07-08 10:30 PM', 0, '00033'),
(335, 'IP-SSAL000042', 'Breakfast,lunch', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 10:30 PM', 0, '00033'),
(336, 'IP-SSAL000043', 'Breakfast,lunch', 'Na', 'Water , milk ', '', '', '2023-07-08', '2023-07-08 10:30 PM', 0, '00033'),
(337, 'IP-SSAL000055', 'Breakfast,lunch', 'Na', 'Water , milk ', '', '', '2023-07-08', '2023-07-08 10:30 PM', 0, '00033'),
(338, 'IP-SSAL000041', 'Breakfast,lunch', 'Na', 'Water', '', '', '2023-07-08', '2023-07-08 10:45 PM', 0, '00033'),
(339, 'IP-SSAL000044', 'Ensure+120ml water ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 10:45 PM', 0, '00033'),
(340, 'IP-SSAL000056', 'Full diet ', 'Na', 'Water , milk ', '', '', '2023-07-08', '2023-07-08 10:45 PM', 0, '00033'),
(341, 'IP-SSAL000051', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 10:45 PM', 0, '00033'),
(342, 'IP-SSAL000054', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 10:45 PM', 0, '00033'),
(343, 'IP-SSAL000046', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 10:45 PM', 0, '00033'),
(344, 'IP-SSAL000049', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 11:00 PM', 0, '00033'),
(345, 'IP-SSAL000050', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 11:00 PM', 0, '00033'),
(346, 'IP-SSAL000047', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-08', '2023-07-08 11:00 PM', 0, '00033'),
(347, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 09:30 AM', 0, '00035'),
(348, 'IP-SSAL000034', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00035'),
(349, 'IP-SSAL000035', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00035'),
(350, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00035'),
(351, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00035'),
(352, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00035'),
(353, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00035'),
(354, 'IP-SSAL000031', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 10:00 AM', 0, '00035'),
(355, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 10:00 AM', 0, '00035'),
(356, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 10:00 AM', 0, '00035'),
(357, 'IP-SSAL000036', 'Full deit', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:00 PM', 0, '00035'),
(358, 'IP-SSAL000035', 'Full deit', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:00 PM', 0, '00035'),
(359, 'IP-SSAL000034', 'Full deit', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:00 PM', 0, '00035'),
(360, 'IP-SSAL000033', 'Lunch', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:00 PM', 0, '00035'),
(361, 'IP-SSAL000037', 'Lunch', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:15 PM', 0, '00035'),
(362, 'IP-SSAL000032', 'Lunch', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:15 PM', 0, '00035'),
(363, 'IP-SSAL000038', 'Full deit', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:15 PM', 0, '00035'),
(364, 'IP-SSAL000040', 'Lunch', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:15 PM', 0, '00035'),
(365, 'IP-SSAL000031', 'Full deit', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 01:15 PM', 0, '00035'),
(366, 'IP-SSAL000039', 'Lunch', 'Na', '150ml water', '', '', '2023-07-09', '2023-07-09 02:15 PM', 0, '00035'),
(367, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:00 PM', 0, '00032'),
(368, 'IP-SSAL000044', '120 ml water and milk', 'Nil', 'Feed', '', '', '2023-07-09', '2023-07-09 03:00 PM', 1, '00032'),
(369, 'IP-SSAL000044', '120 ml water and milk', 'Nil', 'Feed', '', '', '2023-07-09', '2023-07-09 08:45 AM', 1, '00032'),
(370, 'IP-SSAL000044', '120 ml water and milk', 'Nil', 'Feed', '', '', '2023-07-09', '2023-07-09 09:45 AM', 0, '00032'),
(371, 'IP-SSAL000044', 'Papita juice ', 'Nil', 'Feed', '', '', '2023-07-09', '2023-07-09 11:45 AM', 0, '00032'),
(372, 'IP-SSAL000044', '120 ml water and dal,rice', 'Nil', 'Feed', '', '', '2023-07-09', '2023-07-09 02:00 PM', 0, '00032'),
(373, 'IP-SSAL000055', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:15 PM', 0, '00032'),
(374, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:15 PM', 0, '00032'),
(375, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:15 PM', 0, '00032'),
(376, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:15 PM', 0, '00032'),
(377, 'IP-SSAL000051', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:15 PM', 0, '00032'),
(378, 'IP-SSAL000050', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:30 PM', 0, '00032'),
(379, 'IP-SSAL000049', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:30 PM', 0, '00032'),
(380, 'IP-SSAL000047', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:30 PM', 0, '00032'),
(381, 'IP-SSAL000046', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:30 PM', 0, '00032'),
(382, 'IP-SSAL000056', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-09', '2023-07-09 03:30 PM', 0, '00032'),
(383, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:15 PM', 1, '00025'),
(384, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:15 PM', 0, '00025'),
(385, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:15 PM', 0, '00025'),
(386, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:15 PM', 0, '00025'),
(387, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:30 PM', 0, '00025'),
(388, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:30 PM', 0, '00025'),
(389, 'IP-SSAL000036', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:30 PM', 0, '00025'),
(390, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:30 PM', 0, '00025'),
(391, 'IP-SSAL000038', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:30 PM', 0, '00025'),
(392, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:30 PM', 0, '00025'),
(393, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-09', '2023-07-09 09:45 PM', 0, '00025'),
(394, 'IP-SSAL000051', 'Full diet ', 'Na', '1100', '', '', '2023-07-09', '2023-07-09 11:00 PM', 1, '00033'),
(395, 'IP-SSAL000051', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:00 PM', 0, '00033'),
(396, 'IP-SSAL000050', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:00 PM', 0, '00033'),
(397, 'IP-SSAL000050', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:00 PM', 0, '00033'),
(398, 'IP-SSAL000049', 'Full diet ', 'Na', 'Water', '', '', '2023-07-09', '2023-07-09 11:00 PM', 0, '00033'),
(399, 'IP-SSAL000056', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:00 PM', 0, '00033'),
(400, 'IP-SSAL000046', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:15 PM', 0, '00033'),
(401, 'IP-SSAL000047', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:15 PM', 0, '00033'),
(402, 'IP-SSAL000045', 'Full diet ', 'Na', 'Water , milk ', '', '', '2023-07-09', '2023-07-09 11:15 PM', 0, '00033'),
(403, 'IP-SSAL000045', 'Full diet ', 'Na', 'Water , milk ', '', '', '2023-07-09', '2023-07-09 11:15 PM', 0, '00033'),
(404, 'IP-SSAL000055', 'Full diet ', 'Na', 'Water', '', '', '2023-07-09', '2023-07-09 11:30 PM', 0, '00033'),
(405, 'IP-SSAL000042', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:30 PM', 0, '00033'),
(406, 'IP-SSAL000041', 'Full diet ', 'Na', 'Water', '', '', '2023-07-09', '2023-07-09 11:30 PM', 0, '00033'),
(407, 'IP-SSAL000044', 'Ensure+120ml,water ', 'Na', 'Water ', '', '', '2023-07-09', '2023-07-09 11:30 PM', 0, '00033'),
(408, 'IP-SSAL000036', 'Breakfast   daliya', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 09:15 AM', 0, '00035'),
(409, 'IP-SSAL000034', 'Breakfast   daliya', 'Na', '150ml watermark', '', '', '2023-07-10', '2023-07-10 09:15 AM', 0, '00035'),
(410, 'IP-SSAL000035', 'Breakfast   daliya', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 09:15 AM', 0, '00035'),
(411, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 09:30 AM', 0, '00035'),
(412, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 09:30 AM', 0, '00035'),
(413, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 09:45 AM', 0, '00035'),
(414, 'IP-SSAL000031', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 09:45 AM', 0, '00035'),
(415, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 10:00 AM', 0, '00035'),
(416, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 10:00 AM', 0, '00035'),
(417, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 10:00 AM', 0, '00035'),
(418, 'IP-SSAL000047', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:30 AM', 0, '00032'),
(419, 'IP-SSAL000046', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(420, 'IP-SSAL000051', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(421, 'IP-SSAL000050', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032');
INSERT INTO `iop_intake_record` (`intake_id`, `iop_id`, `particulars`, `IV_fluids`, `oral`, `no_stool`, `no_urine`, `dDate`, `dDateTime`, `InActive`, `cPreparedBy`) VALUES
(422, 'IP-SSAL000056', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(423, 'IP-SSAL000049', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(424, 'IP-SSAL000055', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(425, 'IP-SSAL000042', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(426, 'IP-SSAL000041', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 11:45 AM', 0, '00032'),
(427, 'IP-SSAL000044', '120 ml water and milk', 'Nil', 'Feed', '', '', '2023-07-10', '2023-07-10 09:45 AM', 0, '00032'),
(428, 'IP-SSAL000044', 'Papita juice ', 'Nil', 'Feed', '', '', '2023-07-10', '2023-07-10 12:00 PM', 0, '00032'),
(429, 'IP-SSAL000045', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 12:00 PM', 0, '00032'),
(430, 'IP-SSAL000043', 'Regular breakfast and lunch ', 'Nil', 'Food', '', '', '2023-07-10', '2023-07-10 12:00 PM', 0, '00032'),
(431, 'IP-SSAL000036', 'Lunch', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 04:30 PM', 0, '00035'),
(432, 'IP-SSAL000034', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:00 AM', 0, '00035'),
(433, 'IP-SSAL000035', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:30 PM', 0, '00035'),
(434, 'IP-SSAL000033', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:30 PM', 0, '00035'),
(435, 'IP-SSAL000032', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:15 AM', 0, '00035'),
(436, 'IP-SSAL000031', 'Lunch', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:45 PM', 0, '00035'),
(437, 'IP-SSAL000040', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:45 PM', 0, '00035'),
(438, 'IP-SSAL000038', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:45 PM', 0, '00035'),
(439, 'IP-SSAL000030', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:45 PM', 0, '00035'),
(440, 'IP-SSAL000039', 'Full deit', 'Na', '150ml water', '', '', '2023-07-10', '2023-07-10 01:45 PM', 0, '00035'),
(441, 'IP-SSAL000030', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:15 PM', 1, '00025'),
(442, 'IP-SSAL000031', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:15 PM', 0, '00025'),
(443, 'IP-SSAL000032', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:15 PM', 0, '00025'),
(444, 'IP-SSAL000033', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:15 PM', 0, '00025'),
(445, 'IP-SSAL000034', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:15 PM', 0, '00025'),
(446, 'IP-SSAL000035', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:30 PM', 0, '00025'),
(447, 'IP-SSAL000036', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:30 PM', 0, '00025'),
(448, 'IP-SSAL000037', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:30 PM', 0, '00025'),
(449, 'IP-SSAL000038', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:30 PM', 0, '00025'),
(450, 'IP-SSAL000039', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:30 PM', 0, '00025'),
(451, 'IP-SSAL000040', 'Full deiner ', 'NA', '100ml water ', '', '', '2023-07-10', '2023-07-10 09:30 PM', 0, '00025'),
(452, 'IP-SSAL000055', 'Full diet ', 'Na', 'Water , milk ', '', '', '2023-07-10', '2023-07-10 10:15 PM', 0, '00033'),
(453, 'IP-SSAL000043', 'Full diet ', 'Na', 'Water , milk ', '', '', '2023-07-10', '2023-07-10 10:15 PM', 0, '00033'),
(454, 'IP-SSAL000042', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:15 PM', 0, '00033'),
(455, 'IP-SSAL000044', 'Dal,rice soup120ml water, ensure powder+120ml water ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:15 PM', 0, '00033'),
(456, 'IP-SSAL000041', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:15 PM', 0, '00033'),
(457, 'IP-SSAL000045', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:15 PM', 0, '00033'),
(458, 'IP-SSAL000054', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(459, 'IP-SSAL000046', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(460, 'IP-SSAL000050', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(461, 'IP-SSAL000051', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(462, 'IP-SSAL000049', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(463, 'IP-SSAL000047', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(464, 'IP-SSAL000056', 'Full diet ', 'Na', 'Water ', '', '', '2023-07-10', '2023-07-10 10:30 PM', 0, '00033'),
(465, 'IP-SSAL000036', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(466, 'IP-SSAL000034', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(467, 'IP-SSAL000035', 'Full deit', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(468, 'IP-SSAL000033', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(469, 'IP-SSAL000037', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(470, 'IP-SSAL000037', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(471, 'IP-SSAL000032', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(472, 'IP-SSAL000040', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:30 PM', 0, '00035'),
(473, 'IP-SSAL000031', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:45 PM', 0, '00035'),
(474, 'IP-SSAL000030', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:45 PM', 0, '00035'),
(475, 'IP-SSAL000038', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:45 PM', 0, '00035'),
(476, 'IP-SSAL000039', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 01:45 PM', 0, '00035'),
(477, 'IP-SSAL000046', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:00 PM', 0, '00035'),
(478, 'IP-SSAL000054', 'Regular breakfast and lunch', 'Na', '150ml water  ', '', '', '2023-07-11', '2023-07-11 02:00 PM', 0, '00035'),
(479, 'IP-SSAL000056', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-11', '2023-07-11 02:00 PM', 0, '00035'),
(480, 'IP-SSAL000051', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:30 PM', 0, '00035'),
(481, 'IP-SSAL000047', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:30 PM', 0, '00035'),
(482, 'IP-SSAL000049', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:30 PM', 0, '00035'),
(483, 'IP-SSAL000050', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:30 PM', 0, '00035'),
(484, 'IP-SSAL000043', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:45 PM', 0, '00035'),
(485, 'IP-SSAL000042', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:45 PM', 0, '00035'),
(486, 'IP-SSAL000055', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:45 PM', 0, '00035'),
(487, 'IP-SSAL000045', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:45 PM', 0, '00035'),
(488, 'IP-SSAL000041', 'Regular breakfast and lunch', 'Na', '150ml water', '', '', '2023-07-11', '2023-07-11 02:45 PM', 0, '00035'),
(489, 'IP-SSAL000030', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:00 PM', 1, '00025'),
(490, 'IP-SSAL000030', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:00 PM', 0, '00025'),
(491, 'IP-SSAL000031', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:00 AM', 0, '00025'),
(492, 'IP-SSAL000031', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:00 AM', 1, '00025'),
(493, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:00 AM', 0, '00025'),
(494, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:00 AM', 0, '00025'),
(495, 'IP-SSAL000034', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:00 AM', 0, '00025'),
(496, 'IP-SSAL000035', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:15 AM', 0, '00025'),
(497, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:15 AM', 0, '00025'),
(498, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:15 AM', 0, '00025'),
(499, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:15 AM', 0, '00025'),
(500, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:15 AM', 0, '00025'),
(501, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 12:15 AM', 0, '00025'),
(502, 'IP-SSAL000041', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 12:30 AM', 1, '00032'),
(503, 'IP-SSAL000041', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 12:00 PM', 0, '00032'),
(504, 'IP-SSAL000042', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:12 AM', 0, '00032'),
(505, 'IP-SSAL000043', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:13 AM', 0, '00032'),
(506, 'IP-SSAL000044', '120 ml water and dal,rice', 'NA', 'Feed', '', '', '2023-07-11', '2023-07-11 09:00 PM', 0, '00032'),
(507, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-11', '2023-07-11 11:00 PM', 0, '00032'),
(508, 'IP-SSAL000045', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:16 PM', 0, '00032'),
(509, 'IP-SSAL000046', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:20 PM', 0, '00032'),
(510, 'IP-SSAL000047', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:30 PM', 0, '00032'),
(511, 'IP-SSAL000049', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:32 PM', 0, '00032'),
(512, 'IP-SSAL000050', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:33 PM', 0, '00032'),
(513, 'IP-SSAL000051', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:34 PM', 0, '00032'),
(514, 'IP-SSAL000054', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:36 PM', 0, '00032'),
(515, 'IP-SSAL000054', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:39 PM', 0, '00032'),
(516, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-11', '2023-07-11 11:40 PM', 0, '00032'),
(517, 'IP-SSAL000056', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:43 PM', 0, '00032'),
(518, 'IP-SSAL000058', 'Normal diet ', 'NA', '100 ml water ', '', '', '2023-07-11', '2023-07-11 11:50 PM', 0, '00032'),
(519, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-12', '2023-07-12 07:45 AM', 0, '00032'),
(520, 'IP-SSAL000040', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:00 PM', 0, '00033'),
(521, 'IP-SSAL000040', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:00 PM', 0, '00033'),
(522, 'IP-SSAL000031', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:00 PM', 0, '00033'),
(523, 'IP-SSAL000039', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:00 PM', 0, '00033'),
(524, 'IP-SSAL000033', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 06:15 PM', 0, '00033'),
(525, 'IP-SSAL000033', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 06:15 PM', 0, '00033'),
(526, 'IP-SSAL000034', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:15 PM', 0, '00033'),
(527, 'IP-SSAL000037', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 06:30 PM', 0, '00033'),
(528, 'IP-SSAL000032', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 06:30 PM', 0, '00033'),
(529, 'IP-SSAL000030', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:30 PM', 0, '00033'),
(530, 'IP-SSAL000030', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:30 PM', 0, '00033'),
(531, 'IP-SSAL000030', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:30 PM', 0, '00033'),
(532, 'IP-SSAL000035', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:30 PM', 0, '00033'),
(533, 'IP-SSAL000038', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:45 PM', 0, '00033'),
(534, 'IP-SSAL000038', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:45 PM', 0, '00033'),
(535, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water papaya juice ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 06:45 PM', 0, '00033'),
(536, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 06:45 PM', 0, '00033'),
(537, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 07:00 PM', 0, '00033'),
(538, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 07:00 PM', 0, '00033'),
(539, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-12', '2023-07-12 07:00 PM', 0, '00033'),
(540, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 07:00 PM', 0, '00033'),
(541, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-12', '2023-07-12 07:00 PM', 0, '00033'),
(542, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:30 PM', 0, '00025'),
(543, 'IP-SSAL000031', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(544, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(545, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(546, 'IP-SSAL000034', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(547, 'IP-SSAL000035', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(548, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(549, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 09:45 PM', 0, '00025'),
(550, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 10:00 PM', 0, '00025'),
(551, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 10:00 PM', 0, '00025'),
(552, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-12', '2023-07-12 10:00 PM', 0, '00025'),
(553, 'IP-SSAL000041', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:00 PM', 0, '00032'),
(554, 'IP-SSAL000042', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:01 PM', 0, '00032'),
(555, 'IP-SSAL000043', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:03 PM', 0, '00032'),
(556, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-12', '2023-07-12 09:03 PM', 0, '00032'),
(557, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-12', '2023-07-12 11:05 PM', 0, '00032'),
(558, 'IP-SSAL000045', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:30 PM', 0, '00032'),
(559, 'IP-SSAL000046', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:40 PM', 0, '00032'),
(560, 'IP-SSAL000047', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:46 PM', 0, '00032'),
(561, 'IP-SSAL000049', 'Normal diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:50 PM', 0, '00032'),
(562, 'IP-SSAL000050', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 10:55 PM', 0, '00032'),
(563, 'IP-SSAL000051', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 11:00 PM', 0, '00032'),
(564, 'IP-SSAL000054', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 11:15 PM', 0, '00032'),
(565, 'IP-SSAL000055', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 11:18 PM', 0, '00032'),
(566, 'IP-SSAL000056', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 11:20 PM', 0, '00032'),
(567, 'IP-SSAL000058', 'Normal diet ', 'NA', '100 ml water ', '', '', '2023-07-12', '2023-07-12 11:30 PM', 0, '00032'),
(568, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:15 AM', 0, '00035'),
(569, 'IP-SSAL000034', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:15 AM', 0, '00035'),
(570, 'IP-SSAL000035', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:15 AM', 0, '00035'),
(571, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:30 AM', 0, '00035'),
(572, 'IP-SSAL000031', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:30 AM', 0, '00035'),
(573, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:30 AM', 0, '00035'),
(574, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:30 AM', 0, '00035'),
(575, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:30 AM', 0, '00035'),
(576, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:30 AM', 0, '00035'),
(577, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:45 AM', 0, '00035'),
(578, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 09:45 AM', 0, '00035'),
(579, 'IP-SSAL000036', 'Full Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:00 PM', 0, '00035'),
(580, 'IP-SSAL000034', 'Lunch', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 01:00 PM', 0, '00035'),
(581, 'IP-SSAL000035', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(582, 'IP-SSAL000035', 'Full Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(583, 'IP-SSAL000033', 'Lunch', 'Na', '150ml water', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(584, 'IP-SSAL000037', 'Full deit', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(585, 'IP-SSAL000032', 'Full Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(586, 'IP-SSAL000040', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(587, 'IP-SSAL000031', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(588, 'IP-SSAL000038', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:15 PM', 0, '00035'),
(589, 'IP-SSAL000030', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:30 PM', 0, '00035'),
(590, 'IP-SSAL000039', 'Full deit', 'Na', '150ml water  ', '', '', '2023-07-13', '2023-07-13 01:30 PM', 0, '00035'),
(591, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:00 PM', 0, '00033'),
(592, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:15 PM', 0, '00033'),
(593, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:15 PM', 0, '00033'),
(594, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-13', '2023-07-13 05:15 PM', 0, '00033'),
(595, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:15 PM', 0, '00033'),
(596, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-13', '2023-07-13 05:30 PM', 0, '00033'),
(597, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:30 PM', 0, '00033'),
(598, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:30 PM', 0, '00033'),
(599, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:30 PM', 0, '00033'),
(600, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:30 PM', 0, '00033'),
(601, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-13', '2023-07-13 05:45 PM', 0, '00033'),
(602, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:45 PM', 0, '00033'),
(603, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-13', '2023-07-13 05:45 PM', 0, '00033'),
(604, 'IP-SSAL000048', 'Coffee, biscuit ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 05:45 PM', 0, '00033'),
(605, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 06:00 PM', 0, '00033'),
(606, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 06:00 PM', 0, '00033'),
(607, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-13', '2023-07-13 06:00 PM', 0, '00033'),
(608, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 09:45 PM', 0, '00025'),
(609, 'IP-SSAL000031', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 09:45 PM', 0, '00025'),
(610, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(611, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(612, 'IP-SSAL000034', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(613, 'IP-SSAL000035', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(614, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(615, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(616, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(617, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(618, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:00 PM', 0, '00025'),
(619, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:15 PM', 0, '00025'),
(620, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:15 PM', 0, '00025'),
(621, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:15 PM', 0, '00025'),
(622, 'IP-SSAL000044', '120ml water and Ensure ', 'NA', 'NA', '', '', '2023-07-13', '2023-07-13 10:15 PM', 0, '00025'),
(623, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:15 PM', 0, '00025'),
(624, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:15 PM', 0, '00025'),
(625, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:30 PM', 0, '00025'),
(626, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:30 PM', 0, '00025'),
(627, 'IP-SSAL000049', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:30 PM', 0, '00025'),
(628, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:30 PM', 0, '00025'),
(629, 'IP-SSAL000051', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:30 PM', 0, '00025'),
(630, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:45 PM', 0, '00025'),
(631, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:45 PM', 0, '00025'),
(632, 'IP-SSAL000058', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:45 PM', 0, '00025'),
(633, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-13', '2023-07-13 10:45 PM', 0, '00025'),
(634, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-14', '2023-07-14 11:30 AM', 0, '00035'),
(635, 'IP-SSAL000034', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:00 AM', 0, '00035'),
(636, 'IP-SSAL000035', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:15 AM', 0, '00035'),
(637, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:15 PM', 0, '00035'),
(638, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-14', '2023-07-14 08:15 PM', 0, '00035'),
(639, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:30 AM', 0, '00035'),
(640, 'IP-SSAL000031', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:30 AM', 0, '00035'),
(641, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-14', '2023-07-14 08:15 AM', 0, '00035'),
(642, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:15 AM', 0, '00035'),
(643, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:15 AM', 0, '00035'),
(644, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 08:30 AM', 0, '00035'),
(645, 'IP-SSAL000036', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 12:45 PM', 0, '00035'),
(646, 'IP-SSAL000034', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 12:45 PM', 0, '00035'),
(647, 'IP-SSAL000035', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(648, 'IP-SSAL000033', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(649, 'IP-SSAL000037', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00035'),
(650, 'IP-SSAL000032', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(651, 'IP-SSAL000031', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(652, 'IP-SSAL000040', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(653, 'IP-SSAL000038', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(654, 'IP-SSAL000030', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:00 PM', 0, '00035'),
(655, 'IP-SSAL000039', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-14', '2023-07-14 01:15 PM', 0, '00035'),
(656, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:15 PM', 0, '00033'),
(657, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(658, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(659, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(660, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(661, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(662, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(663, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-14', '2023-07-14 01:30 PM', 0, '00033'),
(664, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(665, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water , coffee ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(666, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(667, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(668, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(669, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(670, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ', '', '', '2023-07-14', '2023-07-14 01:45 PM', 0, '00033'),
(671, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ', '', '', '2023-07-14', '2023-07-14 02:00 PM', 0, '00033'),
(672, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 09:45 PM', 0, '00025'),
(673, 'IP-SSAL000031', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 09:45 PM', 0, '00025'),
(674, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 09:45 PM', 0, '00025'),
(675, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 09:45 PM', 0, '00025'),
(676, 'IP-SSAL000034', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(677, 'IP-SSAL000035', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(678, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(679, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(680, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(681, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(682, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:00 PM', 0, '00025'),
(683, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:30 PM', 0, '00032'),
(684, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(685, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(686, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(687, 'IP-SSAL000051', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(688, 'IP-SSAL000049', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(689, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(690, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(691, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(692, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 10:45 PM', 0, '00032'),
(693, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-14', '2023-07-14 09:03 PM', 0, '00032'),
(694, 'IP-SSAL000044', '120 ml water and apple juice ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 11:00 PM', 0, '00032'),
(695, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 11:00 PM', 0, '00032'),
(696, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 11:00 PM', 0, '00032'),
(697, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 11:00 PM', 0, '00032'),
(698, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 11:00 PM', 0, '00032'),
(699, 'IP-SSAL000058', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-14', '2023-07-14 11:00 PM', 0, '00032'),
(700, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:15 AM', 0, '00035'),
(701, 'IP-SSAL000034', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:00 AM', 0, '00035'),
(702, 'IP-SSAL000035', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:00 AM', 0, '00035'),
(703, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:15 AM', 0, '00035'),
(704, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:15 AM', 0, '00035'),
(705, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-15', '2023-07-15 08:30 AM', 0, '00035'),
(706, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:30 AM', 0, '00035'),
(707, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:30 AM', 0, '00035'),
(708, 'IP-SSAL000031', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:30 AM', 0, '00035'),
(709, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:30 AM', 0, '00035'),
(710, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 08:45 AM', 0, '00035'),
(711, 'IP-SSAL000036', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-15', '2023-07-15 12:30 PM', 0, '00035'),
(712, 'IP-SSAL000033', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 12:30 PM', 0, '00035'),
(713, 'IP-SSAL000037', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-15', '2023-07-15 12:30 PM', 0, '00035'),
(714, 'IP-SSAL000032', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 12:30 PM', 0, '00035'),
(715, 'IP-SSAL000040', 'Lunch', 'Na', '150ml water', '', '', '2023-07-15', '2023-07-15 12:45 PM', 0, '00035'),
(716, 'IP-SSAL000031', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 12:45 PM', 0, '00035'),
(717, 'IP-SSAL000038', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-15', '2023-07-15 12:45 PM', 0, '00035'),
(718, 'IP-SSAL000030', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 12:45 PM', 0, '00035'),
(719, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-15', '2023-07-15 12:45 PM', 0, '00035'),
(720, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(721, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ,tea', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(722, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(723, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(724, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea,milk', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(725, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(726, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea,milk', '', '', '2023-07-15', '2023-07-15 06:15 PM', 0, '00033'),
(727, 'IP-SSAL000049', 'Breakfast,lunch, snacks ,fruits', 'inj.orofer fcm500mg+100ml', 'Water 900ml+2 cup tea', '', '', '2023-07-15', '2023-07-15 06:30 PM', 0, '00033'),
(728, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ,tea', '', '', '2023-07-15', '2023-07-15 06:30 PM', 0, '00033'),
(729, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 06:30 PM', 0, '00033'),
(730, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 06:30 PM', 0, '00033'),
(731, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Tea, water ', '', '', '2023-07-15', '2023-07-15 06:30 PM', 0, '00033'),
(732, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-15', '2023-07-15 06:45 PM', 0, '00033'),
(733, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 08:00 PM', 0, '00033'),
(734, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 08:00 PM', 0, '00033'),
(735, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-15', '2023-07-15 08:00 PM', 0, '00033'),
(736, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:30 PM', 0, '00025'),
(737, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:30 PM', 0, '00025'),
(738, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:30 PM', 0, '00025'),
(739, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:30 PM', 0, '00025'),
(740, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(741, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(742, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(743, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(744, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(745, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(746, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(747, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(748, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 09:45 PM', 0, '00025'),
(749, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(750, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-15', '2023-07-15 09:05 PM', 0, '00032'),
(751, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-15', '2023-07-15 11:00 PM', 0, '00032'),
(752, 'IP-SSAL000041', 'Full diet ', 'NA', '100 ml water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(753, 'IP-SSAL000058', 'Normal diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(754, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(755, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(756, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(757, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:15 PM', 0, '00032'),
(758, 'IP-SSAL000049', 'Full diet ', 'NA', '600ml water ', '', '', '2023-07-15', '2023-07-15 10:30 PM', 0, '00032'),
(759, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:30 PM', 0, '00032'),
(760, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-15', '2023-07-15 10:30 PM', 0, '00032'),
(761, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-16', '2023-07-16 08:45 AM', 0, '00035'),
(762, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-16', '2023-07-16 08:15 AM', 0, '00035'),
(763, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-16', '2023-07-16 08:00 AM', 0, '00035'),
(764, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-16', '2023-07-16 08:30 AM', 0, '00035'),
(765, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-16', '2023-07-16 08:00 AM', 0, '00035'),
(766, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-16', '2023-07-16 08:15 AM', 0, '00035'),
(767, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-16', '2023-07-16 08:00 AM', 0, '00035'),
(768, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-16', '2023-07-16 08:00 AM', 0, '00035'),
(769, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water, tea, milk ', '', '', '2023-07-16', '2023-07-16 04:30 PM', 0, '00033'),
(770, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '1000ml water,2cup tea', '', '', '2023-07-16', '2023-07-16 04:45 PM', 0, '00033'),
(771, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '1000ml water,2cup tea', '', '', '2023-07-16', '2023-07-16 04:45 PM', 0, '00033'),
(772, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '1000ml water,2cup tea', '', '', '2023-07-16', '2023-07-16 04:45 PM', 0, '00033'),
(773, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 04:45 PM', 0, '00033'),
(774, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-16', '2023-07-16 04:45 PM', 0, '00033'),
(775, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-16', '2023-07-16 04:45 PM', 0, '00033'),
(776, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-16', '2023-07-16 05:00 PM', 0, '00033'),
(777, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-16', '2023-07-16 05:00 PM', 0, '00033'),
(778, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:00 PM', 0, '00033'),
(779, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:00 PM', 0, '00033'),
(780, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-16', '2023-07-16 05:00 PM', 0, '00033'),
(781, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:15 PM', 0, '00033'),
(782, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-16', '2023-07-16 05:15 PM', 0, '00033'),
(783, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:15 PM', 0, '00033'),
(784, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:15 PM', 0, '00033'),
(785, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:30 PM', 0, '00033'),
(786, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-16', '2023-07-16 05:30 PM', 0, '00033'),
(787, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water, coffee ', '', '', '2023-07-16', '2023-07-16 05:30 PM', 0, '00033'),
(788, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water, coffee ', '', '', '2023-07-16', '2023-07-16 05:30 PM', 0, '00033'),
(789, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-16', '2023-07-16 05:30 PM', 0, '00033'),
(790, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-16', '2023-07-16 05:30 PM', 0, '00033'),
(791, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:30 PM', 0, '00032'),
(792, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:30 PM', 0, '00025'),
(793, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:30 PM', 0, '00032'),
(794, 'IP-SSAL000031', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(795, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(796, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(797, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(798, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(799, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(800, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(801, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(802, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(803, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(804, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(805, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(806, 'IP-SSAL000049', 'Full diet ', 'NA', '800ml', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(807, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(808, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(809, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-16', '2023-07-16 09:03 PM', 0, '00032'),
(810, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-16', '2023-07-16 11:00 PM', 0, '00032'),
(811, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00025'),
(812, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(813, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 09:45 PM', 0, '00032'),
(814, 'IP-SSAL000058', 'Normal diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 10:00 PM', 0, '00032'),
(815, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-16', '2023-07-16 10:00 PM', 0, '00032'),
(816, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 09:00 AM', 0, '00035'),
(817, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-17', '2023-07-17 08:00 AM', 0, '00035'),
(818, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-17', '2023-07-17 08:15 AM', 0, '00035'),
(819, 'IP-SSAL000040', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 08:15 AM', 0, '00035'),
(820, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 08:30 AM', 0, '00035'),
(821, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 08:30 AM', 0, '00035'),
(822, 'IP-SSAL000037', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 08:30 AM', 0, '00035'),
(823, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 08:30 AM', 0, '00035'),
(824, 'IP-SSAL000036', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 01:30 PM', 0, '00035'),
(825, 'IP-SSAL000036', 'Sanck', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 04:15 PM', 0, '00035'),
(826, 'IP-SSAL000033', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-17', '2023-07-17 01:15 PM', 0, '00035'),
(827, 'IP-SSAL000033', 'Sanck', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00035'),
(828, 'IP-SSAL000037', 'Lunch', 'Na', '150ml water ', '', '', '2023-07-17', '2023-07-17 01:45 PM', 0, '00035'),
(829, 'IP-SSAL000037', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00035'),
(830, 'IP-SSAL000032', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 01:30 PM', 0, '00035'),
(831, 'IP-SSAL000032', 'Sanck ', 'Na', 'Tea and water', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00035'),
(832, 'IP-SSAL000040', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 01:15 PM', 0, '00035'),
(833, 'IP-SSAL000040', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00035'),
(834, 'IP-SSAL000038', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-17', '2023-07-17 01:15 PM', 0, '00035'),
(835, 'IP-SSAL000038', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00035'),
(836, 'IP-SSAL000030', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-17', '2023-07-17 01:30 PM', 0, '00035'),
(837, 'IP-SSAL000030', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00035'),
(838, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea,milk', '', '', '2023-07-17', '2023-07-17 04:30 PM', 0, '00033'),
(839, 'IP-SSAL000039', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-17', '2023-07-17 01:45 PM', 0, '00035'),
(840, 'IP-SSAL000039', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00035'),
(841, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water , milk ,tea', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033'),
(842, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033'),
(843, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033'),
(844, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea, milk ', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033');
INSERT INTO `iop_intake_record` (`intake_id`, `iop_id`, `particulars`, `IV_fluids`, `oral`, `no_stool`, `no_urine`, `dDate`, `dDateTime`, `InActive`, `cPreparedBy`) VALUES
(845, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033'),
(846, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033'),
(847, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-17', '2023-07-17 04:45 PM', 0, '00033'),
(848, 'IP-SSAL000056', 'Breakfast,lunch', 'Na', 'Water,milk,tea', '', '', '2023-07-17', '2023-07-17 05:00 PM', 0, '00033'),
(849, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 05:00 PM', 0, '00033'),
(850, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 05:15 PM', 0, '00033'),
(851, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 05:15 PM', 0, '00033'),
(852, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 05:15 PM', 0, '00033'),
(853, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 05:15 PM', 0, '00033'),
(854, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-17', '2023-07-17 05:15 PM', 0, '00033'),
(855, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, coffee ', '', '', '2023-07-17', '2023-07-17 05:15 PM', 0, '00033'),
(856, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '900 ml water,2 cup tea', '', '', '2023-07-17', '2023-07-17 05:30 PM', 0, '00033'),
(857, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(858, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(859, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(860, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(861, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(862, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(863, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(864, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(865, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(866, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:15 PM', 0, '00032'),
(867, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(868, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-17', '2023-07-17 09:05 PM', 0, '00032'),
(869, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 11:00 PM', 0, '00032'),
(870, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(871, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(872, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(873, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(874, 'IP-SSAL000049', 'Full diet ', 'NA', '800ml', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(875, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(876, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(877, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(878, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(879, 'IP-SSAL000058', 'Normal diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(880, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-17', '2023-07-17 10:30 PM', 0, '00032'),
(881, 'IP-SSAL000039', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-18', '2023-07-18 08:45 AM', 0, '00035'),
(882, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 08:30 AM', 0, '00035'),
(883, 'IP-SSAL000040', 'Breakfast ', 'Na', 'Tea and water', '', '', '2023-07-18', '2023-07-18 09:00 AM', 0, '00035'),
(884, 'IP-SSAL000037', 'Breakfast ', 'Na', 'Tea and water', '', '', '2023-07-18', '2023-07-18 09:00 AM', 0, '00035'),
(885, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml water  ', '', '', '2023-07-18', '2023-07-18 08:45 AM', 0, '00035'),
(886, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 08:30 AM', 0, '00035'),
(887, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 09:30 AM', 0, '00035'),
(888, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml water', '', '', '2023-07-18', '2023-07-18 09:45 AM', 0, '00035'),
(889, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 01:15 PM', 0, '00033'),
(890, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 01:30 PM', 0, '00033'),
(891, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 01:30 PM', 0, '00033'),
(892, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 01:30 PM', 0, '00033'),
(893, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,coffee ', '', '', '2023-07-18', '2023-07-18 01:45 PM', 0, '00033'),
(894, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 01:45 PM', 0, '00033'),
(895, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 01:45 PM', 0, '00033'),
(896, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '800 ml water,2 Cup tea', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(897, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '800 ml water,2 Cup tea', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(898, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(899, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(900, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(901, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(902, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00033'),
(903, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, milk ', '', '', '2023-07-18', '2023-07-18 02:15 PM', 0, '00033'),
(904, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 02:15 PM', 0, '00033'),
(905, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-18', '2023-07-18 02:30 PM', 0, '00033'),
(906, 'IP-SSAL000036', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 02:00 PM', 0, '00035'),
(907, 'IP-SSAL000036', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-18', '2023-07-18 05:00 PM', 0, '00035'),
(908, 'IP-SSAL000033', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:15 PM', 0, '00035'),
(909, 'IP-SSAL000033', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-18', '2023-07-18 04:45 PM', 0, '00035'),
(910, 'IP-SSAL000037', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:30 PM', 0, '00035'),
(911, 'IP-SSAL000032', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:15 PM', 0, '00035'),
(912, 'IP-SSAL000032', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-18', '2023-07-18 05:15 PM', 0, '00035'),
(913, 'IP-SSAL000040', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:30 PM', 0, '00035'),
(914, 'IP-SSAL000038', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:15 PM', 0, '00035'),
(915, 'IP-SSAL000030', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:00 PM', 0, '00035'),
(916, 'IP-SSAL000030', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-18', '2023-07-18 05:00 PM', 0, '00035'),
(917, 'IP-SSAL000039', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-18', '2023-07-18 01:15 PM', 0, '00035'),
(918, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(919, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(920, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(921, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(922, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(923, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(924, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(925, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(926, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(927, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(928, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(929, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-18', '2023-07-18 09:01 PM', 0, '00032'),
(930, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Feed', '', '', '2023-07-18', '2023-07-18 11:00 PM', 0, '00032'),
(931, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(932, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(933, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:30 PM', 0, '00032'),
(934, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(935, 'IP-SSAL000049', 'Full diet ', 'NA', '900ml', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(936, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(937, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(938, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(939, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(940, 'IP-SSAL000058', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(941, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-18', '2023-07-18 10:45 PM', 0, '00032'),
(942, 'IP-SSAL000036', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 08:00 AM', 0, '00035'),
(943, 'IP-SSAL000033', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 08:30 AM', 0, '00035'),
(944, 'IP-SSAL000037', 'Breakfast ', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 08:45 AM', 0, '00035'),
(945, 'IP-SSAL000040', 'Breakfast ', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 08:45 AM', 0, '00035'),
(946, 'IP-SSAL000038', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 08:45 AM', 0, '00035'),
(947, 'IP-SSAL000039', 'Breakfast ', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 08:45 AM', 0, '00035'),
(948, 'IP-SSAL000030', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 08:00 AM', 0, '00035'),
(949, 'IP-SSAL000032', 'Breakfast ', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 08:00 AM', 0, '00035'),
(950, 'IP-SSAL000036', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-19', '2023-07-19 02:15 PM', 0, '00035'),
(951, 'IP-SSAL000033', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 01:15 PM', 0, '00035'),
(952, 'IP-SSAL000037', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 01:30 PM', 0, '00035'),
(953, 'IP-SSAL000032', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-19', '2023-07-19 01:15 PM', 0, '00035'),
(954, 'IP-SSAL000040', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 01:15 PM', 0, '00035'),
(955, 'IP-SSAL000038', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 01:30 PM', 0, '00035'),
(956, 'IP-SSAL000030', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-19', '2023-07-19 01:30 PM', 0, '00035'),
(957, 'IP-SSAL000039', 'Lunch', 'Na', '150ml water  ', '', '', '2023-07-19', '2023-07-19 01:15 PM', 0, '00035'),
(958, 'IP-SSAL000036', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:30 PM', 0, '00035'),
(959, 'IP-SSAL000033', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:30 PM', 0, '00035'),
(960, 'IP-SSAL000037', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:45 PM', 0, '00035'),
(961, 'IP-SSAL000032', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:45 PM', 0, '00035'),
(962, 'IP-SSAL000040', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:45 PM', 0, '00035'),
(963, 'IP-SSAL000038', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:45 PM', 0, '00035'),
(964, 'IP-SSAL000030', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:45 PM', 0, '00035'),
(965, 'IP-SSAL000039', 'Sanck', 'Na', 'Tea and water', '', '', '2023-07-19', '2023-07-19 04:45 PM', 0, '00035'),
(966, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(967, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '900 ml water,2 cup tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(968, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water, coffee ', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(969, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(970, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(971, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(972, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(973, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(974, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 06:45 PM', 0, '00033'),
(975, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, milk ', '', '', '2023-07-19', '2023-07-19 07:00 PM', 0, '00033'),
(976, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 07:00 PM', 0, '00033'),
(977, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-19', '2023-07-19 07:00 PM', 0, '00033'),
(978, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-19', '2023-07-19 07:00 PM', 0, '00033'),
(979, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water ,apple juice,milkpowder+120ml water ', 'Na', 'Water ', '', '', '2023-07-19', '2023-07-19 07:00 PM', 0, '00033'),
(980, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-19', '2023-07-19 07:00 PM', 0, '00033'),
(981, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(982, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(983, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(984, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(985, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(986, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(987, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(988, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(989, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(990, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(991, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(992, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 09:00 PM', 0, '00032'),
(993, 'IP-SSAL000044', '120 ml water and Ensure ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:00 PM', 0, '00032'),
(994, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(995, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(996, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(997, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(998, 'IP-SSAL000049', 'Full diet ', 'NA', '800ml', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(999, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(1000, 'IP-SSAL000051', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(1001, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(1002, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(1003, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:15 PM', 0, '00032'),
(1004, 'IP-SSAL000058', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:30 PM', 0, '00032'),
(1005, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-19', '2023-07-19 11:30 PM', 0, '00032'),
(1006, 'IP-SSAL000036', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 01:15 PM', 0, '00035'),
(1007, 'IP-SSAL000033', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 01:15 PM', 0, '00035'),
(1008, 'IP-SSAL000037', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 01:30 PM', 0, '00035'),
(1009, 'IP-SSAL000032', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 02:15 PM', 0, '00035'),
(1010, 'IP-SSAL000040', 'Regular breakfast and lunch', 'Na', '150ml water  ', '', '', '2023-07-20', '2023-07-20 01:15 PM', 0, '00035'),
(1011, 'IP-SSAL000030', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 01:30 PM', 0, '00035'),
(1012, 'IP-SSAL000038', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 01:30 PM', 0, '00035'),
(1013, 'IP-SSAL000039', 'Regular breakfast and lunch', 'Na', '150ml waters', '', '', '2023-07-20', '2023-07-20 01:30 PM', 0, '00035'),
(1014, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:30 PM', 0, '00033'),
(1015, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:30 PM', 0, '00033'),
(1016, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:30 PM', 0, '00033'),
(1017, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:45 PM', 0, '00033'),
(1018, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:45 PM', 0, '00033'),
(1019, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '900ml water,2cup tea', '', '', '2023-07-20', '2023-07-20 06:45 PM', 0, '00033'),
(1020, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:45 PM', 0, '00033'),
(1021, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:45 PM', 0, '00033'),
(1022, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 06:45 PM', 0, '00033'),
(1023, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1024, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1025, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water,tea,coffee ', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1026, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1027, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1028, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1029, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-20', '2023-07-20 07:00 PM', 0, '00033'),
(1030, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:15 PM', 0, '00025'),
(1031, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:15 PM', 0, '00025'),
(1032, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:15 PM', 0, '00025'),
(1033, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:30 PM', 0, '00025'),
(1034, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:30 PM', 0, '00025'),
(1035, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:30 PM', 0, '00025'),
(1036, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:30 PM', 0, '00025'),
(1037, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-21', '2023-07-21 11:30 PM', 0, '00025'),
(1038, 'IP-SSAL000044', '120ml water and Ensure ', 'NA', 'NA', '', '', '2023-07-21', '2023-07-21 11:30 PM', 0, '00025'),
(1039, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:15 PM', 0, '00032'),
(1040, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:15 PM', 0, '00032'),
(1041, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:30 PM', 0, '00032'),
(1042, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:30 PM', 0, '00032'),
(1043, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:30 PM', 0, '00032'),
(1044, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:30 PM', 0, '00032'),
(1045, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:30 PM', 0, '00032'),
(1046, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:45 PM', 0, '00032'),
(1047, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 04:45 PM', 0, '00032'),
(1048, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:15 PM', 0, '00025'),
(1049, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:15 PM', 0, '00025'),
(1050, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:15 PM', 0, '00025'),
(1051, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1052, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1053, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1054, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1055, 'IP-SSAL000044', '120ml water and Ensure ', 'NA', 'NA', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1056, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1057, 'IP-SSAL000051', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:30 PM', 0, '00025'),
(1058, 'IP-SSAL000050', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1059, 'IP-SSAL000049', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1060, 'IP-SSAL000048', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1061, 'IP-SSAL000047', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1062, 'IP-SSAL000046', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1063, 'IP-SSAL000054', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1064, 'IP-SSAL000055', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1065, 'IP-SSAL000056', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1066, 'IP-SSAL000058', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1067, 'IP-SSAL000059', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1068, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1069, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1070, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1071, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-22', '2023-07-22 10:45 PM', 0, '00025'),
(1072, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:00 PM', 0, '00033'),
(1073, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:00 PM', 0, '00033'),
(1074, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-23', '2023-07-23 04:00 PM', 0, '00033'),
(1075, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-23', '2023-07-23 04:00 PM', 0, '00033'),
(1076, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:00 PM', 0, '00033'),
(1077, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00032'),
(1078, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00032'),
(1079, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00033'),
(1080, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00032'),
(1081, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '1000 ml water,2 cup tea', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00033'),
(1082, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00033'),
(1083, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:15 PM', 0, '00033'),
(1084, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00032'),
(1085, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00032'),
(1086, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00032'),
(1087, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00032'),
(1088, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00032'),
(1089, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00033'),
(1090, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00033'),
(1091, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00033'),
(1092, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:30 PM', 0, '00033'),
(1093, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:45 PM', 0, '00033'),
(1094, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-23', '2023-07-23 04:45 PM', 0, '00033'),
(1095, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:00 PM', 0, '00025'),
(1096, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:00 PM', 0, '00025'),
(1097, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:00 PM', 0, '00025'),
(1098, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1099, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1100, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1101, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1102, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1103, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1104, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1105, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1106, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1107, 'IP-SSAL000051', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-23', '2023-07-23 10:15 PM', 0, '00025'),
(1108, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 08:15 PM', 0, '00035'),
(1109, 'IP-SSAL000054', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:15 PM', 0, '00035'),
(1110, 'IP-SSAL000059', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:15 PM', 0, '00035'),
(1111, 'IP-SSAL000056', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:15 PM', 0, '00035'),
(1112, 'IP-SSAL000048', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:30 PM', 0, '00035'),
(1113, 'IP-SSAL000050', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 08:30 PM', 0, '00035'),
(1114, 'IP-SSAL000049', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:30 PM', 0, '00035'),
(1115, 'IP-SSAL000047', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:30 PM', 0, '00035'),
(1116, 'IP-SSAL000051', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 10:30 PM', 0, '00035'),
(1117, 'IP-SSAL000044', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:45 PM', 0, '00035'),
(1118, 'IP-SSAL000044', 'Ensure milk ', 'Na', '150ml waters', '', '', '2023-07-23', '2023-07-23 09:45 PM', 0, '00035'),
(1119, 'IP-SSAL000055', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-23', '2023-07-23 09:45 PM', 0, '00035'),
(1120, 'IP-SSAL000058', 'Full deit', 'Na', 'Water', '', '', '2023-07-23', '2023-07-23 09:45 PM', 0, '00035'),
(1121, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:15 PM', 0, '00032'),
(1122, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:15 PM', 0, '00032'),
(1123, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:30 PM', 0, '00032'),
(1124, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:30 PM', 0, '00032'),
(1125, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:30 PM', 0, '00032'),
(1126, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:30 PM', 0, '00032'),
(1127, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:30 PM', 0, '00032'),
(1128, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 02:30 PM', 0, '00032'),
(1129, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:00 PM', 0, '00033'),
(1130, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-24', '2023-07-24 05:15 PM', 0, '00033'),
(1131, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-24', '2023-07-24 05:15 PM', 0, '00033'),
(1132, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:15 PM', 0, '00033'),
(1133, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:30 PM', 0, '00033'),
(1134, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:30 PM', 0, '00033'),
(1135, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-24', '2023-07-24 05:30 PM', 0, '00033'),
(1136, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '900 ml water,2 cup tea', '', '', '2023-07-24', '2023-07-24 05:45 PM', 0, '00033'),
(1137, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:45 PM', 0, '00033'),
(1138, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:45 PM', 0, '00033'),
(1139, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:45 PM', 0, '00033'),
(1140, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:45 PM', 0, '00033'),
(1141, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 05:45 PM', 0, '00033'),
(1142, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 06:00 PM', 0, '00033'),
(1143, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 06:00 PM', 0, '00033'),
(1144, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-24', '2023-07-24 06:00 PM', 0, '00033'),
(1145, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1146, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1147, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1148, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1149, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1150, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1151, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1152, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1153, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1154, 'IP-SSAL000041', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1155, 'IP-SSAL000042', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1156, 'IP-SSAL000043', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1157, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1158, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1159, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1160, 'IP-SSAL000045', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1161, 'IP-SSAL000051', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-24', '2023-07-24 10:00 PM', 0, '00025'),
(1162, 'IP-SSAL000046', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-24', '2023-07-24 11:15 PM', 0, '00035'),
(1163, 'IP-SSAL000054', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:15 PM', 0, '00035'),
(1164, 'IP-SSAL000059', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1165, 'IP-SSAL000059', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1166, 'IP-SSAL000056', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1167, 'IP-SSAL000048', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1168, 'IP-SSAL000050', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1169, 'IP-SSAL000049', 'Full deit', 'Na', '100ml', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1170, 'IP-SSAL000047', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:45 PM', 0, '00035'),
(1171, 'IP-SSAL000051', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:15 PM', 0, '00035'),
(1172, 'IP-SSAL000044', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:00 PM', 0, '00035'),
(1173, 'IP-SSAL000044', 'Ensure milk', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 09:00 PM', 0, '00035'),
(1174, 'IP-SSAL000062', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:00 PM', 0, '00035'),
(1175, 'IP-SSAL000058', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:15 PM', 0, '00035'),
(1176, 'IP-SSAL000055', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-24', '2023-07-24 11:15 PM', 0, '00035'),
(1177, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 01:00 PM', 0, '00032'),
(1178, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 01:15 PM', 0, '00032'),
(1179, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 01:15 PM', 0, '00032'),
(1180, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 01:30 PM', 0, '00032'),
(1181, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 03:15 PM', 0, '00032'),
(1182, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 03:15 PM', 0, '00032'),
(1183, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 03:15 PM', 0, '00032'),
(1184, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-25', '2023-07-25 03:30 PM', 0, '00032'),
(1185, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:00 PM', 0, '00033'),
(1186, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:15 PM', 0, '00033'),
(1187, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:30 PM', 0, '00033'),
(1188, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:30 PM', 0, '00033'),
(1189, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:30 PM', 0, '00033'),
(1190, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:30 PM', 0, '00033'),
(1191, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '1000 ml water,2 cup tea', '', '', '2023-07-25', '2023-07-25 05:30 PM', 0, '00033'),
(1192, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, coffee ', '', '', '2023-07-25', '2023-07-25 05:30 PM', 0, '00033'),
(1193, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1194, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1195, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1196, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1197, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1198, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1199, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-25', '2023-07-25 05:45 PM', 0, '00033'),
(1200, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-25', '2023-07-25 06:00 PM', 0, '00033'),
(1201, 'IP-SSAL000061', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-25', '2023-07-25 06:00 PM', 0, '00033'),
(1202, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:15 PM', 0, '00035'),
(1203, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:15 PM', 0, '00035'),
(1204, 'IP-SSAL000054', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1205, 'IP-SSAL000059', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1206, 'IP-SSAL000056', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1207, 'IP-SSAL000048', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1208, 'IP-SSAL000050', 'Full deit', 'Na', '150ml water', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1209, 'IP-SSAL000049', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1210, 'IP-SSAL000047', 'Full deit', 'Na', '150ml water', '', '', '2023-07-25', '2023-07-25 10:30 PM', 0, '00035'),
(1211, 'IP-SSAL000051', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:45 PM', 0, '00035'),
(1212, 'IP-SSAL000055', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-25', '2023-07-25 10:45 PM', 0, '00035'),
(1213, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 02:45 PM', 0, '00032'),
(1214, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 02:45 PM', 0, '00032'),
(1215, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 02:45 PM', 0, '00032'),
(1216, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1217, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1218, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1219, 'IP-SSAL000038', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1220, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1221, 'IP-SSAL000060', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1222, 'IP-SSAL000064', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1223, 'IP-SSAL000065', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 03:00 PM', 0, '00032'),
(1224, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, coffee ', '', '', '2023-07-26', '2023-07-26 04:15 PM', 0, '00033'),
(1225, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 04:15 PM', 0, '00033'),
(1226, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-26', '2023-07-26 04:15 PM', 0, '00033'),
(1227, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-26', '2023-07-26 04:15 PM', 0, '00033'),
(1228, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 04:15 PM', 0, '00033'),
(1229, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 04:30 PM', 0, '00033'),
(1230, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', '900 ml water,2 cup tea', '', '', '2023-07-26', '2023-07-26 04:30 PM', 0, '00033'),
(1231, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 04:45 PM', 0, '00033'),
(1232, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 04:45 PM', 0, '00033'),
(1233, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 04:45 PM', 0, '00033'),
(1234, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-26', '2023-07-26 04:45 PM', 0, '00033'),
(1235, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:00 PM', 0, '00033'),
(1236, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:00 PM', 0, '00033'),
(1237, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:00 PM', 0, '00033'),
(1238, 'IP-SSAL000061', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:00 PM', 0, '00033'),
(1239, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:15 PM', 0, '00033'),
(1240, 'IP-SSAL000062', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:15 PM', 0, '00033'),
(1241, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:15 PM', 0, '00033'),
(1242, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:30 PM', 0, '00033'),
(1243, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-26', '2023-07-26 05:30 PM', 0, '00033'),
(1244, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:30 PM', 0, '00035'),
(1245, 'IP-SSAL000054', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:30 PM', 0, '00035'),
(1246, 'IP-SSAL000062', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:30 PM', 0, '00035'),
(1247, 'IP-SSAL000059', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:30 PM', 0, '00035'),
(1248, 'IP-SSAL000056', 'Full deit', 'Na', '150ml water', '', '', '2023-07-26', '2023-07-26 09:30 PM', 0, '00035'),
(1249, 'IP-SSAL000048', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1250, 'IP-SSAL000050', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1251, 'IP-SSAL000049', 'Full deit', 'Na', '600ml', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1252, 'IP-SSAL000047', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1253, 'IP-SSAL000051', 'Full deit lunch', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1254, 'IP-SSAL000044', 'Ensure milk ', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1255, 'IP-SSAL000044', 'Ensure milk ', 'Na', '150ml water', '', '', '2023-07-26', '2023-07-26 11:15 PM', 0, '00035'),
(1256, 'IP-SSAL000062', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1257, 'IP-SSAL000061', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 09:45 PM', 0, '00035'),
(1258, 'IP-SSAL000041', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 10:00 PM', 0, '00035'),
(1259, 'IP-SSAL000045', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 10:00 PM', 0, '00035');
INSERT INTO `iop_intake_record` (`intake_id`, `iop_id`, `particulars`, `IV_fluids`, `oral`, `no_stool`, `no_urine`, `dDate`, `dDateTime`, `InActive`, `cPreparedBy`) VALUES
(1260, 'IP-SSAL000045', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 10:00 PM', 0, '00035'),
(1261, 'IP-SSAL000055', 'Full deit lunch', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 10:00 PM', 0, '00035'),
(1262, 'IP-SSAL000043', 'Full deit lunch', 'Na', '150ml water', '', '', '2023-07-26', '2023-07-26 10:00 PM', 0, '00035'),
(1263, 'IP-SSAL000058', 'Lunch', 'Na', '150ml waters', '', '', '2023-07-26', '2023-07-26 10:00 PM', 0, '00035'),
(1264, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1265, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1266, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1267, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1268, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1269, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1270, 'IP-SSAL000038', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1271, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:15 PM', 0, '00025'),
(1272, 'IP-SSAL000060', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:30 PM', 0, '00025'),
(1273, 'IP-SSAL000065', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:30 PM', 0, '00025'),
(1274, 'IP-SSAL000064', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-26', '2023-07-26 10:30 PM', 0, '00025'),
(1275, 'IP-SSAL000061', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 05:45 PM', 0, '00033'),
(1276, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 05:45 PM', 0, '00033'),
(1277, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 06:15 PM', 0, '00033'),
(1278, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 06:15 PM', 0, '00033'),
(1279, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water , coffee ', '', '', '2023-07-27', '2023-07-27 06:30 PM', 0, '00033'),
(1280, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-27', '2023-07-27 06:45 PM', 0, '00033'),
(1281, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,orange juice,dal water', 'Na', 'Water ', '', '', '2023-07-27', '2023-07-27 06:45 PM', 0, '00033'),
(1282, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 06:45 PM', 0, '00033'),
(1283, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 06:45 PM', 0, '00033'),
(1284, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 07:00 PM', 0, '00033'),
(1285, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00033'),
(1286, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1287, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1288, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1289, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1290, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1291, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1292, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1293, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00033'),
(1294, 'IP-SSAL000060', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:15 PM', 0, '00032'),
(1295, 'IP-SSAL000065', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:30 PM', 0, '00032'),
(1296, 'IP-SSAL000064', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 07:30 PM', 0, '00032'),
(1297, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-27', '2023-07-27 07:30 PM', 0, '00033'),
(1298, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:30 PM', 0, '00025'),
(1299, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:30 PM', 0, '00025'),
(1300, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:30 PM', 0, '00025'),
(1301, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:30 PM', 0, '00025'),
(1302, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:30 PM', 0, '00025'),
(1303, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:30 PM', 0, '00025'),
(1304, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:45 PM', 0, '00025'),
(1305, 'IP-SSAL000060', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:45 PM', 0, '00025'),
(1306, 'IP-SSAL000064', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:45 PM', 0, '00025'),
(1307, 'IP-SSAL000065', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-27', '2023-07-27 09:45 PM', 0, '00025'),
(1308, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 10:45 PM', 0, '00035'),
(1309, 'IP-SSAL000056', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:15 PM', 0, '00035'),
(1310, 'IP-SSAL000050', 'Full deit', 'Na', '150ml water', '', '', '2023-07-28', '2023-07-28 12:30 AM', 0, '00035'),
(1311, 'IP-SSAL000049', 'Full deit', 'Na', '150ml water', '', '', '2023-07-27', '2023-07-27 10:30 PM', 0, '00035'),
(1312, 'IP-SSAL000049', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 10:45 PM', 0, '00035'),
(1313, 'IP-SSAL000047', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:00 PM', 0, '00035'),
(1314, 'IP-SSAL000051', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:00 PM', 0, '00035'),
(1315, 'IP-SSAL000044', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:30 PM', 0, '00035'),
(1316, 'IP-SSAL000044', 'Ensure powder', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 09:15 PM', 0, '00035'),
(1317, 'IP-SSAL000061', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:30 PM', 0, '00035'),
(1318, 'IP-SSAL000045', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:30 PM', 0, '00035'),
(1319, 'IP-SSAL000041', 'Full deit', 'Na', '150ml water', '', '', '2023-07-27', '2023-07-27 11:15 PM', 0, '00035'),
(1320, 'IP-SSAL000042', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:15 PM', 0, '00035'),
(1321, 'IP-SSAL000055', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:30 PM', 0, '00035'),
(1322, 'IP-SSAL000058', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-27', '2023-07-27 11:30 PM', 0, '00035'),
(1323, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:30 PM', 0, '00032'),
(1324, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:30 PM', 0, '00032'),
(1325, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:30 PM', 0, '00032'),
(1326, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1327, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1328, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1329, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1330, 'IP-SSAL000060', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1331, 'IP-SSAL000064', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1332, 'IP-SSAL000065', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-28', '2023-07-28 03:45 PM', 0, '00032'),
(1333, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:15 PM', 0, '00033'),
(1334, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:15 PM', 0, '00033'),
(1335, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-28', '2023-07-28 04:15 PM', 0, '00033'),
(1336, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,dal water', 'Na', 'Water ', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1337, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, milk ', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1338, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1339, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1340, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'Na', 'Water,2cup tea', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1341, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water , coffee ', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1342, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1343, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1344, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:30 PM', 0, '00033'),
(1345, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-28', '2023-07-28 04:45 PM', 0, '00033'),
(1346, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:45 PM', 0, '00033'),
(1347, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:45 PM', 0, '00033'),
(1348, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:45 PM', 0, '00033'),
(1349, 'IP-SSAL000062', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:45 PM', 0, '00033'),
(1350, 'IP-SSAL000061', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-28', '2023-07-28 04:45 PM', 0, '00033'),
(1351, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1352, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1353, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1354, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1355, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1356, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1357, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1358, 'IP-SSAL000060', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1359, 'IP-SSAL000064', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1360, 'IP-SSAL000065', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 05:15 PM', 0, '00032'),
(1361, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 05:30 PM', 0, '00033'),
(1362, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 05:45 PM', 0, '00033'),
(1363, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, milk ', '', '', '2023-07-29', '2023-07-29 05:45 PM', 0, '00033'),
(1364, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,,dal water', 'Na', 'Water ', '', '', '2023-07-29', '2023-07-29 05:45 PM', 0, '00033'),
(1365, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, milk ', '', '', '2023-07-29', '2023-07-29 05:45 PM', 0, '00033'),
(1366, 'IP-SSAL000045', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea, milk ', '', '', '2023-07-29', '2023-07-29 05:45 PM', 0, '00033'),
(1367, 'IP-SSAL000051', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 05:45 PM', 0, '00033'),
(1368, 'IP-SSAL000050', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1369, 'IP-SSAL000049', 'Breakfast,lunch, snacks ', 'inj.orofer fcm500mg+100ml', 'Water 1000 ml+2cup tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1370, 'IP-SSAL000048', 'Breakfast,lunch, snacks ', 'Na', 'Water, tea, coffee ', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1371, 'IP-SSAL000047', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1372, 'IP-SSAL000046', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1373, 'IP-SSAL000054', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1374, 'IP-SSAL000055', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1375, 'IP-SSAL000056', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:00 PM', 0, '00033'),
(1376, 'IP-SSAL000058', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:15 PM', 0, '00033'),
(1377, 'IP-SSAL000059', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:15 PM', 0, '00033'),
(1378, 'IP-SSAL000062', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:15 PM', 0, '00033'),
(1379, 'IP-SSAL000061', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-29', '2023-07-29 06:15 PM', 0, '00033'),
(1380, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1381, 'IP-SSAL000054', 'Full deit', 'Na', '150ml water', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1382, 'IP-SSAL000062', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1383, 'IP-SSAL000059', 'Full deit', 'Na', '150ml water', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1384, 'IP-SSAL000056', 'Full deit', 'Na', '150ml water', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1385, 'IP-SSAL000056', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1386, 'IP-SSAL000049', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1387, 'IP-SSAL000047', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:00 PM', 0, '00035'),
(1388, 'IP-SSAL000051', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00035'),
(1389, 'IP-SSAL000044', 'Eusure', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 09:30 PM', 0, '00035'),
(1390, 'IP-SSAL000044', 'Eusure milk', 'Na', '150ml water', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00035'),
(1391, 'IP-SSAL000061', 'Full deit', 'Na', '150ml water', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00035'),
(1392, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00025'),
(1393, 'IP-SSAL000042', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00035'),
(1394, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00025'),
(1395, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00025'),
(1396, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00025'),
(1397, 'IP-SSAL000045', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00035'),
(1398, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:15 PM', 0, '00025'),
(1399, 'IP-SSAL000043', 'Full deit', 'Na', '150ml water', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00035'),
(1400, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00025'),
(1401, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00025'),
(1402, 'IP-SSAL000058', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00035'),
(1403, 'IP-SSAL000060', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00025'),
(1404, 'IP-SSAL000064', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00025'),
(1405, 'IP-SSAL000055', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00035'),
(1406, 'IP-SSAL000065', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-29', '2023-07-29 10:30 PM', 0, '00025'),
(1407, 'IP-SSAL000041', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-30', '2023-07-30 06:00 PM', 0, '00033'),
(1408, 'IP-SSAL000042', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea', '', '', '2023-07-30', '2023-07-30 06:00 PM', 0, '00033'),
(1409, 'IP-SSAL000043', 'Breakfast,lunch, snacks ', 'Na', 'Water ,tea,milk', '', '', '2023-07-30', '2023-07-30 06:00 PM', 0, '00033'),
(1410, 'IP-SSAL000044', 'Ensure powder+water120ml,banan juice,e juice,dal water', 'Na', 'Water ', '', '', '2023-07-30', '2023-07-30 06:15 PM', 0, '00033'),
(1411, 'IP-SSAL000030', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:00 PM', 0, '00025'),
(1412, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:00 PM', 0, '00025'),
(1413, 'IP-SSAL000032', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1414, 'IP-SSAL000033', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1415, 'IP-SSAL000039', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1416, 'IP-SSAL000036', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1417, 'IP-SSAL000037', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1418, 'IP-SSAL000040', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1419, 'IP-SSAL000060', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1420, 'IP-SSAL000064', 'Full diet ', 'NA', 'Water ', '', '', '2023-07-30', '2023-07-30 09:15 PM', 0, '00025'),
(1421, 'IP-SSAL000046', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1422, 'IP-SSAL000054', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1423, 'IP-SSAL000062', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1424, 'IP-SSAL000059', 'Full deit', 'Na', 'Tea and water', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1425, 'IP-SSAL000056', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1426, 'IP-SSAL000048', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1427, 'IP-SSAL000050', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1428, 'IP-SSAL000049', 'Full Lunch', 'Na', '800ml water', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1429, 'IP-SSAL000047', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1430, 'IP-SSAL000051', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1431, 'IP-SSAL000058', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1432, 'IP-SSAL000061', 'Full deit', 'Na', '150ml water', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1433, 'IP-SSAL000043', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:30 PM', 0, '00035'),
(1434, 'IP-SSAL000042', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:45 PM', 0, '00035'),
(1435, 'IP-SSAL000055', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:45 PM', 0, '00035'),
(1436, 'IP-SSAL000045', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:45 PM', 0, '00035'),
(1437, 'IP-SSAL000041', 'Full deit', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:45 PM', 0, '00035'),
(1438, 'IP-SSAL000044', 'Ensure powder', 'Na', '150ml waters', '', '', '2023-07-30', '2023-07-30 09:45 PM', 0, '00035'),
(1439, 'IP-SSAL000030', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:00 PM', 0, '00032'),
(1440, 'IP-SSAL000032', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:00 PM', 0, '00032'),
(1441, 'IP-SSAL000033', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:00 PM', 0, '00032'),
(1442, 'IP-SSAL000039', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:00 PM', 0, '00032'),
(1443, 'IP-SSAL000036', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:00 PM', 0, '00032'),
(1444, 'IP-SSAL000037', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:15 PM', 0, '00032'),
(1445, 'IP-SSAL000040', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:15 PM', 0, '00032'),
(1446, 'IP-SSAL000065', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:15 PM', 0, '00032'),
(1447, 'IP-SSAL000064', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:15 PM', 0, '00032'),
(1448, 'IP-SSAL000060', 'Regular breakfast and lunch ', 'NA', 'Water ', '', '', '2023-07-31', '2023-07-31 01:15 PM', 0, '00032');

-- --------------------------------------------------------

--
-- Table structure for table `iop_laboratory`
--

CREATE TABLE `iop_laboratory` (
  `io_lab_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `laboratory_id` varchar(255) DEFAULT NULL,
  `findings` text NOT NULL,
  `result` text NOT NULL,
  `doctor` int(11) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_laboratory`
--

INSERT INTO `iop_laboratory` (`io_lab_id`, `iop_id`, `dDate`, `dDateTime`, `category_id`, `laboratory_id`, `findings`, `result`, `doctor`, `InActive`) VALUES
(7, '0', '2023-07-01', '2023-07-01 02:30 PM', 3, '15', '', '', 27, 0),
(9, 'IP-SSAL000030', '2023-08-03', '2023-08-03 10:45 PM', 2, '30', '', '', 23, 0),
(10, 'IP-SSAL000052', '2023-09-13', '2023-09-13 05:45 PM', 7, 'sample test', '', '', 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_medication`
--

CREATE TABLE `iop_medication` (
  `iop_med_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `instruction` text NOT NULL,
  `advice` text NOT NULL,
  `days` int(2) NOT NULL,
  `total_qty` int(5) NOT NULL,
  `InActive` int(1) NOT NULL,
  `dDate` datetime NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_medication`
--

INSERT INTO `iop_medication` (`iop_med_id`, `iop_id`, `medicine_id`, `instruction`, `advice`, `days`, `total_qty`, `InActive`, `dDate`, `cPreparedBy`) VALUES
(1, 'IP-SSAL000014', 0, '{\"1\":{\"date\":[\"2022-10-31T12:04\"],\"qty\":[\"\"],\"medic\":[\"abcd test1\"],\"adv\":[\"sd\"]}}', '', 0, 0, 0, '2022-10-31 12:00:44', '00014'),
(2, 'IP-SSAL000014', 0, '{\"1\":{\"date\":[\"2022-10-31T16:29\"],\"qty\":[\"5\"],\"medic\":[\"abcd test1\"],\"adv\":[\"demo\"]}}', '', 0, 0, 0, '2022-10-31 04:29:42', '00014'),
(3, 'IP-SSAL000015', 0, '{\"1\":{\"date\":[\"2022-11-01T00:50\"],\"qty\":[\"2\"],\"medic\":[\"test\"],\"adv\":[\"test\"]}}', '', 0, 0, 0, '2022-11-01 12:49:11', '00014'),
(4, 'IP-SSAL000015', 2, 'test', 'test', 2, 4, 0, '2022-11-07 12:06:40', '00008'),
(5, 'IP-SSAL000016', 5, 'demo', 'demo', 1, 1, 0, '2023-04-18 11:34:34', '00002'),
(6, 'IP-SSAL000018', 0, '{\"1\":{\"date\":[\"2023-04-18T16:32\"],\"qty\":[\"1\"],\"medic\":[\"abcd test1\"],\"adv\":[\"assa\"]},\"2\":{\"date\":[\"2023-04-18T16:33\"],\"qty\":[\"1\"],\"medic\":[\"Test demo 1\"],\"adv\":[\"dds\"]}}', '', 0, 0, 0, '2023-04-18 04:33:11', '00014'),
(7, 'IP-SSAL000020', 0, '{\"1\":{\"date\":[\"2023-04-20T17:31\"],\"qty\":[\"1\"],\"medic\":[\"22\"],\"adv\":[\"drfd\"]}}', '', 0, 0, 0, '2023-04-20 05:31:38', '00014'),
(8, 'IP-SSAL000029', 2, '', '', 3, 3, 0, '2023-05-31 03:54:38', '00026'),
(9, 'IP-SSAL000029', 6, '', '', 5, 5, 0, '2023-05-31 03:55:08', '00026'),
(10, 'IP-SSAL000052', 0, '{\"1\":{\"date\":[\"2023-07-01T14:31\"],\"qty\":[\"2\"],\"medic\":[\"Dolo 650\"],\"adv\":[\"BD\"]}}', '', 0, 0, 0, '2023-07-01 02:31:52', '00027'),
(11, 'IP-SSAL000052', 6, 'Thrice a day', 'Done', 5, 15, 0, '2023-07-01 03:03:28', '00026');

-- --------------------------------------------------------

--
-- Table structure for table `iop_medicine`
--

CREATE TABLE `iop_medicine` (
  `iop_med_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `dose` varchar(255) NOT NULL,
  `total_qty` int(5) NOT NULL,
  `advice` varchar(500) NOT NULL,
  `InActive` int(1) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `cPreparedBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iop_medicine`
--

INSERT INTO `iop_medicine` (`iop_med_id`, `iop_id`, `medicine_name`, `from_date`, `to_date`, `dose`, `total_qty`, `advice`, `InActive`, `added_date`, `updated_date`, `cPreparedBy`) VALUES
(1, 'IP-SSAL000052', 'Dolo 650', '2023-07-12', '2023-08-31', 'M,A,N', 1, '', 0, '2023-07-12 12:39:25', NULL, '00027'),
(2, 'IP-SSAL000052', 'Pan D', '2023-07-13', '2023-11-29', '', 1, '', 0, '2023-07-12 03:01:31', '2023-09-16 08:49:03', '00028'),
(3, 'IP-SSAL000052', 'Doxy 1', '2023-07-13', '2023-11-30', 'M,N', 1, '', 0, '2023-07-13 12:06:10', '2023-09-16 08:48:17', '00028'),
(4, 'IP-SSAL000049', 'Tab.Nikoran 5mg TDS', '2023-07-24', '2023-09-30', 'M,A,N', 10, '', 0, '2023-07-24 03:54:40', NULL, '00027'),
(5, 'IP-SSAL000053', 'crocin', '2023-07-24', '2023-07-28', 'M,N', 10, '', 0, '2023-07-24 04:48:15', NULL, '00027'),
(6, 'IP-SSAL000053', 'Syndopa  250mg', '2023-07-24', '2023-09-24', 'M,A,N', 10, '', 0, '2023-07-24 04:50:22', NULL, '00027'),
(7, 'IP-SSAL000053', 'Ciplox TZ', '2023-07-25', '2023-07-31', 'M,N', 10, '', 0, '2023-07-25 12:36:30', '2023-07-25 12:38:04', '00027'),
(8, 'IP-SSAL000037', 'T. Cilakar 10 mg', '2023-07-25', '2023-10-25', 'M', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(9, 'IP-SSAL000037', 'Neurobion fort', '2023-07-25', '2023-10-25', 'M', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(10, 'IP-SSAL000037', 'Nebistar 2.5mg', '2023-07-25', '2023-10-25', 'M', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(11, 'IP-SSAL000037', 'Thyronoram 12.5 mg', '2023-07-25', '2023-10-25', 'M', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(12, 'IP-SSAL000037', 'Crocin 650 mg', '2023-07-25', '2023-10-25', 'A,N', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(13, 'IP-SSAL000037', 'Brufen', '2023-07-25', '2023-10-25', 'M,N', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(14, 'IP-SSAL000037', 'T. Shelcal 500 mg', '2023-07-25', '2023-10-25', 'M', 10, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(15, 'IP-SSAL000037', 'Sy. Adulasa', '2023-07-25', '2023-10-25', 'M,A,N', 5, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(16, 'IP-SSAL000037', 'Itone Eye drop', '2023-07-25', '2023-10-25', 'M,A,N', 2, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(17, 'IP-SSAL000037', 'Levin Inhaler', '2023-07-25', '2023-10-25', 'M', 1, '', 0, '2023-07-25 12:51:08', NULL, '00023'),
(18, 'IP-SSAL000030', 'Syp.Geriforte 5ml OD', '2023-07-25', '2023-09-25', 'M', 10, '', 0, '2023-07-25 12:56:14', NULL, '00023'),
(19, 'IP-SSAL000030', 'Tab.Cipcal 500mg 1/2 OD', '2023-07-25', '2023-09-25', 'A', 10, '', 0, '2023-07-25 12:56:14', NULL, '00023'),
(20, 'IP-SSAL000030', 'Tab.Combiflam SOS', '2023-07-25', '2023-09-25', 'M', 1, '', 0, '2023-07-25 12:56:14', NULL, '00023'),
(21, 'IP-SSAL000040', 't. bio d3', '2023-07-25', '2023-10-25', 'N', 19, '', 0, '2023-07-25 01:08:29', NULL, '00023'),
(22, 'IP-SSAL000040', 't.telma 40 mg', '2023-07-25', '2023-10-25', 'M', 10, '', 0, '2023-07-25 01:08:29', NULL, '00023'),
(23, 'IP-SSAL000040', 't.ecosprin 75/20', '2023-07-25', '2023-10-25', 'N', 18, '', 0, '2023-07-25 01:08:29', NULL, '00023'),
(24, 'IP-SSAL000040', 't.sompraz-d', '2023-07-25', '2023-10-25', 'M,N', 12, '', 0, '2023-07-25 01:08:29', NULL, '00023'),
(25, 'IP-SSAL000040', 't. stugeron 10 mg', '2023-07-25', '2023-10-25', 'N', 22, '', 0, '2023-07-25 01:08:29', NULL, '00023'),
(26, 'IP-SSAL000040', 't. stalopam 0.5 mg', '2023-07-25', '2023-10-25', 'N', 23, '', 0, '2023-07-25 01:08:29', NULL, '00023'),
(27, 'IP-SSAL000033', 't.syndopa plus', '2023-07-25', '2023-10-25', 'M,A,N', 22, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(28, 'IP-SSAL000033', 't. donamen', '2023-07-25', '2023-10-25', 'A', 23, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(29, 'IP-SSAL000033', 't.qutan 2.5', '2023-07-25', '2023-10-25', 'A', 24, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(30, 'IP-SSAL000033', 't.stamlo 5mg', '2023-07-25', '2023-10-25', 'M', 23, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(31, 'IP-SSAL000033', 't.ecosprin 75/20', '2023-07-25', '2023-10-25', 'A', 12, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(32, 'IP-SSAL000033', 't.nexpro 40', '2023-07-25', '2023-10-25', 'M', 13, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(33, 'IP-SSAL000033', 't. restyl 0.5', '2023-07-25', '2023-10-25', 'N', 24, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(34, 'IP-SSAL000033', 'syp. zincovit', '2023-07-25', '2023-10-25', 'M,N', 22, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(35, 'IP-SSAL000033', 'syp. calcimax', '2023-07-25', '2023-10-25', 'M,N', 23, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(36, 'IP-SSAL000033', 'syp. duphalac', '2023-07-25', '2023-10-25', 'N', 32, '', 0, '2023-07-25 01:25:01', NULL, '00023'),
(37, 'IP-SSAL000038', 'glycomet sr 500 mg', '2023-07-25', '2023-10-25', 'M,N', 12, '', 0, '2023-07-25 01:41:16', NULL, '00023'),
(38, 'IP-SSAL000038', 't.neomercazole 5mg', '2023-07-25', '2023-10-25', 'M', 22, '', 0, '2023-07-25 01:41:16', NULL, '00023'),
(39, 'IP-SSAL000038', 't.cardace', '2023-07-25', '2023-10-25', 'M', 23, '', 0, '2023-07-25 01:41:16', NULL, '00023'),
(40, 'IP-SSAL000038', 't.stamlo 5 mg', '2023-07-25', '2023-10-25', 'N', 22, '', 0, '2023-07-25 01:41:16', NULL, '00023'),
(41, 'IP-SSAL000038', 't. orofer xt', '2023-07-25', '2023-10-25', 'M,N', 12, '', 0, '2023-07-25 01:41:16', NULL, '00023'),
(42, 'IP-SSAL000036', 't. stamlo 5mg', '2023-07-25', '2023-10-25', 'M,N', 23, '', 0, '2023-07-25 01:51:58', NULL, '00023'),
(43, 'IP-SSAL000036', 't.cardace 5mg', '2023-07-25', '2023-10-25', 'A', 12, '', 0, '2023-07-25 01:51:58', NULL, '00023'),
(44, 'IP-SSAL000036', 't. livipil 500mg', '2023-07-25', '2023-10-25', 'M,N', 23, '', 0, '2023-07-25 01:51:58', NULL, '00023'),
(45, 'IP-SSAL000036', 't.zitamet 20/500', '2023-07-25', '2023-10-25', 'M', 23, '', 0, '2023-07-25 01:51:58', NULL, '00023'),
(46, 'IP-SSAL000059', 'T- amtas 5mg', '2023-07-26', '2023-10-26', 'M', 10, '', 0, '2023-07-26 04:15:52', NULL, '00023'),
(47, 'IP-SSAL000059', 'T-shelcal 500mg', '2023-07-26', '2023-10-26', 'A', 10, '', 0, '2023-07-26 04:15:52', NULL, '00023'),
(48, 'IP-SSAL000047', 'T-telmikind', '2023-07-26', '2023-10-26', 'M', 10, '', 0, '2023-07-26 05:25:38', NULL, '00023'),
(49, 'IP-SSAL000047', 'T- pregaba 75mg', '2023-07-26', '2023-10-26', 'M', 10, '', 0, '2023-07-26 05:25:38', NULL, '00023'),
(50, 'IP-SSAL000047', 'T- ecosprin AV 75mg', '2023-07-26', '2023-10-26', 'N', 10, '', 0, '2023-07-26 05:25:38', NULL, '00023'),
(51, 'IP-SSAL000055', 'Tab.Enam 5mg  OD', '2023-07-26', '2023-10-26', 'M', 10, '', 0, '2023-07-26 05:38:12', NULL, '00023'),
(52, 'IP-SSAL000055', 'Tab.Becozinc  OD', '2023-07-26', '2023-10-26', 'A', 10, '', 0, '2023-07-26 05:38:12', NULL, '00023'),
(53, 'IP-SSAL000055', 'Tab.Ecosprin 75mg OD', '2023-07-26', '2023-10-26', 'A', 10, '', 0, '2023-07-26 05:38:12', NULL, '00023'),
(54, 'IP-SSAL000055', 'Tab.Cipcal 500mg OD', '2023-07-26', '2023-10-26', 'A', 10, '', 0, '2023-07-26 05:38:12', NULL, '00023'),
(55, 'IP-SSAL000043', 'T- telsar beta 25mg (bd)', '2023-07-26', '2023-10-26', 'M,N', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(56, 'IP-SSAL000043', 'T- prazopress XL 5mg (bd)', '2023-07-26', '2023-10-26', 'M,N', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(57, 'IP-SSAL000043', 'T- Pioglit 15mg (od)', '2023-07-26', '2023-10-26', 'A', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(58, 'IP-SSAL000043', 'T- Nexito 20mg (od)', '2023-07-26', '2023-10-26', 'N', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(59, 'IP-SSAL000043', 'T- tonact ASP 75mg(od)', '2023-07-26', '2023-10-26', 'N', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(60, 'IP-SSAL000043', 'CAP- bio-D3 (od)', '2023-07-26', '2023-10-26', 'M', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(61, 'IP-SSAL000043', 'T- galvas 50/500mg(od)', '2023-07-26', '2023-10-26', 'A', 10, '', 0, '2023-07-26 05:53:04', NULL, '00023'),
(62, 'IP-SSAL000058', 'sodamint (bd)', '2023-07-26', '2023-10-26', 'M,N', 12, '', 0, '2023-07-26 06:08:53', NULL, '00023'),
(63, 'IP-SSAL000058', 'T- syndopa plus (bd)', '0000-00-00', '0000-00-00', 'M,N', 22, '', 0, '2023-07-26 06:08:53', NULL, '00023'),
(64, 'IP-SSAL000058', 't. autrin (od)', '2023-07-26', '2023-10-26', 'M', 10, '', 0, '2023-07-26 06:15:08', NULL, '00023'),
(65, 'IP-SSAL000058', 't.oleanz (od)', '2023-07-26', '2023-10-26', 'N', 10, '', 0, '2023-07-26 06:15:08', NULL, '00023'),
(66, 'IP-SSAL000045', 'Tab.Esogress D  OD', '2023-07-26', '2023-10-26', 'M', 23, '', 0, '2023-07-26 06:20:00', NULL, '00023'),
(67, 'IP-SSAL000045', 'Tab.Donep 5mg BD', '2023-07-26', '2023-10-26', 'M,N', 24, '', 0, '2023-07-26 06:20:00', NULL, '00023'),
(68, 'IP-SSAL000045', 'Tab.Admentas 5mg BD', '2023-07-26', '2023-10-26', 'M,N', 34, '', 0, '2023-07-26 06:20:00', NULL, '00023'),
(69, 'IP-SSAL000045', 'Tab.Restyl 0.25mg (1)HS', '2023-07-26', '2023-10-26', 'N', 12, '', 0, '2023-07-26 06:20:00', NULL, '00023'),
(70, 'IP-SSAL000048', 'T- dytor 5mg (od)', '2023-07-27', '2023-10-27', 'M', 10, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(71, 'IP-SSAL000048', 'T- storvas cv 10mg (od)', '2023-07-27', '2023-10-27', 'A', 10, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(72, 'IP-SSAL000048', 'T- cardace 5mg (od)', '2023-07-27', '2023-10-27', 'M', 10, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(73, 'IP-SSAL000048', 'T- AMLOPIN 5MG (OD)', '2023-07-27', '2023-10-27', 'N', 10, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(74, 'IP-SSAL000048', 'T- urotone 25mg (bd)', '2023-07-27', '2023-10-27', 'M,N', 12, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(75, 'IP-SSAL000048', 'T- supracal prot (od)', '2023-07-27', '2023-10-27', 'A', 11, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(76, 'IP-SSAL000048', 'T- multivite gold (od)', '2023-07-27', '2023-10-27', 'M', 12, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(77, 'IP-SSAL000048', 'T- pan-D (od)', '2023-07-27', '2023-10-27', 'M', 11, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(78, 'IP-SSAL000048', 'T- rivaban 20mg (od)', '2023-07-27', '2023-10-27', 'M', 10, '', 0, '2023-07-27 05:34:54', NULL, '00023'),
(79, 'IP-SSAL000042', 'T- erita LN 40mg(od)', '2023-07-27', '2023-10-27', 'M', 10, '', 0, '2023-07-27 05:59:03', NULL, '00023'),
(80, 'IP-SSAL000042', 'T- thyronoram 50mg (od)', '2023-07-27', '2023-10-27', 'M', 11, '', 0, '2023-07-27 05:59:03', NULL, '00023'),
(81, 'IP-SSAL000042', 'T- rosedays (od)', '2023-07-27', '2023-10-27', 'N', 12, '', 0, '2023-07-27 05:59:03', NULL, '00023'),
(82, 'IP-SSAL000042', 'T- calcitab (od)', '2023-07-27', '2023-10-27', 'M', 13, '', 0, '2023-07-27 05:59:03', NULL, '00023'),
(83, 'IP-SSAL000042', 'T-  nevup (od)', '2023-07-27', '2023-10-27', 'N', 13, '', 0, '2023-07-27 05:59:03', NULL, '00023'),
(84, 'IP-SSAL000042', 'T- LNBI CDC  10MG (od)', '2023-07-27', '2023-10-27', 'N', 13, '', 0, '2023-07-27 05:59:03', NULL, '00023'),
(85, 'IP-SSAL000056', 'T- symphytum off 30mg (bd)', '2023-07-27', '2023-10-27', 'M,N', 10, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(86, 'IP-SSAL000056', 'T- arnica M 200mg (bd)', '2023-07-27', '2023-10-27', 'M,N', 12, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(87, 'IP-SSAL000056', 'T-quicfarc (od)', '2023-07-27', '2023-10-27', 'A', 12, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(88, 'IP-SSAL000056', 'T- proxym ER (od)', '2023-07-27', '2023-10-27', 'N', 13, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(89, 'IP-SSAL000056', 'T- bonestar K2 (od)', '2023-07-27', '2023-10-27', 'N', 11, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(90, 'IP-SSAL000056', 'calcinase nasal spray (od)', '2023-07-27', '2023-10-27', 'A', 13, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(91, 'IP-SSAL000056', 'T- zolfresh 5mg (od)', '2023-07-27', '2023-10-27', 'N', 13, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(92, 'IP-SSAL000056', 'T- stoplos A plus ( once a week)', '2023-07-27', '2023-10-27', 'M', 12, '', 0, '2023-07-27 06:14:26', NULL, '00023'),
(93, 'IP-SSAL000062', 'T- CTD 6.25MG (od)', '2023-07-27', '2023-10-27', 'M', 11, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(94, 'IP-SSAL000062', 'T- stamlo 5mg (od)', '2023-07-27', '2023-10-27', 'N', 12, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(95, 'IP-SSAL000062', 'T- ramistar 2.5mg (od)', '2023-07-27', '2023-10-27', 'N', 13, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(96, 'IP-SSAL000062', 'T- tripaleacal forte (od)', '2023-07-27', '2023-10-27', 'M', 11, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(97, 'IP-SSAL000062', 'T- vertin 16mg(od)', '2023-07-27', '2023-10-27', 'M', 12, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(98, 'IP-SSAL000062', 'T- MCBM 69mg (od)', '2023-07-27', '2023-10-27', 'A', 13, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(99, 'IP-SSAL000062', 'T- bilovas (od)', '2023-07-27', '2023-10-27', 'M', 13, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(100, 'IP-SSAL000062', 'T- foracort 200mg', '2023-07-27', '2023-10-27', 'M,A,N', 13, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(101, 'IP-SSAL000062', 'SYP- notropil (bd)', '2023-07-27', '2023-10-27', 'M,N', 14, '', 0, '2023-07-27 06:29:51', NULL, '00023'),
(102, 'IP-SSAL000061', 'T- levothyroxine 50mg (od)', '2023-07-27', '2023-10-27', 'M', 12, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(103, 'IP-SSAL000061', 'T- glimepride 1mg (od)', '2023-07-27', '2023-10-27', 'M', 11, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(104, 'IP-SSAL000061', 'T-  metformin 500mg (bd)', '2023-07-27', '2023-10-27', 'M,N', 13, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(105, 'IP-SSAL000061', 'T- galvas met 50/500mg (od)', '2023-07-27', '2023-10-27', 'A', 14, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(106, 'IP-SSAL000061', 'T- senna-docusal (od)', '2023-07-27', '2023-10-27', 'N', 13, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(107, 'IP-SSAL000061', 'T- b.comlex (od)', '2023-07-27', '2023-10-27', 'A', 11, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(108, 'IP-SSAL000061', 'T- vit-E (od)', '2023-07-27', '2023-10-27', 'N', 11, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(109, 'IP-SSAL000061', 'dorzolamide HCI eye drop(bd)', '2023-07-27', '2023-09-27', 'M,N', 12, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(110, 'IP-SSAL000061', 'latanoprost phthalmic drop (od)', '2023-07-27', '2023-09-27', 'N', 11, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(111, 'IP-SSAL000061', 'clobetasol propionatr crem (od)', '2023-07-27', '2023-09-27', 'M', 11, '', 0, '2023-07-27 06:49:04', NULL, '00023'),
(112, 'IP-SSAL000053', 'Evion (20mg)', '2023-07-28', '2023-10-28', 'M', 60, '', 0, '2023-07-28 02:05:18', NULL, '00023'),
(113, 'IP-SSAL000041', 'T.levipil-500mg', '2023-07-28', '2023-10-28', 'M,A,N', 22, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(114, 'IP-SSAL000041', 't.fabuset-40', '2023-07-28', '2023-10-28', 'M', 23, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(115, 'IP-SSAL000041', 'T.neurobion fort', '2023-07-28', '2023-10-28', 'M', 33, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(116, 'IP-SSAL000041', 'T.benalgis', '2023-07-28', '2023-10-28', 'M', 23, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(117, 'IP-SSAL000041', 'T.Prostina', '2023-07-28', '2023-10-28', 'M,A,N', 12, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(118, 'IP-SSAL000041', 'Ecosprin AV75 MG', '2023-07-28', '2023-10-28', 'A', 45, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(119, 'IP-SSAL000041', 'T.Revetol', '2023-07-28', '2023-07-28', 'M', 55, '', 0, '2023-07-28 02:29:22', NULL, '00023'),
(120, 'IP-SSAL000039', 'T.Amlong-5mg', '2023-07-28', '2023-10-28', 'M', 55, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(121, 'IP-SSAL000039', 'T.Nibicard-2.5mg', '2023-07-28', '2023-10-28', 'N', 30, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(122, 'IP-SSAL000039', 'T.Becasul', '2023-07-28', '2023-10-28', 'N', 33, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(123, 'IP-SSAL000039', 'T.Sompraz-D', '2023-07-28', '2023-10-28', 'M', 44, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(124, 'IP-SSAL000039', 'T.Shelcal-500 mg', '2023-07-28', '2023-10-28', 'M', 44, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(125, 'IP-SSAL000039', 'T.Mycofit 500 mg', '2023-07-28', '2023-10-28', 'M,N', 33, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(126, 'IP-SSAL000039', 'T.Ecosprin', '2023-07-28', '2023-10-28', 'M', 22, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(127, 'IP-SSAL000039', 'T.colpitab', '2023-07-28', '2023-10-28', 'M', 22, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(128, 'IP-SSAL000039', 'T.Defcort-6mg', '2023-07-28', '2023-10-28', 'M,N', 88, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(129, 'IP-SSAL000039', 'T.Antioxide', '2023-07-28', '2023-10-28', 'N', 44, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(130, 'IP-SSAL000039', 'T.Nintib 100mg', '2023-07-28', '2023-10-28', 'N', 33, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(131, 'IP-SSAL000039', 'T.Neurobion fort', '2023-07-28', '2023-10-28', 'N', 22, '', 0, '2023-07-28 10:50:42', NULL, '00023'),
(132, 'IP-SSAL000032', 'T.Amantral', '2023-07-28', '2023-10-28', 'M', 77, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(133, 'IP-SSAL000032', 'T.Pan 40mg', '2023-07-28', '2023-10-28', 'M', 44, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(134, 'IP-SSAL000032', 'T.Galantin 100 mg', '2023-07-28', '2023-10-28', 'M,N', 33, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(135, 'IP-SSAL000032', 'T.Homin D3', '2023-07-28', '2023-10-28', 'A', 11, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(136, 'IP-SSAL000032', 'T.Ultracet', '2023-07-28', '2023-10-28', 'N', 22, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(137, 'IP-SSAL000032', 'T.Remaylin- AX', '2023-07-28', '2023-10-28', 'N', 33, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(138, 'IP-SSAL000032', 'T.Eliquies', '2023-07-28', '2023-10-28', 'A', 22, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(139, 'IP-SSAL000032', 'T.Meloset 3', '2023-07-28', '2023-10-28', 'N', 11, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(140, 'IP-SSAL000032', 'T.Liofen ', '2023-07-28', '2023-10-28', 'N', 22, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(141, 'IP-SSAL000032', 'T.Restly 0.5 mg', '2023-07-28', '2023-10-28', 'N', 33, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(142, 'IP-SSAL000032', 'T.Tayo ', '2023-07-28', '2023-10-28', 'M', 11, '', 0, '2023-07-28 11:08:14', NULL, '00023'),
(143, 'IP-SSAL000050', 'T.Levipil 500mg', '2023-07-28', '2023-10-28', 'M,N', 88, '', 0, '2023-07-28 11:17:15', NULL, '00023'),
(144, 'IP-SSAL000050', 'T.Stamlo 5mg', '2023-07-28', '2023-10-28', 'M,N', 22, '', 0, '2023-07-28 11:17:15', NULL, '00023'),
(145, 'IP-SSAL000050', 'T. Homin D3', '2023-07-28', '2023-10-28', 'A', 33, '', 0, '2023-07-28 11:17:15', NULL, '00023'),
(146, 'IP-SSAL000060', 'T.Metpure-xl 25', '0000-00-00', '2023-11-28', 'M', 22, '', 0, '2023-07-28 11:26:49', NULL, '00023'),
(147, 'IP-SSAL000060', 'T.Jalar-M', '2023-07-28', '2023-10-28', 'M,N', 33, '', 0, '2023-07-28 11:26:49', NULL, '00023'),
(148, 'IP-SSAL000060', 'T.Resdon ', '2023-07-28', '2023-10-28', 'A', 33, '', 0, '2023-07-28 11:26:49', NULL, '00023'),
(149, 'IP-SSAL000060', 'T.Ecosprin gold 20 mg', '2023-07-28', '2023-10-28', 'N', 33, '', 0, '2023-07-28 11:26:49', NULL, '00023'),
(150, 'IP-SSAL000060', 'T.Revotril 0.5 mg', '2023-07-28', '2023-10-28', 'N', 66, '', 0, '2023-07-28 11:26:49', NULL, '00023'),
(151, 'IP-SSAL000060', 'ing-MIXTARD 10 UNIT', '2023-07-28', '2023-10-28', 'M,N', 33, '', 0, '2023-07-28 11:26:49', NULL, '00023'),
(152, 'IP-SSAL000065', 'T.Aricep 5 mg', '2023-07-28', '2023-10-28', 'M,A', 22, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(153, 'IP-SSAL000065', 'T.Nicardia 10mg', '2023-07-28', '2023-10-28', 'M', 22, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(154, 'IP-SSAL000065', 'T.Rosavel 5mg', '2023-07-28', '2023-10-28', 'N', 33, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(155, 'IP-SSAL000065', 'T.Shelcal 500 mg', '2023-07-28', '2023-10-28', 'M', 33, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(156, 'IP-SSAL000065', 'T.Evion', '2023-07-28', '2023-10-28', 'M', 88, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(157, 'IP-SSAL000065', 'T.Ashvagandha', '2023-07-28', '2023-10-28', 'M', 44, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(158, 'IP-SSAL000065', 'T. Becadexamin', '2023-07-28', '2023-10-28', 'N', 44, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(159, 'IP-SSAL000065', 'T,Nuhenz D', '2023-07-28', '2023-10-28', 'A', 11, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(160, 'IP-SSAL000065', 'T. Vitamin D 10000 UNIT  ONCE WEEK', '2023-07-28', '2023-10-28', 'M', 33, '', 0, '2023-07-28 11:38:15', NULL, '00023'),
(161, 'IP-SSAL000064', 'T.Vildaphage -M', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(162, 'IP-SSAL000064', 'T.Ecosprin 75 mg', '2023-07-29', '2023-10-29', 'M', 33, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(163, 'IP-SSAL000064', 'T.Shelcal 500 mg', '2023-07-29', '2023-10-29', 'M', 22, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(164, 'IP-SSAL000064', 'T.Evion', '2023-07-29', '2023-10-29', 'M', 33, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(165, 'IP-SSAL000064', 'T.Rosvel 10 mg', '2023-07-29', '2023-10-29', 'N', 88, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(166, 'IP-SSAL000064', 'T.Becadexamine', '2023-07-29', '2023-10-29', 'N', 33, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(167, 'IP-SSAL000064', 'T.Ashvagandha', '2023-07-29', '2023-10-29', 'M,N', 66, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(168, 'IP-SSAL000064', 'T.Duzella 20 mg', '2023-07-29', '2023-10-29', 'N', 55, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(169, 'IP-SSAL000064', 'T. Uprise D3 60 K ONCE AWEEK', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(170, 'IP-SSAL000064', 'T.Alzil- M ', '2023-07-29', '2023-10-29', 'M,N', 11, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(171, 'IP-SSAL000064', 'T.Syndopa pluse 125 mg', '2023-07-29', '2023-10-29', 'M,A,N', 33, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(172, 'IP-SSAL000064', 'T. Syndopa CR 125 MG', '2023-07-29', '2023-10-29', 'N', 99, '', 0, '2023-07-29 12:20:00', NULL, '00023'),
(173, 'IP-SSAL000054', 'T.Eliquies 2.5 mg', '2023-07-29', '2023-10-29', 'M,N', 22, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(174, 'IP-SSAL000054', 'T.Silodol 4 mg', '2023-07-29', '2023-10-29', 'N', 33, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(175, 'IP-SSAL000054', 'T. Primox 25 mg', '2023-07-29', '2023-10-29', 'N', 66, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(176, 'IP-SSAL000054', 'T. Concoreo 2.5 mg', '2023-07-29', '2023-10-29', 'M,N', 99, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(177, 'IP-SSAL000054', 'T.Tolvasea 15 mg', '2023-07-29', '2023-10-29', 'N', 33, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(178, 'IP-SSAL000054', 'T.Vymada 50 mg', '2023-07-29', '2023-10-29', 'M,N', 99, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(179, 'IP-SSAL000054', 'T.Planep 50 mg', '2023-07-29', '2023-10-29', 'M', 88, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(180, 'IP-SSAL000054', 'T.Atorvastin 20 mg', '2023-07-29', '2023-10-29', 'N', 77, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(181, 'IP-SSAL000054', 'T.Duplo 10 mg', '2023-07-29', '2023-10-29', 'A', 44, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(182, 'IP-SSAL000054', 'T.Lasix 20 mg', '2023-07-29', '2023-10-29', 'M', 55, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(183, 'IP-SSAL000054', 'T.Volix 0.2 mg', '2023-07-29', '2023-10-29', 'A', 77, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(184, 'IP-SSAL000054', 'T. Restly 0.25 mg', '2023-07-29', '2023-10-29', 'N', 88, '', 0, '2023-07-29 12:48:11', NULL, '00023'),
(185, 'IP-SSAL000046', 'T.Thyronorm 75 mg', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(186, 'IP-SSAL000046', 'T.Met-  XL3D', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(187, 'IP-SSAL000046', 'T.Pan 40mg', '2023-07-29', '2023-10-29', 'M', 55, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(188, 'IP-SSAL000046', 'T. Eption 100 mg', '2023-07-29', '2023-10-29', 'M,N', 22, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(189, 'IP-SSAL000046', 'T. Aztor 75 mg', '2023-07-29', '2023-10-29', 'N', 33, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(190, 'IP-SSAL000046', 'T.Allegra-M', '2023-07-29', '2023-10-29', 'M', 11, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(191, 'IP-SSAL000046', 'T. Evion 300 mg', '2023-07-29', '2023-10-29', 'M', 22, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(192, 'IP-SSAL000046', 'T. Shelcal 500 mg', '2023-07-29', '2023-10-29', 'N', 44, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(193, 'IP-SSAL000046', 'T. Beflex fort', '2023-07-29', '2023-10-29', 'M,N', 44, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(194, 'IP-SSAL000046', 'T.Levipil 500mg', '2023-07-29', '2023-10-29', 'M,N', 99, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(195, 'IP-SSAL000046', 'T. Cellin 500 mg', '2023-07-29', '2023-10-29', 'M,N', 33, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(196, 'IP-SSAL000046', 'T. Neprosyn 250 mg', '2023-07-29', '2023-10-29', 'M,N', 44, '', 0, '2023-07-29 12:59:53', NULL, '00023'),
(197, 'IP-SSAL000051', 'T.Syndopa puise 125 mg', '2023-07-29', '2023-10-29', 'M,A,N', 33, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(198, 'IP-SSAL000051', 'T. Cilacar 10 mg', '2023-07-29', '2023-10-29', 'M,N', 23, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(199, 'IP-SSAL000051', 'T.Levipil 500mg', '2023-07-29', '2023-10-29', 'M,N', 88, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(200, 'IP-SSAL000051', 'T.Moxvaid 8 mg', '2023-07-29', '2023-10-29', 'N', 99, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(201, 'IP-SSAL000051', 'T. Betheran 25 mg', '2023-07-29', '2023-10-29', 'M,N', 55, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(202, 'IP-SSAL000051', 'T.VOlib 0.3 mg', '2023-07-29', '2023-10-29', 'A,N', 11, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(203, 'IP-SSAL000051', 'T.Trajenta Duo-2.5/500', '2023-07-29', '2023-10-29', 'M,N', 77, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(204, 'IP-SSAL000051', 'T.Niftas 100 mg', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(205, 'IP-SSAL000051', 'inj-novarapid -4unit', '2023-07-29', '2023-10-29', 'M', 99, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(206, 'IP-SSAL000051', 'inj-lantus-8unit', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 01:16:37', NULL, '00023'),
(207, 'IP-SSAL000044', 'T.Lasix 20 mg', '2023-07-29', '2023-10-29', 'M', 88, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(208, 'IP-SSAL000044', 'T.Atorvastin ', '2023-07-29', '2023-10-29', 'N', 33, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(209, 'IP-SSAL000044', 'T.Digoxin 25 mg', '2023-07-29', '2023-10-29', 'M', 66, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(210, 'IP-SSAL000044', 'T. Midodirne 25mg', '2023-07-29', '2023-10-29', 'M,N', 22, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(211, 'IP-SSAL000044', 'T. Amantrec 100 mg', '2023-07-29', '2023-10-29', 'M,N', 44, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(212, 'IP-SSAL000044', 'T.Syndopa pulse 2 hurly', '2023-07-29', '2023-10-29', 'M,A,N', 11, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(213, 'IP-SSAL000044', 'T.Sompraz D', '2023-07-29', '2023-10-29', 'M,N', 44, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(214, 'IP-SSAL000044', 'T. Hyponat0.15 mg', '2023-07-29', '2023-10-29', 'M,N', 66, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(215, 'IP-SSAL000044', 'syp- sparacid -5ml', '2023-07-29', '2023-10-29', 'M,N', 44, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(216, 'IP-SSAL000044', 'syp -mucolyte-5ml', '2023-07-29', '2023-10-29', 'M,N', 99, '', 0, '2023-07-29 01:32:14', NULL, '00023'),
(217, 'IP-SSAL000044', 'syp-duphalac -15 ml sos', '2023-07-29', '2023-10-29', 'N', 11, '', 0, '2023-07-29 01:32:14', NULL, '00023');

-- --------------------------------------------------------

--
-- Table structure for table `iop_nurse_medicine`
--

CREATE TABLE `iop_nurse_medicine` (
  `iop_nurse_med_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `iop_med_id` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `given_date` date NOT NULL,
  `added_date` datetime NOT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iop_nurse_medicine`
--

INSERT INTO `iop_nurse_medicine` (`iop_nurse_med_id`, `iop_id`, `iop_med_id`, `dose`, `given_date`, `added_date`, `InActive`, `cPreparedBy`) VALUES
(1, 'IP-SSAL000052', '1', 'M', '2023-07-12', '2023-07-12 02:05:34', 0, '00032'),
(2, 'IP-SSAL000052', '1', 'M', '2023-07-13', '2023-07-13 12:07:09', 0, '00032'),
(3, 'IP-SSAL000052', '2', 'M', '2023-07-13', '2023-07-13 12:07:09', 0, '00032'),
(4, 'IP-SSAL000052', '3', 'M', '2023-07-13', '2023-07-13 12:07:09', 0, '00032'),
(5, 'IP-SSAL000053', '6', 'M,A', '2023-07-24', '2023-07-24 04:53:27', 0, '00033'),
(6, 'IP-SSAL000030', '18', 'M', '2023-07-25', '2023-07-25 03:32:44', 0, '00032'),
(7, 'IP-SSAL000030', '19', 'A', '2023-07-25', '2023-07-25 03:32:44', 0, '00032'),
(8, 'IP-SSAL000033', '27', 'M,A', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(9, 'IP-SSAL000033', '28', 'A', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(10, 'IP-SSAL000033', '29', 'A', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(11, 'IP-SSAL000033', '30', 'M', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(12, 'IP-SSAL000033', '31', 'A', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(13, 'IP-SSAL000033', '32', 'M', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(14, 'IP-SSAL000033', '33', 'N', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(15, 'IP-SSAL000033', '34', 'M', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(16, 'IP-SSAL000033', '35', 'M', '2023-07-25', '2023-07-25 03:35:57', 0, '00032'),
(17, 'IP-SSAL000036', '42', 'M', '2023-07-25', '2023-07-25 03:36:56', 0, '00032'),
(18, 'IP-SSAL000036', '43', 'A', '2023-07-25', '2023-07-25 03:36:56', 0, '00032'),
(19, 'IP-SSAL000036', '44', 'M', '2023-07-25', '2023-07-25 03:36:56', 0, '00032'),
(20, 'IP-SSAL000036', '45', 'M', '2023-07-25', '2023-07-25 03:36:56', 0, '00032'),
(21, 'IP-SSAL000037', '10', 'M', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(22, 'IP-SSAL000037', '11', 'M', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(23, 'IP-SSAL000037', '12', 'A', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(24, 'IP-SSAL000037', '13', 'M', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(25, 'IP-SSAL000037', '14', 'M', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(26, 'IP-SSAL000037', '15', 'M,A', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(27, 'IP-SSAL000037', '16', 'M,A', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(28, 'IP-SSAL000037', '17', 'M', '2023-07-25', '2023-07-25 03:38:17', 0, '00032'),
(29, 'IP-SSAL000038', '37', 'M', '2023-07-25', '2023-07-25 03:38:41', 0, '00032'),
(30, 'IP-SSAL000038', '38', 'M', '2023-07-25', '2023-07-25 03:38:41', 0, '00032'),
(31, 'IP-SSAL000038', '39', 'M', '2023-07-25', '2023-07-25 03:38:41', 0, '00032'),
(32, 'IP-SSAL000038', '41', 'M', '2023-07-25', '2023-07-25 03:38:41', 0, '00032'),
(33, 'IP-SSAL000040', '22', 'M', '2023-07-25', '2023-07-25 03:47:52', 0, '00032'),
(34, 'IP-SSAL000040', '24', 'M', '2023-07-25', '2023-07-25 03:47:52', 0, '00032'),
(35, 'IP-SSAL000042', '79', 'M', '2023-07-27', '2023-07-27 06:33:10', 0, '00033'),
(36, 'IP-SSAL000042', '80', 'M', '2023-07-27', '2023-07-27 06:33:10', 0, '00033'),
(37, 'IP-SSAL000042', '82', 'M', '2023-07-27', '2023-07-27 06:33:10', 0, '00033'),
(38, 'IP-SSAL000048', '70', 'M', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(39, 'IP-SSAL000048', '71', 'A', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(40, 'IP-SSAL000048', '72', 'M', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(41, 'IP-SSAL000048', '74', 'M', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(42, 'IP-SSAL000048', '75', 'A', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(43, 'IP-SSAL000048', '76', 'M', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(44, 'IP-SSAL000048', '77', 'M', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(45, 'IP-SSAL000048', '78', 'M', '2023-07-27', '2023-07-27 06:42:51', 0, '00033'),
(46, 'IP-SSAL000043', '55', 'M', '2023-07-27', '2023-07-27 06:56:54', 0, '00033'),
(47, 'IP-SSAL000043', '56', 'M', '2023-07-27', '2023-07-27 06:56:54', 0, '00033'),
(48, 'IP-SSAL000043', '57', 'A', '2023-07-27', '2023-07-27 06:56:54', 0, '00033'),
(49, 'IP-SSAL000043', '60', 'M', '2023-07-27', '2023-07-27 06:56:54', 0, '00033'),
(50, 'IP-SSAL000043', '61', 'A', '2023-07-27', '2023-07-27 06:56:54', 0, '00033'),
(51, 'IP-SSAL000059', '46', 'M', '2023-07-27', '2023-07-27 07:21:11', 0, '00033'),
(52, 'IP-SSAL000059', '47', 'A', '2023-07-27', '2023-07-27 07:21:11', 0, '00033'),
(53, 'IP-SSAL000055', '51', 'M', '2023-07-27', '2023-07-27 07:24:43', 0, '00033'),
(54, 'IP-SSAL000055', '52', 'A', '2023-07-27', '2023-07-27 07:24:43', 0, '00033'),
(55, 'IP-SSAL000055', '53', 'A', '2023-07-27', '2023-07-27 07:24:43', 0, '00033'),
(56, 'IP-SSAL000047', '48', 'M', '2023-07-27', '2023-07-27 07:34:30', 0, '00033'),
(57, 'IP-SSAL000047', '49', 'M', '2023-07-27', '2023-07-27 07:34:30', 0, '00033'),
(58, 'IP-SSAL000030', '18', 'M', '2023-07-28', '2023-07-28 08:51:26', 0, '00032'),
(59, 'IP-SSAL000033', '27', 'A', '2023-07-28', '2023-07-28 03:50:27', 0, '00032'),
(60, 'IP-SSAL000033', '30', 'M', '2023-07-28', '2023-07-28 08:52:07', 0, '00032'),
(61, 'IP-SSAL000033', '32', 'M', '2023-07-28', '2023-07-28 08:52:07', 0, '00032'),
(62, 'IP-SSAL000033', '34', 'M', '2023-07-28', '2023-07-28 08:52:07', 0, '00032'),
(63, 'IP-SSAL000033', '35', 'M', '2023-07-28', '2023-07-28 08:52:07', 0, '00032'),
(64, 'IP-SSAL000036', '42', 'M', '2023-07-28', '2023-07-28 08:52:41', 0, '00032'),
(65, 'IP-SSAL000036', '44', 'M', '2023-07-28', '2023-07-28 08:52:41', 0, '00032'),
(66, 'IP-SSAL000036', '45', 'M', '2023-07-28', '2023-07-28 08:52:41', 0, '00032'),
(67, 'IP-SSAL000037', '9', 'M', '2023-07-28', '2023-07-28 08:53:04', 0, '00032'),
(68, 'IP-SSAL000037', '10', 'M', '2023-07-28', '2023-07-28 08:53:04', 0, '00032'),
(69, 'IP-SSAL000037', '11', 'M', '2023-07-28', '2023-07-28 08:53:04', 0, '00032'),
(70, 'IP-SSAL000037', '13', 'M', '2023-07-28', '2023-07-28 08:53:04', 0, '00032'),
(71, 'IP-SSAL000037', '14', 'M', '2023-07-28', '2023-07-28 08:53:04', 0, '00032'),
(72, 'IP-SSAL000037', '15', 'A', '2023-07-28', '2023-07-28 03:51:41', 0, '00032'),
(73, 'IP-SSAL000037', '16', 'A', '2023-07-28', '2023-07-28 03:51:41', 0, '00032'),
(74, 'IP-SSAL000037', '17', 'M', '2023-07-28', '2023-07-28 08:53:04', 0, '00032'),
(75, 'IP-SSAL000040', '22', 'M', '2023-07-28', '2023-07-28 08:53:28', 0, '00032'),
(76, 'IP-SSAL000040', '24', 'M', '2023-07-28', '2023-07-28 08:53:28', 0, '00032'),
(77, 'IP-SSAL000053', '112', 'M', '2023-07-28', '2023-07-28 02:08:13', 0, '00025'),
(78, 'IP-SSAL000030', '19', 'A', '2023-07-28', '2023-07-28 03:49:57', 0, '00032'),
(79, 'IP-SSAL000033', '28', 'A', '2023-07-28', '2023-07-28 03:50:27', 0, '00032'),
(80, 'IP-SSAL000033', '29', 'A', '2023-07-28', '2023-07-28 03:50:27', 0, '00032'),
(81, 'IP-SSAL000033', '31', 'A', '2023-07-28', '2023-07-28 03:50:27', 0, '00032'),
(82, 'IP-SSAL000036', '43', 'A', '2023-07-28', '2023-07-28 03:51:07', 0, '00032'),
(83, 'IP-SSAL000041', '113', 'M,A,N', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(84, 'IP-SSAL000041', '114', 'M', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(85, 'IP-SSAL000041', '115', 'M', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(86, 'IP-SSAL000041', '116', 'M', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(87, 'IP-SSAL000041', '117', 'M,A,N', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(88, 'IP-SSAL000041', '118', 'A', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(89, 'IP-SSAL000041', '119', 'M', '2023-07-28', '2023-07-28 05:13:24', 0, '00033'),
(90, 'IP-SSAL000042', '79', 'M', '2023-07-28', '2023-07-28 05:14:05', 0, '00033'),
(91, 'IP-SSAL000042', '80', 'M', '2023-07-28', '2023-07-28 05:14:05', 0, '00033'),
(92, 'IP-SSAL000042', '81', 'N', '2023-07-28', '2023-07-28 05:14:05', 0, '00033'),
(93, 'IP-SSAL000042', '82', 'M', '2023-07-28', '2023-07-28 05:14:05', 0, '00033'),
(94, 'IP-SSAL000045', '66', 'M', '2023-07-28', '2023-07-28 05:14:41', 0, '00033'),
(95, 'IP-SSAL000045', '67', 'M,N', '2023-07-28', '2023-07-28 05:14:41', 0, '00033'),
(96, 'IP-SSAL000045', '68', 'M,N', '2023-07-28', '2023-07-28 05:14:41', 0, '00033'),
(97, 'IP-SSAL000043', '55', 'M', '2023-07-28', '2023-07-28 05:15:17', 0, '00033'),
(98, 'IP-SSAL000043', '56', 'M', '2023-07-28', '2023-07-28 05:15:17', 0, '00033'),
(99, 'IP-SSAL000043', '57', 'A', '2023-07-28', '2023-07-28 05:15:17', 0, '00033'),
(100, 'IP-SSAL000043', '60', 'M', '2023-07-28', '2023-07-28 05:15:17', 0, '00033'),
(101, 'IP-SSAL000043', '61', 'A', '2023-07-28', '2023-07-28 05:15:17', 0, '00033'),
(102, 'IP-SSAL000048', '70', 'M', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(103, 'IP-SSAL000048', '71', 'A', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(104, 'IP-SSAL000048', '72', 'M', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(105, 'IP-SSAL000048', '73', 'N', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(106, 'IP-SSAL000048', '74', 'M,N', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(107, 'IP-SSAL000048', '75', 'A', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(108, 'IP-SSAL000048', '76', 'M', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(109, 'IP-SSAL000048', '77', 'M', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(110, 'IP-SSAL000048', '78', 'M', '2023-07-28', '2023-07-28 05:17:29', 0, '00033'),
(111, 'IP-SSAL000055', '51', 'M', '2023-07-28', '2023-07-28 05:23:33', 0, '00033'),
(112, 'IP-SSAL000055', '52', 'A', '2023-07-28', '2023-07-28 05:23:33', 0, '00033'),
(113, 'IP-SSAL000055', '53', 'A', '2023-07-28', '2023-07-28 05:23:33', 0, '00033'),
(114, 'IP-SSAL000055', '54', 'A', '2023-07-28', '2023-07-28 05:23:33', 0, '00033'),
(115, 'IP-SSAL000056', '85', 'M', '2023-07-28', '2023-07-28 05:24:19', 0, '00033'),
(116, 'IP-SSAL000056', '86', 'M', '2023-07-28', '2023-07-28 05:24:19', 0, '00033'),
(117, 'IP-SSAL000056', '87', 'A', '2023-07-28', '2023-07-28 05:24:19', 0, '00033'),
(118, 'IP-SSAL000056', '90', 'A', '2023-07-28', '2023-07-28 05:24:19', 0, '00033'),
(119, 'IP-SSAL000062', '93', 'M', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(120, 'IP-SSAL000062', '96', 'M', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(121, 'IP-SSAL000062', '97', 'M', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(122, 'IP-SSAL000062', '98', 'A', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(123, 'IP-SSAL000062', '99', 'M', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(124, 'IP-SSAL000062', '100', 'M,A', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(125, 'IP-SSAL000062', '101', 'M', '2023-07-28', '2023-07-28 05:26:31', 0, '00033'),
(126, 'IP-SSAL000061', '102', 'M', '2023-07-28', '2023-07-28 05:27:36', 0, '00033'),
(127, 'IP-SSAL000061', '103', 'M', '2023-07-28', '2023-07-28 05:27:36', 0, '00033'),
(128, 'IP-SSAL000061', '104', 'M', '2023-07-28', '2023-07-28 05:27:36', 0, '00033'),
(129, 'IP-SSAL000061', '105', 'A', '2023-07-28', '2023-07-28 05:27:36', 0, '00033'),
(130, 'IP-SSAL000061', '107', 'A', '2023-07-28', '2023-07-28 05:27:36', 0, '00033'),
(131, 'IP-SSAL000061', '109', 'M', '2023-07-28', '2023-07-28 05:27:36', 0, '00033'),
(132, 'IP-SSAL000030', '18', 'M', '2023-07-29', '2023-07-29 09:47:04', 0, '00032'),
(133, 'IP-SSAL000032', '132', 'M', '2023-07-29', '2023-07-29 09:47:35', 0, '00032'),
(134, 'IP-SSAL000032', '133', 'M', '2023-07-29', '2023-07-29 09:47:35', 0, '00032'),
(135, 'IP-SSAL000032', '134', 'M', '2023-07-29', '2023-07-29 09:47:35', 0, '00032'),
(136, 'IP-SSAL000032', '142', 'M', '2023-07-29', '2023-07-29 09:47:35', 0, '00032'),
(137, 'IP-SSAL000033', '27', 'A', '2023-07-29', '2023-07-29 05:30:30', 0, '00032'),
(138, 'IP-SSAL000033', '30', 'M', '2023-07-29', '2023-07-29 09:48:07', 0, '00032'),
(139, 'IP-SSAL000033', '35', 'M', '2023-07-29', '2023-07-29 09:48:07', 0, '00032'),
(140, 'IP-SSAL000039', '120', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(141, 'IP-SSAL000039', '123', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(142, 'IP-SSAL000039', '124', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(143, 'IP-SSAL000039', '125', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(144, 'IP-SSAL000039', '126', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(145, 'IP-SSAL000039', '127', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(146, 'IP-SSAL000039', '128', 'M', '2023-07-29', '2023-07-29 09:48:39', 0, '00032'),
(147, 'IP-SSAL000036', '44', 'M', '2023-07-29', '2023-07-29 09:48:56', 0, '00032'),
(148, 'IP-SSAL000036', '45', 'M', '2023-07-29', '2023-07-29 09:48:56', 0, '00032'),
(149, 'IP-SSAL000037', '9', 'M', '2023-07-29', '2023-07-29 09:49:16', 0, '00032'),
(150, 'IP-SSAL000037', '10', 'M', '2023-07-29', '2023-07-29 09:49:16', 0, '00032'),
(151, 'IP-SSAL000037', '11', 'M', '2023-07-29', '2023-07-29 09:49:16', 0, '00032'),
(152, 'IP-SSAL000037', '15', 'A', '2023-07-29', '2023-07-29 05:31:18', 0, '00032'),
(153, 'IP-SSAL000037', '16', 'A', '2023-07-29', '2023-07-29 05:31:18', 0, '00032'),
(154, 'IP-SSAL000037', '17', 'M', '2023-07-29', '2023-07-29 09:49:16', 0, '00032'),
(155, 'IP-SSAL000040', '22', 'M', '2023-07-29', '2023-07-29 09:49:32', 0, '00032'),
(156, 'IP-SSAL000065', '152', 'A', '2023-07-29', '2023-07-29 05:33:08', 0, '00032'),
(157, 'IP-SSAL000065', '153', 'M', '2023-07-29', '2023-07-29 09:50:30', 0, '00032'),
(158, 'IP-SSAL000065', '155', 'M', '2023-07-29', '2023-07-29 09:50:30', 0, '00032'),
(159, 'IP-SSAL000065', '156', 'M', '2023-07-29', '2023-07-29 09:50:30', 0, '00032'),
(160, 'IP-SSAL000065', '157', 'M', '2023-07-29', '2023-07-29 09:50:30', 0, '00032'),
(161, 'IP-SSAL000065', '160', 'M', '2023-07-29', '2023-07-29 09:50:30', 0, '00032'),
(162, 'IP-SSAL000064', '161', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(163, 'IP-SSAL000064', '162', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(164, 'IP-SSAL000064', '163', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(165, 'IP-SSAL000064', '164', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(166, 'IP-SSAL000064', '167', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(167, 'IP-SSAL000064', '169', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(168, 'IP-SSAL000064', '170', 'M', '2023-07-29', '2023-07-29 09:50:58', 0, '00032'),
(169, 'IP-SSAL000064', '171', 'A', '2023-07-29', '2023-07-29 05:32:51', 0, '00032'),
(170, 'IP-SSAL000060', '146', 'M', '2023-07-29', '2023-07-29 09:51:34', 0, '00032'),
(171, 'IP-SSAL000060', '147', 'M', '2023-07-29', '2023-07-29 09:51:34', 0, '00032'),
(172, 'IP-SSAL000060', '151', 'M', '2023-07-29', '2023-07-29 09:51:34', 0, '00032'),
(173, 'IP-SSAL000030', '19', 'A', '2023-07-29', '2023-07-29 05:29:52', 0, '00032'),
(174, 'IP-SSAL000032', '135', 'A', '2023-07-29', '2023-07-29 05:30:07', 0, '00032'),
(175, 'IP-SSAL000032', '138', 'A', '2023-07-29', '2023-07-29 05:30:07', 0, '00032'),
(176, 'IP-SSAL000033', '29', 'A', '2023-07-29', '2023-07-29 05:30:30', 0, '00032'),
(177, 'IP-SSAL000033', '31', 'A', '2023-07-29', '2023-07-29 05:30:30', 0, '00032'),
(178, 'IP-SSAL000036', '43', 'A', '2023-07-29', '2023-07-29 05:30:58', 0, '00032'),
(179, 'IP-SSAL000060', '148', 'A', '2023-07-29', '2023-07-29 05:32:26', 0, '00032'),
(180, 'IP-SSAL000065', '159', 'A', '2023-07-29', '2023-07-29 05:33:08', 0, '00032'),
(181, 'IP-SSAL000041', '113', 'M,A', '2023-07-29', '2023-07-29 06:27:23', 0, '00033'),
(182, 'IP-SSAL000041', '114', 'M', '2023-07-29', '2023-07-29 06:27:23', 0, '00033'),
(183, 'IP-SSAL000041', '115', 'M', '2023-07-29', '2023-07-29 06:27:23', 0, '00033'),
(184, 'IP-SSAL000041', '116', 'M', '2023-07-29', '2023-07-29 06:27:23', 0, '00033'),
(185, 'IP-SSAL000041', '117', 'M,A', '2023-07-29', '2023-07-29 06:27:23', 0, '00033'),
(186, 'IP-SSAL000041', '118', 'A', '2023-07-29', '2023-07-29 06:27:23', 0, '00033'),
(187, 'IP-SSAL000042', '79', 'M', '2023-07-29', '2023-07-29 06:28:59', 0, '00033'),
(188, 'IP-SSAL000042', '80', 'M', '2023-07-29', '2023-07-29 06:28:59', 0, '00033'),
(189, 'IP-SSAL000042', '82', 'M', '2023-07-29', '2023-07-29 06:28:59', 0, '00033'),
(190, 'IP-SSAL000044', '207', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(191, 'IP-SSAL000044', '209', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(192, 'IP-SSAL000044', '210', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(193, 'IP-SSAL000044', '211', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(194, 'IP-SSAL000044', '212', 'M,A,N', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(195, 'IP-SSAL000044', '213', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(196, 'IP-SSAL000044', '214', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(197, 'IP-SSAL000044', '215', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(198, 'IP-SSAL000044', '216', 'M', '2023-07-29', '2023-07-29 06:32:35', 0, '00033'),
(199, 'IP-SSAL000045', '66', 'M', '2023-07-29', '2023-07-29 06:33:21', 0, '00033'),
(200, 'IP-SSAL000045', '68', 'M,N', '2023-07-29', '2023-07-29 06:33:21', 0, '00033'),
(201, 'IP-SSAL000051', '197', 'M,A', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(202, 'IP-SSAL000051', '198', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(203, 'IP-SSAL000051', '199', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(204, 'IP-SSAL000051', '200', 'N', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(205, 'IP-SSAL000051', '201', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(206, 'IP-SSAL000051', '202', 'A', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(207, 'IP-SSAL000051', '203', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(208, 'IP-SSAL000051', '204', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(209, 'IP-SSAL000051', '205', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(210, 'IP-SSAL000051', '206', 'M', '2023-07-29', '2023-07-29 06:34:51', 0, '00033'),
(211, 'IP-SSAL000048', '72', 'M', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(212, 'IP-SSAL000048', '73', 'N', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(213, 'IP-SSAL000048', '74', 'M,N', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(214, 'IP-SSAL000048', '75', 'A', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(215, 'IP-SSAL000048', '76', 'M', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(216, 'IP-SSAL000048', '77', 'M', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(217, 'IP-SSAL000048', '78', 'M', '2023-07-29', '2023-07-29 06:37:29', 0, '00033'),
(218, 'IP-SSAL000046', '185', 'M', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(219, 'IP-SSAL000046', '186', 'M', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(220, 'IP-SSAL000046', '187', 'M', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(221, 'IP-SSAL000046', '188', 'M,N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(222, 'IP-SSAL000046', '189', 'N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(223, 'IP-SSAL000046', '190', 'M', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(224, 'IP-SSAL000046', '191', 'M', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(225, 'IP-SSAL000046', '192', 'N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(226, 'IP-SSAL000046', '193', 'M,N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(227, 'IP-SSAL000046', '194', 'M,N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(228, 'IP-SSAL000046', '195', 'M,N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(229, 'IP-SSAL000046', '196', 'M,N', '2023-07-29', '2023-07-29 06:41:24', 0, '00033'),
(230, 'IP-SSAL000054', '173', 'M,N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(231, 'IP-SSAL000054', '174', 'N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(232, 'IP-SSAL000054', '175', 'N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(233, 'IP-SSAL000054', '176', 'M,N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(234, 'IP-SSAL000054', '178', 'M,N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(235, 'IP-SSAL000054', '179', 'M', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(236, 'IP-SSAL000054', '180', 'N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(237, 'IP-SSAL000054', '181', 'A', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(238, 'IP-SSAL000054', '182', 'M', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(239, 'IP-SSAL000054', '183', 'A', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(240, 'IP-SSAL000054', '184', 'N', '2023-07-29', '2023-07-29 06:43:20', 0, '00033'),
(241, 'IP-SSAL000062', '100', 'M,A', '2023-07-29', '2023-07-29 06:48:27', 0, '00033'),
(242, 'IP-SSAL000062', '101', 'M', '2023-07-29', '2023-07-29 06:48:27', 0, '00033'),
(243, 'IP-SSAL000061', '103', 'M', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(244, 'IP-SSAL000061', '104', 'M', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(245, 'IP-SSAL000061', '105', 'A', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(246, 'IP-SSAL000061', '107', 'A', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(247, 'IP-SSAL000061', '108', 'N', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(248, 'IP-SSAL000061', '109', 'M', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(249, 'IP-SSAL000061', '111', 'M', '2023-07-29', '2023-07-29 06:49:40', 0, '00033'),
(250, 'IP-SSAL000051', '197', 'N', '2023-07-30', '2023-07-30 09:57:38', 0, '00035'),
(251, 'IP-SSAL000051', '198', 'N', '2023-07-30', '2023-07-30 09:57:38', 0, '00035'),
(252, 'IP-SSAL000051', '199', 'N', '2023-07-30', '2023-07-30 09:57:38', 0, '00035'),
(253, 'IP-SSAL000051', '201', 'N', '2023-07-30', '2023-07-30 09:57:38', 0, '00035'),
(254, 'IP-SSAL000051', '202', 'N', '2023-07-30', '2023-07-30 09:57:38', 0, '00035'),
(255, 'IP-SSAL000051', '203', 'N', '2023-07-30', '2023-07-30 09:57:38', 0, '00035'),
(256, 'IP-SSAL000047', '50', 'N', '2023-07-30', '2023-07-30 09:58:05', 0, '00035'),
(257, 'IP-SSAL000050', '143', 'N', '2023-07-30', '2023-07-30 09:58:46', 0, '00035'),
(258, 'IP-SSAL000050', '144', 'N', '2023-07-30', '2023-07-30 09:58:46', 0, '00035'),
(259, 'IP-SSAL000048', '73', 'N', '2023-07-30', '2023-07-30 09:59:11', 0, '00035'),
(260, 'IP-SSAL000048', '74', 'N', '2023-07-30', '2023-07-30 09:59:11', 0, '00035'),
(261, 'IP-SSAL000056', '85', 'N', '2023-07-30', '2023-07-30 09:59:27', 0, '00035'),
(262, 'IP-SSAL000056', '86', 'N', '2023-07-30', '2023-07-30 09:59:27', 0, '00035'),
(263, 'IP-SSAL000056', '88', 'N', '2023-07-30', '2023-07-30 09:59:27', 0, '00035'),
(264, 'IP-SSAL000056', '89', 'N', '2023-07-30', '2023-07-30 09:59:27', 0, '00035'),
(265, 'IP-SSAL000056', '91', 'N', '2023-07-30', '2023-07-30 09:59:27', 0, '00035'),
(266, 'IP-SSAL000062', '94', 'N', '2023-07-30', '2023-07-30 10:00:00', 0, '00035'),
(267, 'IP-SSAL000062', '95', 'N', '2023-07-30', '2023-07-30 10:00:00', 0, '00035'),
(268, 'IP-SSAL000062', '100', 'N', '2023-07-30', '2023-07-30 10:00:00', 0, '00035'),
(269, 'IP-SSAL000062', '101', 'N', '2023-07-30', '2023-07-30 10:00:00', 0, '00035'),
(270, 'IP-SSAL000054', '173', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(271, 'IP-SSAL000054', '174', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(272, 'IP-SSAL000054', '175', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(273, 'IP-SSAL000054', '176', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(274, 'IP-SSAL000054', '177', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(275, 'IP-SSAL000054', '178', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(276, 'IP-SSAL000054', '180', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(277, 'IP-SSAL000054', '184', 'N', '2023-07-30', '2023-07-30 10:00:34', 0, '00035'),
(278, 'IP-SSAL000046', '188', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(279, 'IP-SSAL000046', '189', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(280, 'IP-SSAL000046', '192', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(281, 'IP-SSAL000046', '193', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(282, 'IP-SSAL000046', '194', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(283, 'IP-SSAL000046', '195', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(284, 'IP-SSAL000046', '196', 'N', '2023-07-30', '2023-07-30 10:00:55', 0, '00035'),
(285, 'IP-SSAL000041', '113', 'N', '2023-07-30', '2023-07-30 10:01:32', 0, '00035'),
(286, 'IP-SSAL000041', '117', 'N', '2023-07-30', '2023-07-30 10:01:32', 0, '00035'),
(287, 'IP-SSAL000042', '81', 'N', '2023-07-30', '2023-07-30 10:01:57', 0, '00035'),
(288, 'IP-SSAL000042', '83', 'N', '2023-07-30', '2023-07-30 10:01:57', 0, '00035'),
(289, 'IP-SSAL000043', '55', 'N', '2023-07-30', '2023-07-30 10:02:35', 0, '00035'),
(290, 'IP-SSAL000043', '56', 'N', '2023-07-30', '2023-07-30 10:02:35', 0, '00035'),
(291, 'IP-SSAL000043', '58', 'N', '2023-07-30', '2023-07-30 10:02:35', 0, '00035'),
(292, 'IP-SSAL000043', '59', 'N', '2023-07-30', '2023-07-30 10:02:35', 0, '00035'),
(293, 'IP-SSAL000058', '62', 'N', '2023-07-30', '2023-07-30 10:03:06', 0, '00035'),
(294, 'IP-SSAL000058', '65', 'N', '2023-07-30', '2023-07-30 10:03:06', 0, '00035'),
(295, 'IP-SSAL000045', '67', 'N', '2023-07-30', '2023-07-30 10:03:42', 0, '00035'),
(296, 'IP-SSAL000045', '68', 'N', '2023-07-30', '2023-07-30 10:03:42', 0, '00035'),
(297, 'IP-SSAL000045', '69', 'N', '2023-07-30', '2023-07-30 10:03:42', 0, '00035'),
(298, 'IP-SSAL000061', '104', 'N', '2023-07-30', '2023-07-30 10:04:05', 0, '00035'),
(299, 'IP-SSAL000061', '106', 'N', '2023-07-30', '2023-07-30 10:04:05', 0, '00035'),
(300, 'IP-SSAL000061', '108', 'N', '2023-07-30', '2023-07-30 10:04:05', 0, '00035'),
(301, 'IP-SSAL000061', '109', 'N', '2023-07-30', '2023-07-30 10:04:05', 0, '00035'),
(302, 'IP-SSAL000061', '110', 'N', '2023-07-30', '2023-07-30 10:04:05', 0, '00035'),
(303, 'IP-SSAL000044', '208', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(304, 'IP-SSAL000044', '210', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(305, 'IP-SSAL000044', '211', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(306, 'IP-SSAL000044', '212', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(307, 'IP-SSAL000044', '213', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(308, 'IP-SSAL000044', '215', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(309, 'IP-SSAL000044', '216', 'N', '2023-07-30', '2023-07-30 10:04:41', 0, '00035'),
(310, 'IP-SSAL000032', '134', 'N', '2023-07-30', '2023-07-30 10:05:39', 0, '00025'),
(311, 'IP-SSAL000032', '136', 'N', '2023-07-30', '2023-07-30 10:05:39', 0, '00025'),
(312, 'IP-SSAL000032', '137', 'N', '2023-07-30', '2023-07-30 10:05:39', 0, '00025'),
(313, 'IP-SSAL000032', '139', 'N', '2023-07-30', '2023-07-30 10:05:39', 0, '00025'),
(314, 'IP-SSAL000032', '140', 'N', '2023-07-30', '2023-07-30 10:05:39', 0, '00025'),
(315, 'IP-SSAL000032', '141', 'N', '2023-07-30', '2023-07-30 10:05:39', 0, '00025'),
(316, 'IP-SSAL000033', '27', 'N', '2023-07-30', '2023-07-30 10:06:26', 0, '00025'),
(317, 'IP-SSAL000033', '33', 'N', '2023-07-30', '2023-07-30 10:06:26', 0, '00025'),
(318, 'IP-SSAL000033', '35', 'N', '2023-07-30', '2023-07-30 10:06:26', 0, '00025'),
(319, 'IP-SSAL000039', '121', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(320, 'IP-SSAL000039', '122', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(321, 'IP-SSAL000039', '125', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(322, 'IP-SSAL000039', '128', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(323, 'IP-SSAL000039', '129', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(324, 'IP-SSAL000039', '130', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(325, 'IP-SSAL000039', '131', 'N', '2023-07-30', '2023-07-30 10:07:13', 0, '00025'),
(326, 'IP-SSAL000036', '42', 'N', '2023-07-30', '2023-07-30 10:07:39', 0, '00025'),
(327, 'IP-SSAL000040', '23', 'N', '2023-07-30', '2023-07-30 10:08:30', 0, '00025'),
(328, 'IP-SSAL000040', '24', 'N', '2023-07-30', '2023-07-30 10:08:30', 0, '00025'),
(329, 'IP-SSAL000040', '26', 'N', '2023-07-30', '2023-07-30 10:08:30', 0, '00025'),
(330, 'IP-SSAL000060', '147', 'N', '2023-07-30', '2023-07-30 10:09:12', 0, '00025'),
(331, 'IP-SSAL000060', '149', 'N', '2023-07-30', '2023-07-30 10:09:12', 0, '00025'),
(332, 'IP-SSAL000060', '150', 'N', '2023-07-30', '2023-07-30 10:09:12', 0, '00025'),
(333, 'IP-SSAL000060', '151', 'N', '2023-07-30', '2023-07-30 10:09:12', 0, '00025'),
(334, 'IP-SSAL000064', '165', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(335, 'IP-SSAL000064', '166', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(336, 'IP-SSAL000064', '167', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(337, 'IP-SSAL000064', '168', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(338, 'IP-SSAL000064', '170', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(339, 'IP-SSAL000064', '171', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(340, 'IP-SSAL000064', '172', 'N', '2023-07-30', '2023-07-30 10:09:42', 0, '00025'),
(341, 'IP-SSAL000065', '154', 'N', '2023-07-30', '2023-07-30 10:10:04', 0, '00025'),
(342, 'IP-SSAL000065', '158', 'N', '2023-07-30', '2023-07-30 10:10:04', 0, '00025'),
(343, 'IP-SSAL000040', '22', 'M', '2023-07-31', '2023-07-31 01:05:02', 0, '00032'),
(344, 'IP-SSAL000040', '24', 'M', '2023-07-31', '2023-07-31 01:05:02', 0, '00032'),
(345, 'IP-SSAL000058', '62', 'M', '2023-07-31', '2023-07-31 01:06:49', 0, '00033'),
(346, 'IP-SSAL000058', '64', 'M', '2023-07-31', '2023-07-31 01:06:49', 0, '00033'),
(347, 'IP-SSAL000030', '18', 'M', '2023-07-31', '2023-07-31 01:08:08', 0, '00032'),
(348, 'IP-SSAL000030', '19', 'A', '2023-07-31', '2023-07-31 01:08:08', 0, '00032'),
(349, 'IP-SSAL000030', '20', 'M', '2023-07-31', '2023-07-31 01:08:08', 0, '00032'),
(350, 'IP-SSAL000032', '132', 'M', '2023-07-31', '2023-07-31 01:08:35', 0, '00032'),
(351, 'IP-SSAL000032', '133', 'M', '2023-07-31', '2023-07-31 01:08:35', 0, '00032'),
(352, 'IP-SSAL000032', '134', 'M', '2023-07-31', '2023-07-31 01:08:35', 0, '00032'),
(353, 'IP-SSAL000033', '27', 'M', '2023-07-31', '2023-07-31 07:36:20', 0, '00030'),
(354, 'IP-SSAL000033', '30', 'M', '2023-07-31', '2023-07-31 07:36:20', 0, '00030'),
(355, 'IP-SSAL000033', '35', 'M', '2023-07-31', '2023-07-31 07:36:20', 0, '00030'),
(356, 'IP-SSAL000041', '113', 'M,A', '2023-07-31', '2023-07-31 02:37:38', 0, '00033'),
(357, 'IP-SSAL000041', '114', 'M', '2023-07-31', '2023-07-31 02:37:38', 0, '00033'),
(358, 'IP-SSAL000041', '115', 'M', '2023-07-31', '2023-07-31 02:37:38', 0, '00033'),
(359, 'IP-SSAL000041', '116', 'M', '2023-07-31', '2023-07-31 02:37:38', 0, '00033'),
(360, 'IP-SSAL000041', '117', 'M,A', '2023-07-31', '2023-07-31 02:37:38', 0, '00033'),
(361, 'IP-SSAL000041', '118', 'A', '2023-07-31', '2023-07-31 02:37:38', 0, '00033'),
(362, 'IP-SSAL000042', '79', 'M', '2023-07-31', '2023-07-31 02:39:23', 0, '00033'),
(363, 'IP-SSAL000042', '80', 'M', '2023-07-31', '2023-07-31 02:39:23', 0, '00033'),
(364, 'IP-SSAL000042', '82', 'M', '2023-07-31', '2023-07-31 02:39:23', 0, '00033'),
(365, 'IP-SSAL000043', '55', 'M', '2023-07-31', '2023-07-31 02:41:06', 0, '00033'),
(366, 'IP-SSAL000043', '56', 'M', '2023-07-31', '2023-07-31 02:41:06', 0, '00033'),
(367, 'IP-SSAL000043', '57', 'A', '2023-07-31', '2023-07-31 02:41:06', 0, '00033'),
(368, 'IP-SSAL000043', '60', 'M', '2023-07-31', '2023-07-31 02:41:06', 0, '00033'),
(369, 'IP-SSAL000043', '61', 'A', '2023-07-31', '2023-07-31 02:41:06', 0, '00033'),
(370, 'IP-SSAL000044', '207', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(371, 'IP-SSAL000044', '209', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(372, 'IP-SSAL000044', '210', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(373, 'IP-SSAL000044', '211', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(374, 'IP-SSAL000044', '212', 'M,A', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(375, 'IP-SSAL000044', '213', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(376, 'IP-SSAL000044', '214', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(377, 'IP-SSAL000044', '215', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(378, 'IP-SSAL000044', '216', 'M', '2023-07-31', '2023-07-31 02:42:33', 0, '00033'),
(379, 'IP-SSAL000045', '66', 'M', '2023-07-31', '2023-07-31 02:43:40', 0, '00033'),
(380, 'IP-SSAL000045', '67', 'M', '2023-07-31', '2023-07-31 02:43:40', 0, '00033'),
(381, 'IP-SSAL000045', '68', 'M', '2023-07-31', '2023-07-31 02:43:40', 0, '00033'),
(382, 'IP-SSAL000051', '197', 'M,A', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(383, 'IP-SSAL000051', '198', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(384, 'IP-SSAL000051', '199', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(385, 'IP-SSAL000051', '201', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(386, 'IP-SSAL000051', '202', 'A', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(387, 'IP-SSAL000051', '203', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(388, 'IP-SSAL000051', '204', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(389, 'IP-SSAL000051', '205', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(390, 'IP-SSAL000051', '206', 'M', '2023-07-31', '2023-07-31 02:44:52', 0, '00033'),
(391, 'IP-SSAL000033', '32', 'M', '2023-07-31', '2023-07-31 07:36:20', 0, '00030'),
(392, 'IP-SSAL000033', '34', 'M', '2023-07-31', '2023-07-31 07:36:20', 0, '00030');

-- --------------------------------------------------------

--
-- Table structure for table `iop_nurse_notes`
--

CREATE TABLE `iop_nurse_notes` (
  `nurse_notes_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) NOT NULL,
  `complain_id` varchar(255) DEFAULT NULL,
  `focus` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_nurse_notes`
--

INSERT INTO `iop_nurse_notes` (`nurse_notes_id`, `iop_id`, `dDate`, `dDateTime`, `complain_id`, `focus`, `notes`, `cPreparedBy`, `InActive`) VALUES
(1, 'IP-SSAL000014', '2022-10-31', '2022-10-31 12:00 PM', NULL, 'sddzc', 'dfsfdf', '00014', 0),
(2, 'IP-SSAL000014', '2022-10-31', '2022-10-31 04:30 PM', NULL, 'demo', 'demo', '00014', 0),
(3, 'IP-SSAL000015', '2022-11-01', '2022-11-01 12:45 PM', NULL, 'test', 'test', '00014', 0),
(4, 'IP-SSAL000015', '2022-11-07', '2022-11-07 12:00 PM', NULL, 'test', 'test', '00008', 0),
(5, 'IP-SSAL000016', '2022-11-07', '2022-11-07 12:45 PM', NULL, 'ok', 'ok', '00014', 0),
(6, 'IP-SSAL000021', '2023-04-20', '2023-04-20 09:45 PM', NULL, 'improved', 'improved', '00008', 0),
(7, 'IP-SSAL000022', '2023-05-02', '2023-05-02 10:15 AM', NULL, 'improved', 'improved', '00028', 0),
(8, 'IP-SSAL000023', '2023-05-02', '2023-05-02 12:30 PM', NULL, 'improved', 'improved', '00023', 0),
(9, 'IP-SSAL000023', '2023-05-02', '2023-05-02 12:30 PM', NULL, 'improved1', 'improved1', '00023', 0),
(10, 'IP-SSAL000029', '2023-05-31', '2023-05-31 03:45 PM', NULL, 'kj', 'ok', '00026', 0),
(11, 'IP-SSAL000029', '2023-06-06', '2023-06-06 11:30 AM', NULL, 'member is stable', 'Ct all', '00023', 0),
(12, 'IP-SSAL000029', '2023-06-07', '2023-06-07 12:15 PM', NULL, 'ok', 'PATIENT IS STABLE....\r\n', '00023', 0),
(13, 'IP-SSAL000052', '2023-07-01', '2023-07-01 02:30 PM', NULL, '', 'CT all', '00027', 0),
(14, 'IP-SSAL000037', '2023-07-03', '2023-07-03 10:30 AM', NULL, '', '', '00027', 0),
(15, 'IP-SSAL000030', '2023-07-04', '2023-07-04 10:30 AM', NULL, '', 'stable', '00027', 0),
(16, 'IP-SSAL000044', '2023-07-05', '2023-07-05 04:00 PM', NULL, '', 'Admitted to chillaram on yesterday when he his taking for followup and regarding PEG.', '00027', 0),
(17, 'IP-SSAL000057', '2023-07-07', '2023-07-07 06:00 PM', NULL, '', 'tgood', '00028', 0),
(18, 'IP-SSAL000030', '2023-07-11', '2023-07-11 11:00 AM', NULL, '', 'stable, no pain in body,eating well', '00027', 0),
(19, 'IP-SSAL000049', '2023-07-14', '2023-07-14 12:45 PM', NULL, '', 'Stable, sample taken for CBC and Sr.Electrolytes, No Oedema ', '00027', 0),
(20, 'IP-SSAL000052', '2023-07-26', '2023-07-26 05:30 PM', NULL, '', '', '00027', 0),
(21, 'IP-SSAL000052', '2023-07-26', '2023-07-26 05:30 PM', NULL, '', 'NO suggestion', '00027', 0),
(22, 'IP-SSAL000030', '2023-08-20', '2023-08-20 04:45 PM', '6', '', 'fall in bed room', '00028', 0),
(23, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '4', '', 'stab', '00028', 0),
(24, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '3', '', 'ss', '00028', 0),
(25, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '7', '', 'ff', '00028', 0),
(26, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '4', '', 'df', '00028', 0),
(27, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '4', '', 'dd', '00028', 0),
(28, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '3', '', 'gf', '00028', 0),
(29, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '3', '', 'hh', '00028', 0),
(30, 'IP-SSAL000030', '2023-08-22', '2023-08-22 10:00 PM', '6', '', 'kl', '00028', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_operation_theater`
--

CREATE TABLE `iop_operation_theater` (
  `operation_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate_from` date NOT NULL,
  `dTime_from` time NOT NULL,
  `dDate_to` date NOT NULL,
  `dTime_to` time NOT NULL,
  `operation_name` varchar(250) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `name_of_surgeon` varchar(25) NOT NULL,
  `name_of_anesthesia` varchar(25) NOT NULL,
  `assistant_name1` varchar(150) NOT NULL,
  `assistant_name2` varchar(150) NOT NULL,
  `assistant_name3` varchar(150) NOT NULL,
  `assistant_name4` varchar(150) NOT NULL,
  `operation_procedure` text NOT NULL,
  `notes` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_output_record`
--

CREATE TABLE `iop_output_record` (
  `output_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `urine` varchar(25) NOT NULL,
  `stool` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `feaces` varchar(25) NOT NULL,
  `respitation` varchar(25) NOT NULL,
  `skin` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_output_record`
--

INSERT INTO `iop_output_record` (`output_id`, `iop_id`, `urine`, `stool`, `remark`, `feaces`, `respitation`, `skin`, `dDate`, `dDateTime`, `cPreparedBy`, `InActive`) VALUES
(1, 'IP-SSAL000015', '3', NULL, NULL, '2', '3', '3', '2022-11-07', '2022-11-07 12:00 PM', '00008', 0),
(2, 'IP-SSAL000016', '1ml', NULL, NULL, '1ml', '1ml', '1ml', '2023-04-18', '2023-04-18 12:30 PM', '00002', 0),
(3, 'IP-SSAL000029', '100 ml', NULL, NULL, '20gm', '88', '90', '2023-05-31', '2023-05-31 03:45 PM', '00026', 0),
(4, 'IP-SSAL000052', '2 times', NULL, NULL, '20', '2', '2', '2023-07-01', '2023-07-01 02:30 PM', '00026', 0),
(5, 'IP-SSAL000042', '5 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-01', '2023-07-01 04:15 PM', '00032', 0),
(6, 'IP-SSAL000046', '2 time', NULL, NULL, '1 time', 'Na', 'Na', '2023-07-01', '2023-07-01 04:15 PM', '00033', 0),
(7, 'IP-SSAL000041', '6 times ', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-01', '2023-07-01 04:30 PM', '00032', 0),
(8, 'IP-SSAL000043', '4 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-01', '2023-07-01 04:30 PM', '00032', 0),
(9, 'IP-SSAL000045', '7 times ', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-01', '2023-07-01 04:30 PM', '00032', 0),
(10, 'IP-SSAL000044', '5 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-01', '2023-07-01 04:30 PM', '00032', 0),
(11, 'IP-SSAL000048', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-01', '2023-07-01 04:45 PM', '00033', 0),
(12, 'IP-SSAL000051', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-01', '2023-07-01 05:00 PM', '00033', 0),
(13, 'IP-SSAL000049', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-01', '2023-07-01 05:15 PM', '00033', 0),
(14, 'IP-SSAL000049', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-01', '2023-07-01 05:15 PM', '00033', 0),
(15, 'IP-SSAL000046', '2', NULL, NULL, '1', 'na', 'na', '2023-07-02', '2023-07-02 10:15 PM', '00033', 0),
(16, 'IP-SSAL000049', '2', NULL, NULL, '1', 'na', 'na', '2023-07-02', '2023-07-02 10:30 PM', '00033', 0),
(17, 'IP-SSAL000051', '1100', NULL, NULL, '1', 'na', 'na', '2023-07-02', '2023-07-02 10:30 PM', '00033', 0),
(18, 'IP-SSAL000048', '2', NULL, NULL, '1', 'na', 'na', '2023-07-02', '2023-07-02 10:45 PM', '00033', 0),
(19, 'IP-SSAL000047', '2', NULL, NULL, '1', 'na', 'na', '2023-07-02', '2023-07-02 10:45 PM', '00033', 0),
(20, 'IP-SSAL000050', '2', NULL, NULL, '1', 'na', 'na', '2023-07-02', '2023-07-02 11:00 PM', '00033', 0),
(21, 'IP-SSAL000044', '4times', NULL, NULL, 'stool not pass', 'na', 'na', '2023-07-02', '2023-07-02 11:15 PM', '00033', 0),
(22, 'IP-SSAL000041', '4 times', NULL, NULL, 'stool pass', 'na', 'na', '2023-07-02', '2023-07-02 11:15 PM', '00033', 0),
(23, 'IP-SSAL000042', '5 times', NULL, NULL, 'stool pass', 'na', 'na', '2023-07-02', '2023-07-02 11:15 PM', '00033', 0),
(24, 'IP-SSAL000043', '3 times', NULL, NULL, 'stool pass', 'na', 'na', '2023-07-02', '2023-07-02 11:15 PM', '00033', 0),
(25, 'IP-SSAL000045', '6 times', NULL, NULL, 'stool pass', 'na', 'na', '2023-07-02', '2023-07-02 11:15 PM', '00033', 0),
(26, 'IP-SSAL000049', '4 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-03', '2023-07-03 09:30 AM', '00032', 0),
(27, 'IP-SSAL000047', '4 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-03', '2023-07-03 09:30 AM', '00032', 0),
(28, 'IP-SSAL000046', '5 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-03', '2023-07-03 09:30 AM', '00032', 0),
(29, 'IP-SSAL000051', '4 times', NULL, NULL, 'Stool passed ', 'Na', 'Na', '2023-07-03', '2023-07-03 11:30 AM', '00032', 0),
(30, 'IP-SSAL000043', '5 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-03', '2023-07-03 11:45 AM', '00032', 0),
(31, 'IP-SSAL000042', '4 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-03', '2023-07-03 11:45 AM', '00032', 0),
(32, 'IP-SSAL000044', '5 times', NULL, NULL, '-', 'Na', 'Na', '2023-07-03', '2023-07-03 11:45 AM', '00032', 1),
(33, 'IP-SSAL000041', '5 times', NULL, NULL, 'Stool passed', 'Na', 'Na', '2023-07-03', '2023-07-03 11:45 AM', '00032', 0),
(34, 'IP-SSAL000045', '5 times', NULL, NULL, 'Stool passed ', 'Na', 'Na', '2023-07-03', '2023-07-03 12:00 PM', '00032', 0),
(35, 'IP-SSAL000044', '5 times', NULL, NULL, 'Stool passed ', 'Na', 'Na', '2023-07-03', '2023-07-03 12:15 PM', '00032', 0),
(36, 'IP-SSAL000050', '4times', NULL, NULL, 'stool pass', 'na', 'na', '2023-07-03', '2023-07-03 12:15 AM', '00032', 0),
(37, 'IP-SSAL000034', '2', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 01:15 PM', '00033', 0),
(38, 'IP-SSAL000036', '3', NULL, NULL, 'Not pass', 'Na', 'Na', '2023-07-03', '2023-07-03 01:15 PM', '00033', 0),
(39, 'IP-SSAL000032', '2', NULL, NULL, 'Not pass', 'Na', 'Na', '2023-07-03', '2023-07-03 01:30 PM', '00033', 0),
(40, 'IP-SSAL000037', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 01:45 PM', '00033', 0),
(41, 'IP-SSAL000040', '2', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 01:45 PM', '00033', 0),
(42, 'IP-SSAL000040', '2', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 01:45 PM', '00033', 0),
(43, 'IP-SSAL000039', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 01:45 PM', '00033', 0),
(44, 'IP-SSAL000039', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 01:45 PM', '00033', 0),
(45, 'IP-SSAL000035', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 02:00 PM', '00033', 0),
(46, 'IP-SSAL000035', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 02:00 PM', '00033', 0),
(47, 'IP-SSAL000033', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 02:00 PM', '00033', 0),
(48, 'IP-SSAL000038', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 02:00 PM', '00033', 0),
(49, 'IP-SSAL000030', '3', NULL, NULL, '1', 'Na', 'Na', '2023-07-03', '2023-07-03 02:15 PM', '00033', 0),
(50, 'IP-SSAL000052', 'na', NULL, NULL, 'na', 'na', 'na', '2023-07-03', '2023-07-03 04:30 PM', '00025', 0),
(51, 'IP-SSAL000032', 'Pass', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-03', '2023-07-03 09:45 PM', '00025', 0),
(52, 'IP-SSAL000033', '2', NULL, NULL, '1time', 'NA', 'NA', '2023-07-03', '2023-07-03 09:45 PM', '00025', 0),
(53, 'IP-SSAL000034', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 09:45 PM', '00025', 0),
(54, 'IP-SSAL000035', '2', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-03', '2023-07-03 10:00 PM', '00025', 1),
(55, 'IP-SSAL000035', '2', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-03', '2023-07-03 10:00 PM', '00025', 1),
(56, 'IP-SSAL000035', '2', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-03', '2023-07-03 10:00 PM', '00025', 1),
(57, 'IP-SSAL000035', '2', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-03', '2023-07-03 10:00 PM', '00025', 0),
(58, 'IP-SSAL000042', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:00 PM', '00035', 0),
(59, 'IP-SSAL000036', '2', NULL, NULL, 'Na', 'NA', 'NA', '2023-07-03', '2023-07-03 10:00 PM', '00025', 1),
(60, 'IP-SSAL000036', '2', NULL, NULL, 'Na', 'NA', 'NA', '2023-07-03', '2023-07-03 10:00 PM', '00025', 0),
(61, 'IP-SSAL000037', '2', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-03', '2023-07-03 10:15 PM', '00025', 0),
(62, 'IP-SSAL000040', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:15 PM', '00025', 0),
(63, 'IP-SSAL000043', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:15 PM', '00035', 0),
(64, 'IP-SSAL000045', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:15 PM', '00035', 0),
(65, 'IP-SSAL000048', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:30 PM', '00035', 0),
(66, 'IP-SSAL000049', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:30 PM', '00035', 0),
(67, 'IP-SSAL000047', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:30 PM', '00035', 0),
(68, 'IP-SSAL000039', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:45 PM', '00025', 0),
(69, 'IP-SSAL000046', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:45 PM', '00035', 0),
(70, 'IP-SSAL000051', 'Passd', NULL, NULL, 'Na', 'Na', 'Na', '2023-07-03', '2023-07-03 10:45 PM', '00035', 0),
(71, 'IP-SSAL000030', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:45 PM', '00025', 0),
(72, 'IP-SSAL000031', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:45 PM', '00025', 1),
(73, 'IP-SSAL000031', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:45 PM', '00025', 1),
(74, 'IP-SSAL000031', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:45 PM', '00025', 0),
(75, 'IP-SSAL000031', '2', NULL, NULL, '1', 'NA', 'NA', '2023-07-03', '2023-07-03 10:45 PM', '00025', 1),
(76, 'IP-SSAL000038', 'Pass', NULL, NULL, '1 time', 'NA', 'NA', '2023-07-04', '2023-07-04 12:45 AM', '00025', 0),
(77, 'IP-SSAL000030', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(78, 'IP-SSAL000031', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(79, 'IP-SSAL000032', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(80, 'IP-SSAL000033', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(81, 'IP-SSAL000034', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(82, 'IP-SSAL000035', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(83, 'IP-SSAL000036', '4 times', '4 times stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(84, 'IP-SSAL000037', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 12:45 PM', '00032', 0),
(85, 'IP-SSAL000038', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 01:00 PM', '00032', 1),
(86, 'IP-SSAL000038', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 01:00 PM', '00032', 0),
(87, 'IP-SSAL000039', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 01:00 PM', '00032', 0),
(88, 'IP-SSAL000040', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-04', '2023-07-04 01:00 PM', '00032', 0),
(89, 'IP-SSAL000048', '3', '1', '', '', '', '', '2023-07-04', '2023-07-04 06:45 PM', '00033', 0),
(90, 'IP-SSAL000048', '3', '1', '', '', '', '', '2023-07-04', '2023-07-04 06:45 PM', '00033', 0),
(91, 'IP-SSAL000048', '3', '1', '', '', '', '', '2023-07-04', '2023-07-04 06:45 PM', '00033', 0),
(92, 'IP-SSAL000050', '3', '1', '', '', '', '', '2023-07-04', '2023-07-04 07:00 PM', '00033', 0),
(93, 'IP-SSAL000051', '600', '1', '', '', '', '', '2023-07-04', '2023-07-04 07:00 PM', '00033', 0),
(94, 'IP-SSAL000054', '4', '1', '', '', '', '', '2023-07-04', '2023-07-04 07:15 PM', '00033', 0),
(95, 'IP-SSAL000046', '4', '1', '', '', '', '', '2023-07-04', '2023-07-04 07:15 PM', '00033', 0),
(96, 'IP-SSAL000030', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00025', 0),
(97, 'IP-SSAL000031', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00025', 0),
(98, 'IP-SSAL000032', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00025', 0),
(99, 'IP-SSAL000033', '2', '1', '', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00025', 0),
(100, 'IP-SSAL000043', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00035', 0),
(101, 'IP-SSAL000041', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00035', 0),
(102, 'IP-SSAL000035', '1', '1', '', '', '', '', '2023-07-04', '2023-07-04 10:15 PM', '00025', 0),
(103, 'IP-SSAL000036', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:30 PM', '00025', 0),
(104, 'IP-SSAL000037', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:30 PM', '00025', 0),
(105, 'IP-SSAL000042', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:30 PM', '00035', 0),
(106, 'IP-SSAL000039', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:30 PM', '00025', 0),
(107, 'IP-SSAL000040', '1', '1', 'NA', '', '', '', '2023-07-04', '2023-07-04 10:30 PM', '00025', 0),
(108, 'IP-SSAL000045', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:45 PM', '00035', 0),
(109, 'IP-SSAL000046', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:45 PM', '00035', 0),
(110, 'IP-SSAL000054', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:45 PM', '00035', 0),
(111, 'IP-SSAL000051', 'Passd 600ml', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:45 PM', '00035', 0),
(112, 'IP-SSAL000047', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:45 PM', '00035', 0),
(113, 'IP-SSAL000050', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 10:45 PM', '00035', 0),
(114, 'IP-SSAL000049', 'Passd', 'Yes', '', '', '', '', '2023-07-04', '2023-07-04 11:00 PM', '00035', 0),
(115, 'IP-SSAL000030', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 09:45 AM', '00032', 0),
(116, 'IP-SSAL000031', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:00 AM', '00032', 0),
(117, 'IP-SSAL000032', '5 times', 'Stool not passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:00 AM', '00032', 0),
(118, 'IP-SSAL000033', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:00 AM', '00032', 0),
(119, 'IP-SSAL000034', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:00 AM', '00032', 0),
(120, 'IP-SSAL000035', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:00 AM', '00032', 0),
(121, 'IP-SSAL000036', '4 times', 'Normal Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:00 AM', '00032', 0),
(122, 'IP-SSAL000037', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:15 AM', '00032', 0),
(123, 'IP-SSAL000038', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:15 AM', '00032', 0),
(124, 'IP-SSAL000040', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-05', '2023-07-05 10:30 AM', '00032', 0),
(125, 'IP-SSAL000055', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 11:30 AM', '00033', 0),
(126, 'IP-SSAL000043', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 11:30 AM', '00033', 0),
(127, 'IP-SSAL000041', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 11:45 AM', '00033', 0),
(128, 'IP-SSAL000042', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 11:45 AM', '00033', 0),
(129, 'IP-SSAL000045', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 11:45 AM', '00033', 0),
(130, 'IP-SSAL000049', '3', 'Not pass ', '', '', '', '', '2023-07-05', '2023-07-05 11:45 AM', '00033', 0),
(131, 'IP-SSAL000051', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 12:00 PM', '00033', 1),
(132, 'IP-SSAL000046', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 12:00 PM', '00033', 0),
(133, 'IP-SSAL000054', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 12:00 PM', '00033', 0),
(134, 'IP-SSAL000047', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 12:00 PM', '00033', 0),
(135, 'IP-SSAL000050', '3', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 12:00 PM', '00033', 0),
(136, 'IP-SSAL000051', '900 ', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 12:15 PM', '00033', 0),
(137, 'IP-SSAL000056', '4', 'Pass', '', '', '', '', '2023-07-05', '2023-07-05 03:45 PM', '00033', 0),
(138, 'IP-SSAL000030', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:15 PM', '00025', 0),
(139, 'IP-SSAL000031', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:30 PM', '00025', 0),
(140, 'IP-SSAL000032', 'NA', '', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:30 PM', '00025', 0),
(141, 'IP-SSAL000033', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:30 PM', '00025', 0),
(142, 'IP-SSAL000034', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(143, 'IP-SSAL000035', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(144, 'IP-SSAL000036', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(145, 'IP-SSAL000038', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(146, 'IP-SSAL000038', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(147, 'IP-SSAL000038', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(148, 'IP-SSAL000039', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(149, 'IP-SSAL000040', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 09:45 PM', '00025', 0),
(150, 'IP-SSAL000041', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(151, 'IP-SSAL000041', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(152, 'IP-SSAL000042', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(153, 'IP-SSAL000043', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(154, 'IP-SSAL000045', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(155, 'IP-SSAL000045', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(156, 'IP-SSAL000045', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(157, 'IP-SSAL000045', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(158, 'IP-SSAL000046', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(159, 'IP-SSAL000047', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(160, 'IP-SSAL000047', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(161, 'IP-SSAL000049', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:00 PM', '00025', 0),
(162, 'IP-SSAL000050', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(163, 'IP-SSAL000051', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(164, 'IP-SSAL000051', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(165, 'IP-SSAL000051', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(166, 'IP-SSAL000051', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(167, 'IP-SSAL000051', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(168, 'IP-SSAL000054', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(169, 'IP-SSAL000055', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(170, 'IP-SSAL000055', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(171, 'IP-SSAL000056', '1', '1', 'NA', '', '', '', '2023-07-05', '2023-07-05 10:15 PM', '00025', 0),
(172, 'IP-SSAL000039', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:15 PM', '00035', 0),
(173, 'IP-SSAL000039', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:15 PM', '00035', 0),
(174, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:15 PM', '00035', 0),
(175, 'IP-SSAL000030', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:15 PM', '00035', 0),
(176, 'IP-SSAL000030', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:15 PM', '00035', 0),
(177, 'IP-SSAL000040', 'Passd ', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:30 PM', '00035', 0),
(178, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:30 PM', '00035', 0),
(179, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:30 PM', '00035', 0),
(180, 'IP-SSAL000032', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:30 PM', '00035', 1),
(181, 'IP-SSAL000032', 'Yas', 'No', '', '', '', '', '2023-07-06', '2023-07-06 03:30 PM', '00035', 0),
(182, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:30 PM', '00035', 0),
(183, 'IP-SSAL000035', 'Passd', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:45 PM', '00035', 0),
(184, 'IP-SSAL000036', 'Yas', 'Yes', '', '', '', '', '2023-07-06', '2023-07-06 03:45 PM', '00035', 0),
(185, 'IP-SSAL000055', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(186, 'IP-SSAL000041', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(187, 'IP-SSAL000042', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(188, 'IP-SSAL000042', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(189, 'IP-SSAL000043', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(190, 'IP-SSAL000045', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(191, 'IP-SSAL000044', '-', '-', 'Na', '', '', '', '2023-07-06', '2023-07-06 04:00 PM', '00032', 0),
(192, 'IP-SSAL000030', '1', '1', 'NA', '', '', '', '2023-07-06', '2023-07-06 11:00 PM', '00025', 0),
(193, 'IP-SSAL000031', '1', '1', 'NA', '', '', '', '2023-07-06', '2023-07-06 11:00 PM', '00025', 0),
(194, 'IP-SSAL000032', '1', '1', 'NA', '', '', '', '2023-07-06', '2023-07-06 11:00 PM', '00025', 0),
(195, 'IP-SSAL000033', '1', '1', 'NA', '', '', '', '2023-07-06', '2023-07-06 11:15 PM', '00025', 0),
(196, 'IP-SSAL000044', '500ml', 'Stool not passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 11:45 AM', '00032', 0),
(197, 'IP-SSAL000041', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:15 PM', '00032', 0),
(198, 'IP-SSAL000043', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(199, 'IP-SSAL000042', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(200, 'IP-SSAL000055', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(201, 'IP-SSAL000045', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(202, 'IP-SSAL000056', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(203, 'IP-SSAL000050', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(204, 'IP-SSAL000049', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(205, 'IP-SSAL000047', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:30 PM', '00032', 0),
(206, 'IP-SSAL000051', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00032', 0),
(207, 'IP-SSAL000036', 'Yas', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(208, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(209, 'IP-SSAL000035', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(210, 'IP-SSAL000033', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(211, 'IP-SSAL000037', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(212, 'IP-SSAL000032', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(213, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(214, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(215, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(216, 'IP-SSAL000039', 'Passd', 'Yes', '', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00035', 0),
(217, 'IP-SSAL000054', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 12:45 PM', '00032', 0),
(218, 'IP-SSAL000046', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-07', '2023-07-07 01:00 PM', '00032', 0),
(219, 'IP-SSAL000030', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(220, 'IP-SSAL000031', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(221, 'IP-SSAL000032', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(222, 'IP-SSAL000032', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(223, 'IP-SSAL000033', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(224, 'IP-SSAL000033', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(225, 'IP-SSAL000034', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(226, 'IP-SSAL000034', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(227, 'IP-SSAL000035', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(228, 'IP-SSAL000035', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(229, 'IP-SSAL000035', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:15 PM', '00025', 0),
(230, 'IP-SSAL000036', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(231, 'IP-SSAL000036', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(232, 'IP-SSAL000037', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(233, 'IP-SSAL000039', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(234, 'IP-SSAL000039', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(235, 'IP-SSAL000040', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(236, 'IP-SSAL000040', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(237, 'IP-SSAL000040', '1', '1', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:30 PM', '00025', 0),
(238, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-07', '2023-07-07 09:45 PM', '00025', 0),
(239, 'IP-SSAL000042', '3', 'Pass', '', '', '', '', '2023-07-07', '2023-07-07 11:45 PM', '00033', 0),
(240, 'IP-SSAL000043', '3', 'Pass', '', '', '', '', '2023-07-07', '2023-07-07 11:45 PM', '00033', 0),
(241, 'IP-SSAL000041', '4', 'Pass', '', '', '', '', '2023-07-07', '2023-07-07 11:45 PM', '00033', 0),
(242, 'IP-SSAL000055', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:00 AM', '00033', 0),
(243, 'IP-SSAL000045', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:00 AM', '00033', 0),
(244, 'IP-SSAL000044', '4', 'Not pass ', '', '', '', '', '2023-07-08', '2023-07-08 12:00 AM', '00033', 0),
(245, 'IP-SSAL000050', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:00 AM', '00033', 0),
(246, 'IP-SSAL000047', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:15 AM', '00033', 0),
(247, 'IP-SSAL000049', '3', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:15 AM', '00033', 0),
(248, 'IP-SSAL000056', '3', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:15 AM', '00033', 0),
(249, 'IP-SSAL000046', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:15 AM', '00033', 0),
(250, 'IP-SSAL000054', '4', '2time pass', '', '', '', '', '2023-07-08', '2023-07-08 12:15 AM', '00033', 0),
(251, 'IP-SSAL000051', '1100', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 12:30 AM', '00033', 0),
(252, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 09:00 AM', '00035', 0),
(253, 'IP-SSAL000037', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 09:00 AM', '00035', 0),
(254, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 09:00 AM', '00035', 0),
(255, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 09:00 AM', '00035', 0),
(256, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 09:00 AM', '00035', 0),
(257, 'IP-SSAL000039', 'Yas', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 09:00 AM', '00035', 0),
(258, 'IP-SSAL000043', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-08', '2023-07-08 01:00 PM', '00032', 0),
(259, 'IP-SSAL000042', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00032', 0),
(260, 'IP-SSAL000041', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00032', 0),
(261, 'IP-SSAL000055', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00032', 0),
(262, 'IP-SSAL000036', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(263, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(264, 'IP-SSAL000035', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(265, 'IP-SSAL000033', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(266, 'IP-SSAL000044', '4 times', '3 times stool passed ', 'Na', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00032', 0),
(267, 'IP-SSAL000037', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(268, 'IP-SSAL000032', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(269, 'IP-SSAL000045', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00032', 0),
(270, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(271, 'IP-SSAL000040', 'Passd ', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(272, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(273, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-08', '2023-07-08 01:15 PM', '00035', 0),
(274, 'IP-SSAL000030', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:30 PM', '00025', 0),
(275, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:30 PM', '00025', 0),
(276, 'IP-SSAL000032', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:30 PM', '00025', 0),
(277, 'IP-SSAL000033', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:30 PM', '00025', 0),
(278, 'IP-SSAL000034', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:30 PM', '00025', 0),
(279, 'IP-SSAL000035', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:30 PM', '00025', 0),
(280, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:45 PM', '00025', 0),
(281, 'IP-SSAL000037', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:45 PM', '00025', 0),
(282, 'IP-SSAL000037', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:45 PM', '00025', 0),
(283, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:45 PM', '00025', 0),
(284, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:45 PM', '00025', 0),
(285, 'IP-SSAL000046', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-08', '2023-07-08 09:45 PM', '00025', 0),
(286, 'IP-SSAL000045', '4', '1', '', '', '', '', '2023-07-08', '2023-07-08 10:30 PM', '00033', 0),
(287, 'IP-SSAL000042', '3', '1', '', '', '', '', '2023-07-08', '2023-07-08 10:30 PM', '00033', 0),
(288, 'IP-SSAL000043', '3', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 10:30 PM', '00033', 0),
(289, 'IP-SSAL000055', '3', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 10:30 PM', '00033', 0),
(290, 'IP-SSAL000041', '3', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 10:45 PM', '00033', 0),
(291, 'IP-SSAL000044', '4', 'Pass. ', '', '', '', '', '2023-07-08', '2023-07-08 10:45 PM', '00033', 0),
(292, 'IP-SSAL000056', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 10:45 PM', '00033', 0),
(293, 'IP-SSAL000051', '800', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 10:45 PM', '00033', 0),
(294, 'IP-SSAL000054', '4', '2time pass', '', '', '', '', '2023-07-08', '2023-07-08 10:45 PM', '00033', 0),
(295, 'IP-SSAL000046', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 10:45 PM', '00033', 0),
(296, 'IP-SSAL000049', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 11:00 PM', '00033', 0),
(297, 'IP-SSAL000050', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 11:00 PM', '00033', 0),
(298, 'IP-SSAL000047', '4', 'Pass', '', '', '', '', '2023-07-08', '2023-07-08 11:00 PM', '00033', 0),
(299, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 09:45 AM', '00035', 0),
(300, 'IP-SSAL000035', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 09:45 AM', '00035', 0),
(301, 'IP-SSAL000032', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 09:45 AM', '00035', 0),
(302, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 09:45 AM', '00035', 0),
(303, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 10:00 AM', '00035', 0),
(304, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 10:00 AM', '00035', 0),
(305, 'IP-SSAL000039', 'Passd', 'Yes', '', '', '', '', '2023-07-09', '2023-07-09 10:00 AM', '00035', 0),
(306, 'IP-SSAL000042', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:00 PM', '00032', 0),
(307, 'IP-SSAL000044', '4 times', 'Stool not passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:00 PM', '00032', 0),
(308, 'IP-SSAL000055', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:15 PM', '00032', 0),
(309, 'IP-SSAL000041', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:15 PM', '00032', 0),
(310, 'IP-SSAL000043', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:15 PM', '00032', 0),
(311, 'IP-SSAL000045', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:15 PM', '00032', 0),
(312, 'IP-SSAL000051', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:15 PM', '00032', 0),
(313, 'IP-SSAL000050', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:30 PM', '00032', 0),
(314, 'IP-SSAL000049', '6 times ', 'Stool not passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:30 PM', '00032', 0),
(315, 'IP-SSAL000047', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:30 PM', '00032', 0),
(316, 'IP-SSAL000046', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:30 PM', '00032', 0),
(317, 'IP-SSAL000056', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-09', '2023-07-09 03:30 PM', '00032', 0),
(318, 'IP-SSAL000030', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:15 PM', '00025', 0),
(319, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:15 PM', '00025', 0),
(320, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:15 PM', '00025', 0),
(321, 'IP-SSAL000032', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:15 PM', '00025', 0),
(322, 'IP-SSAL000033', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:15 PM', '00025', 0),
(323, 'IP-SSAL000034', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:30 PM', '00025', 0),
(324, 'IP-SSAL000035', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:30 PM', '00025', 0),
(325, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:30 PM', '00025', 0),
(326, 'IP-SSAL000037', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:30 PM', '00025', 0),
(327, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:30 PM', '00025', 0),
(328, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:30 PM', '00025', 0),
(329, 'IP-SSAL000040', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-09', '2023-07-09 09:45 PM', '00025', 0),
(330, 'IP-SSAL000051', '900 ', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:00 PM', '00033', 0),
(331, 'IP-SSAL000050', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:00 PM', '00033', 0),
(332, 'IP-SSAL000049', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:00 PM', '00033', 0),
(333, 'IP-SSAL000056', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:00 PM', '00033', 0),
(334, 'IP-SSAL000046', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:15 PM', '00033', 0),
(335, 'IP-SSAL000047', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:15 PM', '00033', 0),
(336, 'IP-SSAL000045', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:15 PM', '00033', 0),
(337, 'IP-SSAL000045', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:15 PM', '00033', 0),
(338, 'IP-SSAL000055', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:30 PM', '00033', 0),
(339, 'IP-SSAL000042', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:30 PM', '00033', 0),
(340, 'IP-SSAL000041', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:30 PM', '00033', 0),
(341, 'IP-SSAL000044', '4', 'Pass', '', '', '', '', '2023-07-09', '2023-07-09 11:30 PM', '00033', 0),
(342, 'IP-SSAL000036', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:15 AM', '00035', 0),
(343, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:15 AM', '00035', 0),
(344, 'IP-SSAL000035', 'Passd ', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:30 AM', '00035', 0),
(345, 'IP-SSAL000033', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:30 AM', '00035', 0),
(346, 'IP-SSAL000037', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:30 AM', '00035', 0),
(347, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:45 AM', '00035', 0),
(348, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 09:45 AM', '00035', 0),
(349, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 10:00 AM', '00035', 0),
(350, 'IP-SSAL000039', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 10:00 AM', '00035', 0),
(351, 'IP-SSAL000047', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(352, 'IP-SSAL000046', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(353, 'IP-SSAL000051', '1200ml', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(354, 'IP-SSAL000050', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(355, 'IP-SSAL000056', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(356, 'IP-SSAL000049', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(357, 'IP-SSAL000055', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(358, 'IP-SSAL000042', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(359, 'IP-SSAL000041', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 11:45 AM', '00032', 0),
(360, 'IP-SSAL000044', '4 times', 'Stool not passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 12:00 PM', '00032', 0),
(361, 'IP-SSAL000045', '5 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 12:00 PM', '00032', 0),
(362, 'IP-SSAL000043', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-10', '2023-07-10 12:00 PM', '00032', 0),
(363, 'IP-SSAL000036', 'Yas', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 04:30 PM', '00035', 0),
(364, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 01:30 AM', '00035', 0),
(365, 'IP-SSAL000035', 'Passd', 'Yes', '', '', '', '', '2023-07-10', '2023-07-10 04:30 PM', '00035', 0),
(366, 'IP-SSAL000033', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:30 PM', '00035', 0),
(367, 'IP-SSAL000032', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:30 PM', '00035', 0),
(368, 'IP-SSAL000031', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:30 PM', '00035', 0),
(369, 'IP-SSAL000040', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:45 PM', '00035', 0),
(370, 'IP-SSAL000040', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:45 PM', '00035', 0),
(371, 'IP-SSAL000038', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:45 PM', '00035', 0),
(372, 'IP-SSAL000030', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:45 PM', '00035', 0),
(373, 'IP-SSAL000039', 'Passd', 'No', '', '', '', '', '2023-07-10', '2023-07-10 04:45 PM', '00035', 0),
(374, 'IP-SSAL000030', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:15 PM', '00025', 0),
(375, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:15 PM', '00025', 0),
(376, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:15 PM', '00025', 0),
(377, 'IP-SSAL000032', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:15 PM', '00025', 0),
(378, 'IP-SSAL000033', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:15 PM', '00025', 0),
(379, 'IP-SSAL000034', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:15 PM', '00025', 0),
(380, 'IP-SSAL000035', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:30 PM', '00025', 0),
(381, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:30 PM', '00025', 0),
(382, 'IP-SSAL000037', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:30 PM', '00025', 0),
(383, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:30 PM', '00025', 0),
(384, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:30 PM', '00025', 0),
(385, 'IP-SSAL000040', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-10', '2023-07-10 09:30 PM', '00025', 0),
(386, 'IP-SSAL000055', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:15 PM', '00033', 0),
(387, 'IP-SSAL000043', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:15 PM', '00033', 0),
(388, 'IP-SSAL000042', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:15 PM', '00033', 0),
(389, 'IP-SSAL000044', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:15 PM', '00033', 0),
(390, 'IP-SSAL000041', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:15 PM', '00033', 0),
(391, 'IP-SSAL000045', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:15 PM', '00033', 0),
(392, 'IP-SSAL000054', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(393, 'IP-SSAL000046', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(394, 'IP-SSAL000050', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(395, 'IP-SSAL000051', '900 ', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(396, 'IP-SSAL000049', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(397, 'IP-SSAL000047', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(398, 'IP-SSAL000056', '4', 'Pass', '', '', '', '', '2023-07-10', '2023-07-10 10:30 PM', '00033', 0),
(399, 'IP-SSAL000036', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(400, 'IP-SSAL000034', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(401, 'IP-SSAL000035', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(402, 'IP-SSAL000033', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(403, 'IP-SSAL000037', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(404, 'IP-SSAL000032', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(405, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(406, 'IP-SSAL000040', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:30 PM', '00035', 0),
(407, 'IP-SSAL000031', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:45 PM', '00035', 0),
(408, 'IP-SSAL000030', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:45 PM', '00035', 0),
(409, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 01:45 PM', '00035', 0),
(410, 'IP-SSAL000039', 'Passd', 'No', '', '', '', '', '2023-07-11', '2023-07-11 01:45 PM', '00035', 0),
(411, 'IP-SSAL000046', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:00 PM', '00035', 0),
(412, 'IP-SSAL000046', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:00 PM', '00035', 0),
(413, 'IP-SSAL000054', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:00 PM', '00035', 0),
(414, 'IP-SSAL000056', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:00 PM', '00035', 0),
(415, 'IP-SSAL000051', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:30 PM', '00035', 0),
(416, 'IP-SSAL000047', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:30 PM', '00035', 0),
(417, 'IP-SSAL000049', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:30 PM', '00035', 0),
(418, 'IP-SSAL000050', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:30 PM', '00035', 0),
(419, 'IP-SSAL000043', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:45 PM', '00035', 0),
(420, 'IP-SSAL000042', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:45 PM', '00035', 0),
(421, 'IP-SSAL000055', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:45 PM', '00035', 0),
(422, 'IP-SSAL000045', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:45 PM', '00035', 0),
(423, 'IP-SSAL000041', 'Passd', 'Yes', '', '', '', '', '2023-07-11', '2023-07-11 02:45 PM', '00035', 0),
(424, 'IP-SSAL000030', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-11', '2023-07-11 11:45 PM', '00025', 0),
(425, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:00 AM', '00025', 0),
(426, 'IP-SSAL000032', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:00 AM', '00025', 0),
(427, 'IP-SSAL000032', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:00 AM', '00025', 0),
(428, 'IP-SSAL000033', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:00 AM', '00025', 0),
(429, 'IP-SSAL000034', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:00 AM', '00025', 0),
(430, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(431, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(432, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(433, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(434, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(435, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(436, 'IP-SSAL000035', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(437, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(438, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(439, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(440, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(441, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(442, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(443, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(444, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(445, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(446, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(447, 'IP-SSAL000037', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(448, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(449, 'IP-SSAL000039', 'Pass', 'Pass', 'Na', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 1),
(450, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(451, 'IP-SSAL000040', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:15 AM', '00025', 0),
(452, 'IP-SSAL000041', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 12:30 AM', '00032', 1),
(453, 'IP-SSAL000041', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:00 PM', '00032', 0),
(454, 'IP-SSAL000042', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:12 AM', '00032', 0),
(455, 'IP-SSAL000043', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:13 AM', '00032', 0),
(456, 'IP-SSAL000044', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-11', '2023-07-11 11:00 PM', '00032', 0),
(457, 'IP-SSAL000045', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:16 PM', '00032', 0),
(458, 'IP-SSAL000046', '4 times', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:20 PM', '00032', 1),
(459, 'IP-SSAL000046', '4 times', 'Pass', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:20 PM', '00032', 0),
(460, 'IP-SSAL000047', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:30 PM', '00032', 0),
(461, 'IP-SSAL000049', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:32 PM', '00032', 0),
(462, 'IP-SSAL000050', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:33 AM', '00032', 0),
(463, 'IP-SSAL000051', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:34 PM', '00032', 0),
(464, 'IP-SSAL000054', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:36 PM', '00032', 0),
(465, 'IP-SSAL000054', '5 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:39 PM', '00032', 0),
(466, 'IP-SSAL000055', '4 times', 'Pass', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:40 PM', '00032', 0),
(467, 'IP-SSAL000056', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:43 PM', '00032', 0),
(468, 'IP-SSAL000058', '550ml', 'Stool passed ', 'NA', '', '', '', '2023-07-11', '2023-07-11 11:52 PM', '00032', 0),
(469, 'IP-SSAL000040', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:00 PM', '00033', 0),
(470, 'IP-SSAL000031', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:00 PM', '00033', 0);
INSERT INTO `iop_output_record` (`output_id`, `iop_id`, `urine`, `stool`, `remark`, `feaces`, `respitation`, `skin`, `dDate`, `dDateTime`, `cPreparedBy`, `InActive`) VALUES
(471, 'IP-SSAL000039', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:00 PM', '00033', 0),
(472, 'IP-SSAL000033', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:15 PM', '00033', 0),
(473, 'IP-SSAL000034', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:15 PM', '00033', 0),
(474, 'IP-SSAL000037', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:30 PM', '00033', 0),
(475, 'IP-SSAL000035', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:30 PM', '00033', 0),
(476, 'IP-SSAL000035', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:30 PM', '00033', 0),
(477, 'IP-SSAL000038', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:45 PM', '00033', 0),
(478, 'IP-SSAL000044', '3', 'Not pass ', '', '', '', '', '2023-07-12', '2023-07-12 06:45 PM', '00033', 0),
(479, 'IP-SSAL000045', '4', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:45 PM', '00033', 0),
(480, 'IP-SSAL000045', '4', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 06:45 PM', '00033', 0),
(481, 'IP-SSAL000055', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 07:00 PM', '00033', 0),
(482, 'IP-SSAL000041', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 07:00 PM', '00033', 0),
(483, 'IP-SSAL000041', '3', 'Pass', '', '', '', '', '2023-07-12', '2023-07-12 07:00 PM', '00033', 0),
(484, 'IP-SSAL000058', '900 ', 'Not pass ', '', '', '', '', '2023-07-12', '2023-07-12 07:00 PM', '00033', 0),
(485, 'IP-SSAL000058', '900 ', 'Not pass ', '', '', '', '', '2023-07-12', '2023-07-12 07:00 PM', '00033', 0),
(486, 'IP-SSAL000030', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:30 PM', '00025', 0),
(487, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(488, 'IP-SSAL000032', 'Pass', 'No ', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(489, 'IP-SSAL000033', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(490, 'IP-SSAL000034', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(491, 'IP-SSAL000035', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(492, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(493, 'IP-SSAL000037', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 09:45 PM', '00025', 0),
(494, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:00 PM', '00025', 0),
(495, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:00 PM', '00025', 0),
(496, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:00 PM', '00025', 0),
(497, 'IP-SSAL000041', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:00 PM', '00032', 0),
(498, 'IP-SSAL000042', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:01 PM', '00032', 0),
(499, 'IP-SSAL000043', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-13', '2023-07-13 12:45 AM', '00032', 1),
(500, 'IP-SSAL000043', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:03 PM', '00032', 0),
(501, 'IP-SSAL000044', '4 times', 'Stool not pass', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:05 PM', '00032', 0),
(502, 'IP-SSAL000045', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:02 PM', '00032', 0),
(503, 'IP-SSAL000046', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:40 PM', '00032', 0),
(504, 'IP-SSAL000047', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:46 PM', '00032', 0),
(505, 'IP-SSAL000049', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:50 PM', '00032', 0),
(506, 'IP-SSAL000050', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 10:55 PM', '00032', 0),
(507, 'IP-SSAL000051', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:00 PM', '00032', 0),
(508, 'IP-SSAL000054', '4 times', 'Stool passed ', 'Na', '', '', '', '2023-07-12', '2023-07-12 11:15 PM', '00032', 0),
(509, 'IP-SSAL000055', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:18 PM', '00032', 0),
(510, 'IP-SSAL000056', '4 times', 'Stool passed ', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:20 PM', '00032', 0),
(511, 'IP-SSAL000058', '700ml', '-', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:30 AM', '00032', 1),
(512, 'IP-SSAL000058', '700ml', '-', 'NA', '', '', '', '2023-07-12', '2023-07-12 11:50 PM', '00032', 0),
(513, 'IP-SSAL000036', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:15 AM', '00035', 0),
(514, 'IP-SSAL000034', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:15 AM', '00035', 0),
(515, 'IP-SSAL000035', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:15 AM', '00035', 0),
(516, 'IP-SSAL000040', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:30 AM', '00035', 0),
(517, 'IP-SSAL000031', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:30 AM', '00035', 0),
(518, 'IP-SSAL000032', 'Yas', 'No', '', '', '', '', '2023-07-13', '2023-07-13 09:30 AM', '00035', 0),
(519, 'IP-SSAL000037', 'Passd', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:30 AM', '00035', 0),
(520, 'IP-SSAL000030', 'Passd', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:30 AM', '00035', 0),
(521, 'IP-SSAL000038', 'Passd', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:30 AM', '00035', 0),
(522, 'IP-SSAL000039', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:45 AM', '00035', 0),
(523, 'IP-SSAL000033', 'Yas', 'Yes', '', '', '', '', '2023-07-13', '2023-07-13 09:45 AM', '00035', 0),
(524, 'IP-SSAL000036', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:00 PM', '00035', 0),
(525, 'IP-SSAL000034', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(526, 'IP-SSAL000035', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(527, 'IP-SSAL000035', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(528, 'IP-SSAL000033', 'Passd', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(529, 'IP-SSAL000037', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(530, 'IP-SSAL000032', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(531, 'IP-SSAL000040', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(532, 'IP-SSAL000031', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:15 PM', '00035', 0),
(533, 'IP-SSAL000038', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:30 PM', '00035', 0),
(534, 'IP-SSAL000030', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:30 PM', '00035', 0),
(535, 'IP-SSAL000039', 'Yas', '', '', '', '', '', '2023-07-13', '2023-07-13 01:30 PM', '00035', 0),
(536, 'IP-SSAL000047', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 ', '00033', 0),
(537, 'IP-SSAL000045', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:15 PM', '00033', 0),
(538, 'IP-SSAL000042', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:30 PM', '00033', 0),
(539, 'IP-SSAL000043', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:30 PM', '00033', 0),
(540, 'IP-SSAL000044', '3', 'Not pass ', '', '', '', '', '2023-07-13', '2023-07-13 05:30 PM', '00033', 0),
(541, 'IP-SSAL000041', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:30 PM', '00033', 0),
(542, 'IP-SSAL000058', '1000', 'Not pass ', '', '', '', '', '2023-07-13', '2023-07-13 05:30 PM', '00033', 0),
(543, 'IP-SSAL000050', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:45 PM', '00033', 0),
(544, 'IP-SSAL000050', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:45 PM', '00033', 0),
(545, 'IP-SSAL000051', '1200', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 05:45 PM', '00033', 0),
(546, 'IP-SSAL000048', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 06:00 PM', '00033', 0),
(547, 'IP-SSAL000056', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 06:00 PM', '00033', 0),
(548, 'IP-SSAL000054', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 06:00 PM', '00033', 0),
(549, 'IP-SSAL000049', '3', 'Pass', '', '', '', '', '2023-07-13', '2023-07-13 06:00 PM', '00033', 0),
(550, 'IP-SSAL000030', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 09:45 PM', '00025', 0),
(551, 'IP-SSAL000031', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 09:45 PM', '00025', 0),
(552, 'IP-SSAL000032', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(553, 'IP-SSAL000033', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(554, 'IP-SSAL000034', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(555, 'IP-SSAL000035', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(556, 'IP-SSAL000036', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(557, 'IP-SSAL000037', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(558, 'IP-SSAL000038', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(559, 'IP-SSAL000039', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(560, 'IP-SSAL000040', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:00 PM', '00025', 0),
(561, 'IP-SSAL000041', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:15 PM', '00025', 0),
(562, 'IP-SSAL000042', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:15 PM', '00025', 0),
(563, 'IP-SSAL000043', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:15 PM', '00025', 0),
(564, 'IP-SSAL000044', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:15 PM', '00025', 0),
(565, 'IP-SSAL000045', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:15 PM', '00025', 0),
(566, 'IP-SSAL000046', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:15 PM', '00025', 0),
(567, 'IP-SSAL000047', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:30 PM', '00025', 0),
(568, 'IP-SSAL000048', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:30 PM', '00025', 0),
(569, 'IP-SSAL000049', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:30 PM', '00025', 0),
(570, 'IP-SSAL000050', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:30 PM', '00025', 0),
(571, 'IP-SSAL000051', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:30 PM', '00025', 1),
(572, 'IP-SSAL000051', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:30 PM', '00025', 1),
(573, 'IP-SSAL000051', '900', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:45 PM', '00025', 0),
(574, 'IP-SSAL000054', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:45 PM', '00025', 0),
(575, 'IP-SSAL000055', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:45 PM', '00025', 0),
(576, 'IP-SSAL000058', '900', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:45 PM', '00025', 0),
(577, 'IP-SSAL000059', 'Pass', 'Pass', 'NA', '', '', '', '2023-07-13', '2023-07-13 10:45 PM', '00025', 0),
(578, 'IP-SSAL000036', 'Passd', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:30 AM', '00035', 0),
(579, 'IP-SSAL000034', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:00 AM', '00035', 0),
(580, 'IP-SSAL000035', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:15 PM', '00035', 0),
(581, 'IP-SSAL000033', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:15 PM', '00035', 0),
(582, 'IP-SSAL000037', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:00 AM', '00035', 0),
(583, 'IP-SSAL000032', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:30 AM', '00035', 0),
(584, 'IP-SSAL000031', 'Passd ', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:15 AM', '00035', 0),
(585, 'IP-SSAL000040', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:15 AM', '00035', 0),
(586, 'IP-SSAL000040', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:15 AM', '00035', 0),
(587, 'IP-SSAL000038', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 12:30 PM', '00035', 0),
(588, 'IP-SSAL000030', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 08:30 AM', '00035', 0),
(589, 'IP-SSAL000039', 'Passd', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 07:30 AM', '00035', 0),
(590, 'IP-SSAL000036', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 02:15 PM', '00035', 0),
(591, 'IP-SSAL000034', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 01:15 PM', '00035', 0),
(592, 'IP-SSAL000035', 'Yas', 'Yes', '', '', '', '', '2023-07-14', '2023-07-14 02:45 PM', '00035', 0),
(593, 'IP-SSAL000033', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 02:00 PM', '00035', 0),
(594, 'IP-SSAL000037', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 02:15 PM', '00035', 0),
(595, 'IP-SSAL000032', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 02:00 PM', '00035', 0),
(596, 'IP-SSAL000031', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 01:00 PM', '00035', 0),
(597, 'IP-SSAL000040', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00035', 0),
(598, 'IP-SSAL000038', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 01:00 PM', '00035', 0),
(599, 'IP-SSAL000038', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 02:00 PM', '00035', 0),
(600, 'IP-SSAL000030', 'Yas', '', '', '', '', '', '2023-07-14', '2023-07-14 01:00 PM', '00035', 0),
(601, 'IP-SSAL000042', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:15 PM', '00033', 0),
(602, 'IP-SSAL000044', '3', 'Not pass ', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(603, 'IP-SSAL000041', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(604, 'IP-SSAL000043', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(605, 'IP-SSAL000055', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(606, 'IP-SSAL000045', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(607, 'IP-SSAL000058', '900 ', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(608, 'IP-SSAL000051', '1100', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:30 PM', '00033', 0),
(609, 'IP-SSAL000050', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00033', 0),
(610, 'IP-SSAL000048', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00033', 0),
(611, 'IP-SSAL000049', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00033', 0),
(612, 'IP-SSAL000054', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00033', 0),
(613, 'IP-SSAL000047', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00033', 0),
(614, 'IP-SSAL000046', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 01:45 PM', '00033', 0),
(615, 'IP-SSAL000056', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 02:00 PM', '00033', 0),
(616, 'IP-SSAL000059', '3', 'Pass', '', '', '', '', '2023-07-14', '2023-07-14 02:00 PM', '00033', 0),
(617, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 09:45 PM', '00025', 0),
(618, 'IP-SSAL000031', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 09:45 PM', '00025', 0),
(619, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 09:45 PM', '00025', 0),
(620, 'IP-SSAL000034', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(621, 'IP-SSAL000035', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(622, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(623, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(624, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(625, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(626, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:00 PM', '00025', 0),
(627, 'IP-SSAL000054', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:30 PM', '00032', 0),
(628, 'IP-SSAL000046', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(629, 'IP-SSAL000048', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(630, 'IP-SSAL000051', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(631, 'IP-SSAL000049', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(632, 'IP-SSAL000050', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(633, 'IP-SSAL000047', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(634, 'IP-SSAL000056', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(635, 'IP-SSAL000041', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(636, 'IP-SSAL000044', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 10:45 PM', '00032', 0),
(637, 'IP-SSAL000042', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(638, 'IP-SSAL000043', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(639, 'IP-SSAL000055', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(640, 'IP-SSAL000045', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(641, 'IP-SSAL000058', '4 times', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(642, 'IP-SSAL000058', '600ml', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(643, 'IP-SSAL000058', '600ml', 'Pass', 'NA', '', '', '', '2023-07-14', '2023-07-14 11:00 PM', '00032', 0),
(644, 'IP-SSAL000036', 'Normal', 'Yes', '', '', '', '', '2023-07-15', '2023-07-15 10:15 AM', '00035', 0),
(645, 'IP-SSAL000034', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 10:15 AM', '00035', 0),
(646, 'IP-SSAL000035', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 10:30 AM', '00035', 0),
(647, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 11:15 AM', '00035', 0),
(648, 'IP-SSAL000037', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 09:15 AM', '00035', 0),
(649, 'IP-SSAL000032', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 09:30 AM', '00035', 0),
(650, 'IP-SSAL000039', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 09:30 AM', '00035', 0),
(651, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 09:30 AM', '00035', 0),
(652, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 09:30 AM', '00035', 0),
(653, 'IP-SSAL000031', 'Passd ', '', '', '', '', '', '2023-07-15', '2023-07-15 11:30 AM', '00035', 0),
(654, 'IP-SSAL000038', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 08:30 AM', '00035', 0),
(655, 'IP-SSAL000030', 'Normal', 'Normal', '', '', '', '', '2023-07-15', '2023-07-15 08:45 AM', '00035', 0),
(656, 'IP-SSAL000036', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 01:30 PM', '00035', 0),
(657, 'IP-SSAL000033', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 02:30 PM', '00035', 0),
(658, 'IP-SSAL000037', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 01:30 PM', '00035', 0),
(659, 'IP-SSAL000032', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 02:15 PM', '00035', 0),
(660, 'IP-SSAL000040', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 01:45 PM', '00035', 0),
(661, 'IP-SSAL000031', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 02:45 PM', '00035', 0),
(662, 'IP-SSAL000038', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 01:15 PM', '00035', 0),
(663, 'IP-SSAL000030', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 01:45 PM', '00035', 0),
(664, 'IP-SSAL000039', 'Normal', '', '', '', '', '', '2023-07-15', '2023-07-15 12:45 PM', '00035', 0),
(665, 'IP-SSAL000042', 'Normal ', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(666, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(667, 'IP-SSAL000044', 'Normal', 'Hard stool ', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(668, 'IP-SSAL000058', '700', 'No motion', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(669, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(670, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(671, 'IP-SSAL000055', 'Normal ', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:15 PM', '00033', 0),
(672, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:30 PM', '00033', 0),
(673, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:30 PM', '00033', 0),
(674, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:30 PM', '00033', 0),
(675, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:30 PM', '00033', 0),
(676, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:30 PM', '00033', 0),
(677, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 06:45 PM', '00033', 0),
(678, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 08:00 PM', '00033', 0),
(679, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 08:00 PM', '00033', 0),
(680, 'IP-SSAL000051', '1000', 'Normal ', '', '', '', '', '2023-07-15', '2023-07-15 08:00 PM', '00033', 0),
(681, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:30 PM', '00025', 0),
(682, 'IP-SSAL000032', 'Normal ', 'No ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:30 PM', '00025', 0),
(683, 'IP-SSAL000033', 'Normal ', 'Loose motions ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:30 PM', '00025', 0),
(684, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(685, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(686, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(687, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(688, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(689, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(690, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(691, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(692, 'IP-SSAL000045', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 09:45 PM', '00025', 0),
(693, 'IP-SSAL000046', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:00 PM', '00025', 0),
(694, 'IP-SSAL000055', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(695, 'IP-SSAL000044', '600ml', '-', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(696, 'IP-SSAL000058', '600ml', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(697, 'IP-SSAL000054', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(698, 'IP-SSAL000059', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(699, 'IP-SSAL000050', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(700, 'IP-SSAL000047', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:15 PM', '00032', 0),
(701, 'IP-SSAL000049', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:30 PM', '00032', 0),
(702, 'IP-SSAL000048', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:30 PM', '00032', 0),
(703, 'IP-SSAL000056', 'Normal ', 'Normal Stool passed ', 'NA', '', '', '', '2023-07-15', '2023-07-15 10:30 PM', '00032', 0),
(704, 'IP-SSAL000038', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 10:45 AM', '00035', 0),
(705, 'IP-SSAL000039', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 07:45 AM', '00035', 0),
(706, 'IP-SSAL000032', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 07:45 AM', '00035', 0),
(707, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 07:45 AM', '00035', 0),
(708, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 08:45 AM', '00035', 0),
(709, 'IP-SSAL000030', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 08:15 AM', '00035', 0),
(710, 'IP-SSAL000036', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 07:30 AM', '00035', 0),
(711, 'IP-SSAL000037', 'Normal', 'Normal', '', '', '', '', '2023-07-16', '2023-07-16 08:15 AM', '00035', 0),
(712, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 04:30 PM', '00033', 0),
(713, 'IP-SSAL000049', 'Normal', 'No motion ', '', '', '', '', '2023-07-16', '2023-07-16 04:45 PM', '00033', 0),
(714, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 04:45 PM', '00033', 0),
(715, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 04:45 PM', '00033', 0),
(716, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:00 PM', '00033', 0),
(717, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:00 PM', '00033', 0),
(718, 'IP-SSAL000058', '1000ml', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:00 PM', '00033', 0),
(719, 'IP-SSAL000058', '1000ml', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:00 PM', '00033', 0),
(720, 'IP-SSAL000058', '1000ml', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:00 PM', '00033', 0),
(721, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:00 PM', '00033', 0),
(722, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:15 PM', '00033', 0),
(723, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:15 PM', '00033', 0),
(724, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:15 PM', '00033', 0),
(725, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:15 PM', '00033', 0),
(726, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:15 PM', '00033', 0),
(727, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:30 PM', '00033', 0),
(728, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:30 PM', '00033', 0),
(729, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:30 PM', '00033', 0),
(730, 'IP-SSAL000044', '1600', 'Normal ', '', '', '', '', '2023-07-16', '2023-07-16 05:30 PM', '00033', 0),
(731, 'IP-SSAL000054', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:30 PM', '00032', 0),
(732, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:30 PM', '00025', 0),
(733, 'IP-SSAL000056', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(734, 'IP-SSAL000031', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(735, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(736, 'IP-SSAL000059', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(737, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(738, 'IP-SSAL000046', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(739, 'IP-SSAL000050', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(740, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(741, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(742, 'IP-SSAL000047', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(743, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(744, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(745, 'IP-SSAL000048', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(746, 'IP-SSAL000049', 'Normal ', 'Stool not passed ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(747, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(748, 'IP-SSAL000044', '600ml', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(749, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00025', 0),
(750, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(751, 'IP-SSAL000055', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-16', '2023-07-16 09:45 PM', '00032', 0),
(752, 'IP-SSAL000058', '600ml', 'Normal ', 'NA', '', '', '', '2023-07-16', '2023-07-16 10:00 PM', '00032', 0),
(753, 'IP-SSAL000045', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-16', '2023-07-16 10:00 PM', '00032', 0),
(754, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-17', '2023-07-17 08:00 AM', '00035', 0),
(755, 'IP-SSAL000036', 'Normal', 'Loss motion', '', '', '', '', '2023-07-17', '2023-07-17 08:00 AM', '00035', 0),
(756, 'IP-SSAL000032', 'Normal', 'No', '', '', '', '', '2023-07-17', '2023-07-17 11:15 AM', '00035', 0),
(757, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-17', '2023-07-17 07:30 AM', '00035', 0),
(758, 'IP-SSAL000038', 'Normal', 'Normal', '', '', '', '', '2023-07-17', '2023-07-17 07:30 AM', '00035', 0),
(759, 'IP-SSAL000030', 'Normal', 'Normal', '', '', '', '', '2023-07-17', '2023-07-17 08:30 AM', '00035', 0),
(760, 'IP-SSAL000037', 'Normal', 'Normal', '', '', '', '', '2023-07-17', '2023-07-17 08:30 AM', '00035', 0),
(761, 'IP-SSAL000039', 'Normal', 'Normal', '', '', '', '', '2023-07-17', '2023-07-17 08:30 AM', '00035', 0),
(762, 'IP-SSAL000036', 'Normal', 'No', '', '', '', '', '2023-07-17', '2023-07-17 04:15 PM', '00035', 0),
(763, 'IP-SSAL000036', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00035', 0),
(764, 'IP-SSAL000033', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 04:30 PM', '00035', 0),
(765, 'IP-SSAL000033', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 04:30 PM', '00035', 0),
(766, 'IP-SSAL000037', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 03:30 PM', '00035', 0),
(767, 'IP-SSAL000032', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 03:30 PM', '00035', 0),
(768, 'IP-SSAL000040', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 03:30 PM', '00035', 0),
(769, 'IP-SSAL000038', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 04:30 PM', '00035', 0),
(770, 'IP-SSAL000038', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 05:30 PM', '00035', 0),
(771, 'IP-SSAL000030', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 04:30 PM', '00035', 0),
(772, 'IP-SSAL000039', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 04:45 PM', '00035', 0),
(773, 'IP-SSAL000039', 'Normal', '', '', '', '', '', '2023-07-17', '2023-07-17 05:45 PM', '00035', 0),
(774, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 04:45 PM', '00033', 0),
(775, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 04:45 PM', '00033', 0),
(776, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 04:45 PM', '00033', 0),
(777, 'IP-SSAL000058', '1000ml', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 04:45 PM', '00033', 0),
(778, 'IP-SSAL000058', '1000ml', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 04:45 PM', '00033', 0),
(779, 'IP-SSAL000044', '1500ml', 'No motion ', '', '', '', '', '2023-07-17', '2023-07-17 05:00 PM', '00033', 0),
(780, 'IP-SSAL000056', 'Normal', 'Loose motion 3 time', '', '', '', '', '2023-07-17', '2023-07-17 05:00 PM', '00033', 0),
(781, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(782, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(783, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(784, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(785, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(786, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(787, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:15 PM', '00033', 0),
(788, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 05:30 PM', '00033', 0),
(789, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(790, 'IP-SSAL000032', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(791, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(792, 'IP-SSAL000036', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(793, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(794, 'IP-SSAL000038', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(795, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(796, 'IP-SSAL000040', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(797, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(798, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:15 PM', '00032', 0),
(799, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(800, 'IP-SSAL000044', '700ml', 'Normal ', 'Na', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(801, 'IP-SSAL000045', 'Normal ', 'Normal ', '', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(802, 'IP-SSAL000046', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(803, 'IP-SSAL000047', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(804, 'IP-SSAL000048', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(805, 'IP-SSAL000049', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(806, 'IP-SSAL000050', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(807, 'IP-SSAL000054', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(808, 'IP-SSAL000055', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(809, 'IP-SSAL000056', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(810, 'IP-SSAL000058', '700ml', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:30 PM', '00032', 0),
(811, 'IP-SSAL000059', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-17', '2023-07-17 10:45 PM', '00032', 0),
(812, 'IP-SSAL000039', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 09:45 AM', '00035', 0),
(813, 'IP-SSAL000032', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 07:00 AM', '00035', 0),
(814, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 08:00 AM', '00035', 0),
(815, 'IP-SSAL000037', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 09:00 AM', '00035', 0),
(816, 'IP-SSAL000038', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 09:00 AM', '00035', 0),
(817, 'IP-SSAL000036', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 09:00 AM', '00035', 0),
(818, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 09:15 AM', '00035', 0),
(819, 'IP-SSAL000030', 'Normal', 'Normal', '', '', '', '', '2023-07-18', '2023-07-18 09:15 AM', '00035', 0),
(820, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:15 PM', '00033', 0),
(821, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:30 PM', '00033', 0),
(822, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:30 PM', '00033', 0),
(823, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:30 PM', '00033', 0),
(824, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:30 PM', '00033', 0),
(825, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:30 PM', '00033', 0),
(826, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:45 PM', '00033', 0),
(827, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 01:45 PM', '00033', 0),
(828, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:00 PM', '00033', 0),
(829, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:00 PM', '00033', 0),
(830, 'IP-SSAL000044', '2700 ml', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:00 PM', '00033', 0),
(831, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:00 PM', '00033', 0),
(832, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:00 PM', '00033', 0),
(833, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:15 PM', '00033', 0),
(834, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:15 PM', '00033', 0),
(835, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:15 PM', '00033', 0),
(836, 'IP-SSAL000058', '800 ml', 'Normal ', '', '', '', '', '2023-07-18', '2023-07-18 02:30 PM', '00033', 0),
(837, 'IP-SSAL000036', 'Normal', '', '', '', '', '', '2023-07-18', '2023-07-18 04:00 PM', '00035', 0),
(838, 'IP-SSAL000037', 'Normal', '', '', '', '', '', '2023-07-18', '2023-07-18 03:00 PM', '00035', 0),
(839, 'IP-SSAL000040', 'Normal', '', '', '', '', '', '2023-07-18', '2023-07-18 05:00 PM', '00035', 0),
(840, 'IP-SSAL000038', 'Normal', '', '', '', '', '', '2023-07-18', '2023-07-18 04:00 PM', '00035', 0),
(841, 'IP-SSAL000030', 'Normal', '', '', '', '', '', '2023-07-18', '2023-07-18 04:00 PM', '00035', 0),
(842, 'IP-SSAL000039', 'Normal', '', '', '', '', '', '2023-07-18', '2023-07-18 04:00 PM', '00035', 0),
(843, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(844, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(845, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(846, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(847, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(848, 'IP-SSAL000038', 'Normal ', 'Normal ', 'Na', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(849, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(850, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(851, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(852, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(853, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(854, 'IP-SSAL000044', '800ml', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(855, 'IP-SSAL000045', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(856, 'IP-SSAL000046', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:30 PM', '00032', 0),
(857, 'IP-SSAL000047', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(858, 'IP-SSAL000047', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(859, 'IP-SSAL000048', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(860, 'IP-SSAL000049', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(861, 'IP-SSAL000050', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(862, 'IP-SSAL000054', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(863, 'IP-SSAL000055', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(864, 'IP-SSAL000056', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(865, 'IP-SSAL000058', '700ml', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(866, 'IP-SSAL000059', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-18', '2023-07-18 10:45 PM', '00032', 0),
(867, 'IP-SSAL000036', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 08:00 AM', '00035', 0),
(868, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 07:30 AM', '00035', 0),
(869, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 10:30 AM', '00035', 0),
(870, 'IP-SSAL000037', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 06:45 AM', '00035', 0),
(871, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 08:45 AM', '00035', 0),
(872, 'IP-SSAL000038', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 07:45 AM', '00035', 0),
(873, 'IP-SSAL000039', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 07:00 AM', '00035', 0),
(874, 'IP-SSAL000030', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 08:00 AM', '00035', 0),
(875, 'IP-SSAL000032', 'Normal', 'Normal', '', '', '', '', '2023-07-19', '2023-07-19 07:15 AM', '00035', 0),
(876, 'IP-SSAL000036', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:15 PM', '00035', 0),
(877, 'IP-SSAL000033', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 03:15 PM', '00035', 0),
(878, 'IP-SSAL000037', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:30 PM', '00035', 0),
(879, 'IP-SSAL000032', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:15 PM', '00035', 0),
(880, 'IP-SSAL000040', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 03:15 PM', '00035', 0),
(881, 'IP-SSAL000038', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:15 PM', '00035', 0),
(882, 'IP-SSAL000030', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 05:15 PM', '00035', 0),
(883, 'IP-SSAL000039', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:15 PM', '00035', 0),
(884, 'IP-SSAL000036', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:30 PM', '00035', 0),
(885, 'IP-SSAL000033', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 05:30 PM', '00035', 0),
(886, 'IP-SSAL000032', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:45 PM', '00035', 0),
(887, 'IP-SSAL000040', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:45 PM', '00035', 0),
(888, 'IP-SSAL000030', 'Normal', '', '', '', '', '', '2023-07-19', '2023-07-19 04:45 PM', '00035', 0),
(889, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(890, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(891, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(892, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(893, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(894, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(895, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 06:45 PM', '00033', 0),
(896, 'IP-SSAL000058', '900 ml', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(897, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(898, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(899, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(900, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(901, 'IP-SSAL000044', '1800 ml', 'No motion ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(902, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-19', '2023-07-19 07:00 PM', '00033', 0),
(903, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(904, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(905, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(906, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(907, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(908, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(909, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(910, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:00 PM', '00032', 0),
(911, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(912, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(913, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(914, 'IP-SSAL000044', '800ml', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(915, 'IP-SSAL000045', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(916, 'IP-SSAL000046', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(917, 'IP-SSAL000047', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(918, 'IP-SSAL000048', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(919, 'IP-SSAL000049', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(920, 'IP-SSAL000050', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(921, 'IP-SSAL000051', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(922, 'IP-SSAL000054', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(923, 'IP-SSAL000055', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(924, 'IP-SSAL000056', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:15 PM', '00032', 0),
(925, 'IP-SSAL000058', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:30 PM', '00032', 0),
(926, 'IP-SSAL000058', '700ml', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:30 PM', '00032', 0),
(927, 'IP-SSAL000059', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-19', '2023-07-19 11:30 PM', '00032', 0),
(928, 'IP-SSAL000036', 'Normal', '', '', '', '', '', '2023-07-20', '2023-07-20 06:15 AM', '00035', 0),
(929, 'IP-SSAL000033', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 08:00 AM', '00035', 0),
(930, 'IP-SSAL000037', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 12:15 PM', '00035', 0),
(931, 'IP-SSAL000032', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 08:15 AM', '00035', 0),
(932, 'IP-SSAL000040', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 07:15 AM', '00035', 0),
(933, 'IP-SSAL000030', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 10:30 AM', '00035', 0),
(934, 'IP-SSAL000038', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 08:30 AM', '00035', 0),
(935, 'IP-SSAL000039', 'Normal', 'Normal', '', '', '', '', '2023-07-20', '2023-07-20 08:30 PM', '00035', 0),
(936, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:30 PM', '00033', 0);
INSERT INTO `iop_output_record` (`output_id`, `iop_id`, `urine`, `stool`, `remark`, `feaces`, `respitation`, `skin`, `dDate`, `dDateTime`, `cPreparedBy`, `InActive`) VALUES
(937, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:30 PM', '00033', 0),
(938, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:30 PM', '00033', 0),
(939, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:45 PM', '00033', 0),
(940, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:45 PM', '00033', 0),
(941, 'IP-SSAL000049', 'Normal', 'No motion', '', '', '', '', '2023-07-20', '2023-07-20 06:45 PM', '00033', 0),
(942, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:45 PM', '00033', 0),
(943, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:45 PM', '00033', 0),
(944, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 06:45 PM', '00033', 0),
(945, 'IP-SSAL000058', '1200 ml', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(946, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(947, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(948, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(949, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(950, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(951, 'IP-SSAL000044', '1200 ml', 'Normal ', '', '', '', '', '2023-07-20', '2023-07-20 07:00 PM', '00033', 0),
(952, 'IP-SSAL000039', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:15 PM', '00025', 0),
(953, 'IP-SSAL000036', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:15 PM', '00025', 0),
(954, 'IP-SSAL000037', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:15 PM', '00025', 0),
(955, 'IP-SSAL000038', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:30 PM', '00025', 0),
(956, 'IP-SSAL000040', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:30 PM', '00025', 0),
(957, 'IP-SSAL000041', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:30 PM', '00025', 0),
(958, 'IP-SSAL000042', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:30 PM', '00025', 0),
(959, 'IP-SSAL000043', 'Normal ', 'Normal ', '', '', '', '', '2023-07-21', '2023-07-21 11:30 PM', '00025', 0),
(960, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:15 PM', '00032', 0),
(961, 'IP-SSAL000032', 'Normal ', 'Stool not passed ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:15 PM', '00032', 0),
(962, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:30 PM', '00032', 0),
(963, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:30 PM', '00032', 0),
(964, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:30 PM', '00032', 0),
(965, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:30 PM', '00032', 0),
(966, 'IP-SSAL000038', 'Normal ', '6 time loss motion ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:45 PM', '00032', 0),
(967, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 04:45 PM', '00032', 0),
(968, 'IP-SSAL000036', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:15 PM', '00025', 0),
(969, 'IP-SSAL000037', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:15 PM', '00025', 0),
(970, 'IP-SSAL000038', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:15 PM', '00025', 0),
(971, 'IP-SSAL000040', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(972, 'IP-SSAL000041', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(973, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(974, 'IP-SSAL000043', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(975, 'IP-SSAL000044', '900', 'abnormal ', 'NA', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(976, 'IP-SSAL000045', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(977, 'IP-SSAL000051', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:30 PM', '00025', 0),
(978, 'IP-SSAL000050', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(979, 'IP-SSAL000049', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(980, 'IP-SSAL000048', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(981, 'IP-SSAL000047', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(982, 'IP-SSAL000046', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(983, 'IP-SSAL000054', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(984, 'IP-SSAL000055', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(985, 'IP-SSAL000056', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(986, 'IP-SSAL000058', '900', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(987, 'IP-SSAL000059', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(988, 'IP-SSAL000030', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(989, 'IP-SSAL000032', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(990, 'IP-SSAL000033', 'Normal ', 'Normal ', '', '', '', '', '2023-07-22', '2023-07-22 10:45 PM', '00025', 0),
(991, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:00 PM', '00033', 0),
(992, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:00 PM', '00033', 0),
(993, 'IP-SSAL000044', '2300 ml', 'No motion ', '', '', '', '', '2023-07-23', '2023-07-23 04:00 PM', '00033', 0),
(994, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:00 PM', '00033', 0),
(995, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:00 PM', '00033', 0),
(996, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00032', 0),
(997, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00032', 0),
(998, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00033', 0),
(999, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00032', 0),
(1000, 'IP-SSAL000049', 'Normal', 'No motion ', '', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00033', 0),
(1001, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00033', 0),
(1002, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:15 PM', '00033', 0),
(1003, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00032', 0),
(1004, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00032', 0),
(1005, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00032', 0),
(1006, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00032', 0),
(1007, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00032', 0),
(1008, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00033', 0),
(1009, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00033', 0),
(1010, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00033', 0),
(1011, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:30 PM', '00033', 0),
(1012, 'IP-SSAL000058', '1000ml', 'No motion ', '', '', '', '', '2023-07-23', '2023-07-23 04:45 PM', '00033', 0),
(1013, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-23', '2023-07-23 04:45 PM', '00033', 0),
(1014, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:00 PM', '00025', 0),
(1015, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:00 PM', '00025', 0),
(1016, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:00 PM', '00025', 0),
(1017, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1018, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1019, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1020, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1021, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1022, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1023, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1024, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1025, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1026, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1027, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1028, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1029, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1030, 'IP-SSAL000045', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1031, 'IP-SSAL000051', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00025', 0),
(1032, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 08:30 PM', '00035', 0),
(1033, 'IP-SSAL000054', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 10:15 PM', '00035', 0),
(1034, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 10:15 AM', '00035', 0),
(1035, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 12:15 AM', '00035', 0),
(1036, 'IP-SSAL000048', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 09:30 AM', '00035', 0),
(1037, 'IP-SSAL000050', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 10:30 AM', '00035', 0),
(1038, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 11:30 PM', '00035', 0),
(1039, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 09:30 AM', '00035', 0),
(1040, 'IP-SSAL000051', '500ml', '', '', '', '', '', '2023-07-23', '2023-07-23 10:30 AM', '00035', 0),
(1041, 'IP-SSAL000044', '500ml', '', '', '', '', '', '2023-07-24', '2023-07-24 09:45 PM', '00035', 0),
(1042, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-23', '2023-07-23 09:45 PM', '00035', 0),
(1043, 'IP-SSAL000058', '1500ml', 'No', '', '', '', '', '2023-07-24', '2023-07-24 07:30 AM', '00035', 0),
(1044, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:15 PM', '00032', 0),
(1045, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:15 PM', '00032', 0),
(1046, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:30 PM', '00032', 0),
(1047, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:30 PM', '00032', 0),
(1048, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:30 PM', '00032', 0),
(1049, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:30 PM', '00032', 0),
(1050, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:30 PM', '00032', 0),
(1051, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 02:30 PM', '00032', 0),
(1052, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:00 PM', '00033', 0),
(1053, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:15 PM', '00033', 0),
(1054, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:15 PM', '00033', 0),
(1055, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:15 PM', '00033', 0),
(1056, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:30 PM', '00033', 0),
(1057, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 05:45 PM', '00033', 0),
(1058, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:45 PM', '00033', 0),
(1059, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:45 PM', '00033', 0),
(1060, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:45 PM', '00033', 0),
(1061, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:45 PM', '00033', 0),
(1062, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 05:45 PM', '00033', 0),
(1063, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 06:00 PM', '00033', 0),
(1064, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 06:00 PM', '00033', 0),
(1065, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 06:00 PM', '00033', 0),
(1066, 'IP-SSAL000030', 'Normal ', 'Normal ', '', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1067, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1068, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1069, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1070, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1071, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1072, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1073, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1074, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1075, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1076, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1077, 'IP-SSAL000041', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1078, 'IP-SSAL000042', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1079, 'IP-SSAL000043', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1080, 'IP-SSAL000045', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1081, 'IP-SSAL000051', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-24', '2023-07-24 10:00 PM', '00025', 0),
(1082, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:15 PM', '00035', 0),
(1083, 'IP-SSAL000054', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:15 PM', '00035', 0),
(1084, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1085, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1086, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1087, 'IP-SSAL000048', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1088, 'IP-SSAL000050', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1089, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1090, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:45 PM', '00035', 0),
(1091, 'IP-SSAL000051', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:00 PM', '00035', 0),
(1092, 'IP-SSAL000044', '500ml', '', '', '', '', '', '2023-07-24', '2023-07-24 11:00 PM', '00035', 0),
(1093, 'IP-SSAL000062', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:00 PM', '00035', 0),
(1094, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-24', '2023-07-24 11:15 PM', '00035', 0),
(1095, 'IP-SSAL000044', '1200ml', '', '', '', '', '', '2023-07-25', '2023-07-25 08:00 AM', '00035', 0),
(1096, 'IP-SSAL000058', '900ml', '', '', '', '', '', '2023-07-25', '2023-07-25 08:00 AM', '00035', 0),
(1097, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 01:00 PM', '00032', 0),
(1098, 'IP-SSAL000032', 'Normal ', 'No motion', 'NA', '', '', '', '2023-07-25', '2023-07-25 01:15 PM', '00032', 0),
(1099, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 01:15 PM', '00032', 0),
(1100, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 01:30 PM', '00032', 0),
(1101, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 03:15 PM', '00032', 0),
(1102, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 03:15 PM', '00032', 0),
(1103, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 03:15 PM', '00032', 0),
(1104, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-25', '2023-07-25 03:30 PM', '00032', 0),
(1105, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:00 PM', '00033', 0),
(1106, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:15 PM', '00033', 0),
(1107, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:30 PM', '00033', 0),
(1108, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:30 PM', '00033', 0),
(1109, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:30 PM', '00033', 0),
(1110, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:30 PM', '00033', 0),
(1111, 'IP-SSAL000049', 'Normal', 'No motion ', '', '', '', '', '2023-07-25', '2023-07-25 05:30 PM', '00033', 0),
(1112, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:30 PM', '00033', 0),
(1113, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:45 PM', '00033', 0),
(1114, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:45 PM', '00033', 0),
(1115, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:45 PM', '00033', 0),
(1116, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:45 PM', '00033', 0),
(1117, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 05:45 PM', '00033', 0),
(1118, 'IP-SSAL000058', '900 ml', 'No motion ', '', '', '', '', '2023-07-25', '2023-07-25 05:45 PM', '00033', 0),
(1119, 'IP-SSAL000044', '2700ml', 'No motion ', '', '', '', '', '2023-07-25', '2023-07-25 06:00 PM', '00033', 0),
(1120, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 06:00 PM', '00033', 0),
(1121, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-25', '2023-07-25 06:00 PM', '00033', 0),
(1122, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:15 PM', '00035', 0),
(1123, 'IP-SSAL000054', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1124, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1125, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1126, 'IP-SSAL000048', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1127, 'IP-SSAL000050', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1128, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1129, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:30 PM', '00035', 0),
(1130, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-25', '2023-07-25 10:45 PM', '00035', 0),
(1131, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 02:45 PM', '00032', 0),
(1132, 'IP-SSAL000032', 'Normal ', 'No motion', 'NA', '', '', '', '2023-07-26', '2023-07-26 02:45 PM', '00032', 0),
(1133, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 02:45 PM', '00032', 0),
(1134, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1135, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1136, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1137, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1138, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1139, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1140, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1141, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 03:00 PM', '00032', 0),
(1142, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:15 PM', '00033', 0),
(1143, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:15 PM', '00033', 0),
(1144, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:15 PM', '00033', 0),
(1145, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:15 PM', '00033', 0),
(1146, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:15 PM', '00033', 0),
(1147, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:30 PM', '00033', 0),
(1148, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:30 PM', '00033', 0),
(1149, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:45 PM', '00033', 0),
(1150, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:45 PM', '00033', 0),
(1151, 'IP-SSAL000058', '1200 ml', 'No motion ', '', '', '', '', '2023-07-26', '2023-07-26 04:45 PM', '00033', 0),
(1152, 'IP-SSAL000044', '2000 ml', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 04:45 PM', '00033', 0),
(1153, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:00 PM', '00033', 0),
(1154, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:00 PM', '00033', 0),
(1155, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:15 PM', '00033', 0),
(1156, 'IP-SSAL000062', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:15 PM', '00033', 0),
(1157, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:15 PM', '00033', 0),
(1158, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:30 PM', '00033', 0),
(1159, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 05:30 PM', '00033', 0),
(1160, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:30 PM', '00035', 0),
(1161, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:30 PM', '00035', 0),
(1162, 'IP-SSAL000054', 'Passd', '', '', '', '', '', '2023-07-26', '2023-07-26 09:30 PM', '00035', 0),
(1163, 'IP-SSAL000062', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:30 PM', '00035', 0),
(1164, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:30 PM', '00035', 0),
(1165, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:30 PM', '00035', 0),
(1166, 'IP-SSAL000050', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1167, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1168, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1169, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1170, 'IP-SSAL000051', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1171, 'IP-SSAL000044', '1500ml', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1172, 'IP-SSAL000062', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1173, 'IP-SSAL000061', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 09:45 PM', '00035', 0),
(1174, 'IP-SSAL000041', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 10:00 PM', '00035', 0),
(1175, 'IP-SSAL000045', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 10:00 PM', '00035', 0),
(1176, 'IP-SSAL000045', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 10:00 PM', '00035', 0),
(1177, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 10:00 PM', '00035', 0),
(1178, 'IP-SSAL000043', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 10:00 PM', '00035', 0),
(1179, 'IP-SSAL000030', 'Normal ', 'Normal ', '', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1180, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1181, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1182, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1183, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1184, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1185, 'IP-SSAL000038', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1186, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:15 PM', '00025', 0),
(1187, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:30 PM', '00025', 0),
(1188, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:30 PM', '00025', 0),
(1189, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-26', '2023-07-26 10:30 PM', '00025', 0),
(1190, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 05:45 PM', '00033', 0),
(1191, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 05:45 PM', '00033', 0),
(1192, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 05:45 PM', '00033', 0),
(1193, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 06:15 PM', '00033', 0),
(1194, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 06:15 PM', '00033', 0),
(1195, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 06:30 PM', '00033', 0),
(1196, 'IP-SSAL000044', '2300 ml', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 06:45 PM', '00033', 0),
(1197, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 06:45 PM', '00033', 0),
(1198, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 06:45 PM', '00033', 0),
(1199, 'IP-SSAL000058', '1000ml', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 07:00 PM', '00033', 0),
(1200, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00033', 0),
(1201, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1202, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1203, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1204, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1205, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1206, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1207, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00033', 0),
(1208, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00033', 0),
(1209, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:15 PM', '00032', 0),
(1210, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:30 PM', '00032', 0),
(1211, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 07:30 PM', '00032', 0),
(1212, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-27', '2023-07-27 07:30 PM', '00033', 0),
(1213, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:30 PM', '00025', 0),
(1214, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:30 PM', '00025', 0),
(1215, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:30 PM', '00025', 0),
(1216, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:30 PM', '00025', 0),
(1217, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:30 PM', '00025', 0),
(1218, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:45 PM', '00025', 0),
(1219, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:45 PM', '00025', 0),
(1220, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:45 PM', '00025', 0),
(1221, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:45 PM', '00025', 0),
(1222, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:45 PM', '00025', 0),
(1223, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-27', '2023-07-27 09:45 PM', '00025', 0),
(1224, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 10:45 PM', '00035', 0),
(1225, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:15 PM', '00035', 0),
(1226, 'IP-SSAL000050', 'Normal', '', '', '', '', '', '2023-07-28', '2023-07-28 12:30 AM', '00035', 0),
(1227, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 10:30 PM', '00035', 0),
(1228, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-26', '2023-07-26 10:45 PM', '00035', 0),
(1229, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:00 PM', '00035', 0),
(1230, 'IP-SSAL000051', 'Normal', '', '', '', '', '', '2023-07-28', '2023-07-28 12:45 AM', '00035', 0),
(1231, 'IP-SSAL000044', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:15 PM', '00035', 0),
(1232, 'IP-SSAL000044', '1200ml', '', '', '', '', '', '2023-07-27', '2023-07-27 11:15 PM', '00035', 0),
(1233, 'IP-SSAL000061', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:30 PM', '00035', 0),
(1234, 'IP-SSAL000045', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 10:30 PM', '00035', 0),
(1235, 'IP-SSAL000041', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:15 PM', '00035', 0),
(1236, 'IP-SSAL000042', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:15 PM', '00035', 0),
(1237, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-27', '2023-07-27 11:30 PM', '00035', 0),
(1238, 'IP-SSAL000058', '500ml', '', '', '', '', '', '2023-07-27', '2023-07-27 09:00 PM', '00035', 0),
(1239, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:30 PM', '00032', 0),
(1240, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:30 PM', '00032', 0),
(1241, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:30 PM', '00032', 0),
(1242, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1243, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1244, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1245, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1246, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1247, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1248, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-28', '2023-07-28 03:45 PM', '00032', 0),
(1249, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:15 PM', '00033', 0),
(1250, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:15 PM', '00033', 0),
(1251, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:15 PM', '00033', 0),
(1252, 'IP-SSAL000044', '1700 ml', 'No motion ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1253, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1254, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1255, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1256, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1257, 'IP-SSAL000049', 'Normal', 'No motion ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1258, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1259, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1260, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1261, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1262, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:30 PM', '00033', 0),
(1263, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1264, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1265, 'IP-SSAL000058', '1200 ml', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1266, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1267, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1268, 'IP-SSAL000062', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1269, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-28', '2023-07-28 04:45 PM', '00033', 0),
(1270, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1271, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1272, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1273, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1274, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1275, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1276, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1277, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1278, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 05:15 PM', '00032', 0),
(1279, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 05:30 PM', '00033', 0),
(1280, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 05:45 PM', '00033', 0),
(1281, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 05:45 PM', '00033', 0),
(1282, 'IP-SSAL000044', '2000 ml', 'No motion ', '', '', '', '', '2023-07-29', '2023-07-29 05:45 PM', '00033', 0),
(1283, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 05:45 PM', '00033', 0),
(1284, 'IP-SSAL000045', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 05:45 PM', '00033', 0),
(1285, 'IP-SSAL000051', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 05:45 PM', '00033', 0),
(1286, 'IP-SSAL000050', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1287, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1288, 'IP-SSAL000049', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1289, 'IP-SSAL000048', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1290, 'IP-SSAL000047', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1291, 'IP-SSAL000046', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1292, 'IP-SSAL000054', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1293, 'IP-SSAL000055', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1294, 'IP-SSAL000056', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:00 PM', '00033', 0),
(1295, 'IP-SSAL000058', '1900 ml', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:15 PM', '00033', 0),
(1296, 'IP-SSAL000059', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:15 PM', '00033', 0),
(1297, 'IP-SSAL000062', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:15 PM', '00033', 0),
(1298, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:15 PM', '00033', 0),
(1299, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:15 PM', '00033', 0),
(1300, 'IP-SSAL000061', 'Normal', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 06:15 PM', '00033', 0),
(1301, 'IP-SSAL000054', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1302, 'IP-SSAL000062', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1303, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1304, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1305, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1306, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1307, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:00 PM', '00035', 0),
(1308, 'IP-SSAL000051', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00035', 0),
(1309, 'IP-SSAL000061', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00035', 0),
(1310, 'IP-SSAL000030', 'Normal ', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00025', 0),
(1311, 'IP-SSAL000042', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00035', 0),
(1312, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00025', 0),
(1313, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00025', 0),
(1314, 'IP-SSAL000045', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00035', 0),
(1315, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00025', 0),
(1316, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00025', 0),
(1317, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:15 PM', '00025', 0),
(1318, 'IP-SSAL000043', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00035', 0),
(1319, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00025', 0),
(1320, 'IP-SSAL000040', 'Normal ', 'Normal ', '', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00025', 0),
(1321, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00025', 0),
(1322, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00025', 0),
(1323, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00035', 0),
(1324, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-29', '2023-07-29 10:30 PM', '00025', 0),
(1325, 'IP-SSAL000041', 'Normal', 'Normal ', '', '', '', '', '2023-07-30', '2023-07-30 06:00 PM', '00033', 0),
(1326, 'IP-SSAL000042', 'Normal', 'Normal ', '', '', '', '', '2023-07-30', '2023-07-30 06:00 PM', '00033', 0),
(1327, 'IP-SSAL000043', 'Normal', 'Normal ', '', '', '', '', '2023-07-30', '2023-07-30 06:00 PM', '00033', 0),
(1328, 'IP-SSAL000044', '2300 ml', 'Normal ', '', '', '', '', '2023-07-30', '2023-07-30 06:15 PM', '00033', 0),
(1329, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:00 PM', '00025', 0),
(1330, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1331, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1332, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1333, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1334, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1335, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1336, 'IP-SSAL000060', 'Normal ', 'abnormal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1337, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-30', '2023-07-30 09:15 PM', '00025', 0),
(1338, 'IP-SSAL000046', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1339, 'IP-SSAL000054', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1340, 'IP-SSAL000062', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1341, 'IP-SSAL000062', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1342, 'IP-SSAL000059', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1343, 'IP-SSAL000056', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1344, 'IP-SSAL000048', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1345, 'IP-SSAL000050', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1346, 'IP-SSAL000049', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1347, 'IP-SSAL000047', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1348, 'IP-SSAL000051', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1349, 'IP-SSAL000058', '1200ml', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1350, 'IP-SSAL000061', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1351, 'IP-SSAL000043', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:30 PM', '00035', 0),
(1352, 'IP-SSAL000042', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:45 PM', '00035', 0),
(1353, 'IP-SSAL000055', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:45 PM', '00035', 0),
(1354, 'IP-SSAL000045', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:45 PM', '00035', 0),
(1355, 'IP-SSAL000041', 'Normal', '', '', '', '', '', '2023-07-30', '2023-07-30 09:45 PM', '00035', 0),
(1356, 'IP-SSAL000030', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:00 PM', '00032', 0),
(1357, 'IP-SSAL000032', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:00 PM', '00032', 0),
(1358, 'IP-SSAL000033', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:00 PM', '00032', 0),
(1359, 'IP-SSAL000039', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:00 PM', '00032', 0),
(1360, 'IP-SSAL000036', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:00 PM', '00032', 0),
(1361, 'IP-SSAL000037', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:15 PM', '00032', 0),
(1362, 'IP-SSAL000040', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:15 PM', '00032', 0),
(1363, 'IP-SSAL000065', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:15 PM', '00032', 0),
(1364, 'IP-SSAL000064', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:15 PM', '00032', 0),
(1365, 'IP-SSAL000060', 'Normal ', 'Normal ', 'NA', '', '', '', '2023-07-31', '2023-07-31 01:15 PM', '00032', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_progress_note`
--

CREATE TABLE `iop_progress_note` (
  `progress_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) NOT NULL,
  `progress` text NOT NULL,
  `treatment` text NOT NULL,
  `remarks` text NOT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_progress_note`
--

INSERT INTO `iop_progress_note` (`progress_id`, `iop_id`, `dDate`, `dDateTime`, `progress`, `treatment`, `remarks`, `InActive`, `cPreparedBy`) VALUES
(1, 'IP-SSAL000014', '2022-10-31', '2022-10-31 12:00 PM', 'xcvf', 'dfsd', 'fsdfsd', 0, '00014'),
(2, 'IP-SSAL000015', '2022-11-01', '2022-11-01 12:45 PM', 'test', 'test', 'test', 0, '00014'),
(3, 'IP-SSAL000016', '2022-11-07', '2022-11-07 12:45 PM', 'Improved condition', 'Continue ', 'NA', 0, '00014'),
(4, 'IP-SSAL000018', '2023-04-19', '2023-04-19 04:30 PM', 'improved', 'improved', 'cvdv', 0, '00014'),
(5, 'IP-SSAL000020', '2023-04-20', '2023-04-20 05:30 PM', 'improved', 'improved', 'improved', 0, '00014');

-- --------------------------------------------------------

--
-- Table structure for table `iop_receipt`
--

CREATE TABLE `iop_receipt` (
  `receipt_id` int(11) NOT NULL,
  `receipt_no` varchar(15) NOT NULL,
  `invoice_no` varchar(25) NOT NULL,
  `dDate` datetime NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `patient_no` varchar(25) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `discount` float(11,2) NOT NULL,
  `subtotal` float(11,2) NOT NULL,
  `total_amount` float(11,2) NOT NULL,
  `amountPaid` float(11,2) NOT NULL,
  `change` float(11,2) NOT NULL,
  `total_purchased` int(4) NOT NULL,
  `creditCardNo` int(25) NOT NULL,
  `creditCardHolder` varchar(35) NOT NULL,
  `insurance_company` int(11) NOT NULL,
  `remarks` int(11) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_room_transfer`
--

CREATE TABLE `iop_room_transfer` (
  `transfer_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) NOT NULL,
  `room_category_id` int(3) NOT NULL,
  `room_master_id` int(3) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `reason` text NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_room_transfer`
--

INSERT INTO `iop_room_transfer` (`transfer_id`, `iop_id`, `dDate`, `dDateTime`, `room_category_id`, `room_master_id`, `bed_id`, `reason`, `cPreparedBy`, `InActive`) VALUES
(1, 'IP-SSAL00005', '2021-10-19', '2021-10-19 08:07:55 PM', 2, 2, 2, 'Patient Admitted', '00013', 0),
(2, 'IP-SSAL00006', '2021-10-20', '2021-10-20 03:43:14 PM', 2, 1, 1, 'Patient Admitted', '00013', 0),
(3, 'IP-SSAL00007', '2021-10-20', '2021-10-20 04:39:46 PM', 1, 5, 5, 'Patient Admitted', '00013', 0),
(4, 'IP-SSAL00008', '2021-10-20', '2021-10-20 04:46:22 PM', 2, 2, 2, 'Patient Admitted', '00013', 0),
(5, 'IP-SSAL00009', '2021-10-20', '2021-10-20 05:26:28 PM', 2, 2, 2, 'Patient Admitted', '00013', 0),
(6, 'IP-SSAL000010', '2021-10-20', '2021-10-20 09:39:46 PM', 1, 6, 7, 'Patient Admitted', '00013', 0),
(7, 'IP-SSAL000011', '2021-10-21', '2021-10-21 01:02:06 PM', 2, 1, 1, 'Patient Admitted', '00013', 0),
(8, 'IP-SSAL000012', '2021-10-21', '2021-10-21 01:06:53 PM', 1, 5, 5, 'Patient Admitted', '00013', 0),
(9, 'IP-SSAL000013', '2021-10-21', '2021-10-21 01:15:26 PM', 1, 5, 5, 'Patient Admitted', '00013', 0),
(10, 'IP-SSAL000014', '2021-10-22', '2021-10-22 12:52:14 PM', 2, 4, 4, 'Patient Admitted', '00013', 0),
(11, 'IP-SSAL000014', '2022-10-31', '2022-10-31 12:02 PM', 1, 2, 2, 'xdfv', '00014', 0),
(12, 'IP-SSAL000015', '2022-11-01', '2022-11-01 12:46:44 PM', 2, 6, 6, 'Patient Admitted', '00013', 0),
(13, 'IP-SSAL000015', '2022-11-01', '2022-11-01 12:52 PM', 2, 10, 10, 'test', '00014', 0),
(14, 'IP-SSAL000016', '2022-11-07', '2022-11-07 12:12:46 PM', 2, 14, 15, 'Patient Admitted', '00013', 0),
(15, 'IP-SSAL000017', '2022-11-07', '2022-11-07 05:35:40 PM', 1, 1, 1, 'Patient Admitted', '00013', 0),
(16, 'IP-SSAL000018', '2022-11-08', '2022-11-08 11:37:44 AM', 1, 3, 3, 'Patient Admitted', '00002', 0),
(17, 'IP-SSAL000018', '2023-04-18', '2023-04-18 02:42 PM', 1, 2, 2, 'demo', '00008', 0),
(18, 'IP-SSAL000019', '2023-04-19', '2023-04-19 03:49:25 PM', 1, 2, 2, 'Patient Admitted', '00013', 0),
(19, 'IP-SSAL000020', '2023-04-20', '2023-04-20 01:38:57 PM', 1, 11, 11, 'Patient Admitted', '00014', 0),
(20, 'IP-SSAL000021', '2023-04-20', '2023-04-20 09:20:36 PM', 1, 13, 14, 'Patient Admitted', '00013', 0),
(21, 'IP-SSAL000022', '2023-05-02', '2023-05-02 09:15:21 AM', 1, 1, 1, 'Patient Admitted', '00028', 0),
(22, 'IP-SSAL000023', '2023-05-02', '2023-05-02 12:33:35 PM', 1, 2, 2, 'Patient Admitted', '00024', 0),
(23, 'IP-SSAL000024', '2023-05-10', '2023-05-10 09:56:51 AM', 1, 11, 11, 'Patient Admitted', '00028', 0),
(24, 'IP-SSAL000025', '2023-05-10', '2023-05-10 03:44:16 PM', 1, 3, 3, 'Patient Admitted', '00029', 0),
(25, 'IP-SSAL000026', '2023-05-11', '2023-05-11 11:55:22 AM', 1, 3, 3, 'Patient Admitted', '00029', 0),
(26, 'IP-SSAL000026', '2023-05-11', '2023-05-11 11:59 AM', 1, 11, 11, 'ghsajdh', '00028', 0),
(27, 'IP-SSAL000027', '2023-05-16', '2023-05-16 02:13:09 PM', 1, 11, 11, 'Patient Admitted', '00028', 0),
(28, 'IP-SSAL000028', '2023-05-23', '2023-05-23 02:45:43 PM', 1, 13, 14, 'Patient Admitted', '00028', 0),
(29, 'IP-SSAL000029', '2023-05-31', '2023-05-31 03:52:44 PM', 1, 1, 1, 'Patient Admitted', '00024', 0),
(30, 'IP-SSAL000030', '2023-06-30', '2023-06-30 10:52:39 AM', 2, 8, 8, 'Patient Admitted', '00024', 0),
(31, 'IP-SSAL000031', '2023-06-30', '2023-06-30 10:56:16 AM', 2, 9, 9, 'Patient Admitted', '00024', 0),
(32, 'IP-SSAL000032', '2023-06-30', '2023-06-30 11:12:22 AM', 1, 3, 3, 'Patient Admitted', '00024', 0),
(33, 'IP-SSAL000033', '2023-06-30', '2023-06-30 11:16:28 AM', 1, 1, 18, 'Patient Admitted', '00024', 0),
(34, 'IP-SSAL000034', '2023-06-30', '2023-06-30 11:20:58 AM', 1, 1, 1, 'Patient Admitted', '00024', 0),
(35, 'IP-SSAL000035', '2023-06-30', '2023-06-30 11:25:41 AM', 2, 7, 7, 'Patient Admitted', '00024', 0),
(36, 'IP-SSAL000036', '2023-06-30', '2023-06-30 11:45:37 AM', 1, 2, 2, 'Patient Admitted', '00024', 0),
(37, 'IP-SSAL000037', '2023-06-30', '2023-06-30 11:51:04 AM', 1, 11, 11, 'Patient Admitted', '00024', 0),
(38, 'IP-SSAL000038', '2023-06-30', '2023-06-30 12:04:51 PM', 2, 5, 5, 'Patient Admitted', '00024', 0),
(39, 'IP-SSAL000039', '2023-06-30', '2023-06-30 02:46:35 PM', 2, 23, 26, 'Patient Admitted', '00024', 0),
(40, 'IP-SSAL000030', '2023-06-30', '2023-06-30 02:52 PM', 2, 24, 28, 'NIL', '00027', 0),
(41, 'IP-SSAL000031', '2023-06-30', '2023-06-30 02:53 PM', 2, 25, 30, 'Nil', '00027', 0),
(42, 'IP-SSAL000032', '2023-06-30', '2023-06-30 02:54 PM', 1, 26, 31, 'NIL', '00027', 0),
(43, 'IP-SSAL000033', '2023-06-30', '2023-06-30 02:55 PM', 1, 20, 23, 'na', '00027', 0),
(44, 'IP-SSAL000034', '2023-06-30', '2023-06-30 02:56 PM', 3, 19, 22, 'NA', '00027', 0),
(45, 'IP-SSAL000035', '2023-06-30', '2023-06-30 03:01 PM', 3, 19, 32, 'na', '00027', 0),
(46, 'IP-SSAL000040', '2023-06-30', '2023-06-30 03:12:44 PM', 2, 25, 29, 'Patient Admitted', '00024', 0),
(47, 'IP-SSAL000037', '2023-06-30', '2023-06-30 03:46 PM', 1, 22, 25, 'NA', '00027', 0),
(48, 'IP-SSAL000038', '2023-06-30', '2023-06-30 03:51 PM', 2, 24, 27, '', '00027', 0),
(49, 'IP-SSAL000041', '2023-06-30', '2023-06-30 03:55:19 PM', 1, 30, 33, 'Patient Admitted', '00027', 0),
(50, 'IP-SSAL000042', '2023-06-30', '2023-06-30 04:10:52 PM', 2, 12, 13, 'Patient Admitted', '00024', 0),
(51, 'IP-SSAL000043', '2023-06-30', '2023-06-30 04:16:05 PM', 2, 34, 34, 'Patient Admitted', '00024', 0),
(52, 'IP-SSAL000044', '2023-06-30', '2023-06-30 04:20:31 PM', 3, 15, 16, 'Patient Admitted', '00024', 0),
(53, 'IP-SSAL000045', '2023-06-30', '2023-06-30 04:24:30 PM', 2, 14, 15, 'Patient Admitted', '00024', 0),
(54, 'IP-SSAL000046', '2023-06-30', '2023-06-30 04:44:29 PM', 1, 37, 36, 'Patient Admitted', '00024', 0),
(55, 'IP-SSAL000047', '2023-06-30', '2023-06-30 04:46:10 PM', 2, 9, 9, 'Patient Admitted', '00024', 0),
(56, 'IP-SSAL000048', '2023-06-30', '2023-06-30 04:47:39 PM', 2, 6, 6, 'Patient Admitted', '00024', 0),
(57, 'IP-SSAL000049', '2023-06-30', '2023-06-30 04:48:57 PM', 2, 8, 8, 'Patient Admitted', '00024', 0),
(58, 'IP-SSAL000050', '2023-06-30', '2023-06-30 04:50:06 PM', 2, 7, 7, 'Patient Admitted', '00024', 0),
(59, 'IP-SSAL000051', '2023-06-30', '2023-06-30 04:51:37 PM', 2, 10, 10, 'Patient Admitted', '00024', 0),
(60, 'IP-SSAL000052', '2023-07-01', '2023-07-01 02:26:50 PM', 2, 21, 24, 'Patient Admitted', '00027', 0),
(61, 'IP-SSAL000053', '2023-07-03', '2023-07-03 10:01:40 PM', 1, 18, 21, 'Patient Admitted', '00028', 0),
(62, 'IP-SSAL000054', '2023-07-04', '2023-07-04 10:00:20 AM', 1, 2, 37, 'Patient Admitted', '00027', 0),
(63, 'IP-SSAL000055', '2023-07-04', '2023-07-04 11:08:25 AM', 1, 13, 14, 'Patient Admitted', '00024', 0),
(64, 'IP-SSAL000056', '2023-07-05', '2023-07-05 02:17:04 PM', 2, 5, 5, 'Patient Admitted', '00027', 0),
(65, 'IP-SSAL000057', '2023-07-07', '2023-07-07 06:11:01 PM', 1, 32, 35, 'Patient Admitted', '00028', 0),
(66, 'IP-SSAL000058', '2023-07-11', '2023-07-11 03:12:54 PM', 1, 35, 38, 'Patient Admitted', '00002', 0),
(67, 'IP-SSAL000059', '2023-07-13', '2023-07-13 11:42:06 AM', 2, 4, 4, 'Patient Admitted', '00002', 0),
(68, 'IP-SSAL000060', '2023-07-24', '2023-07-24 06:51:19 PM', 2, 25, 30, 'Patient Admitted', '00027', 0),
(69, 'IP-SSAL000061', '2023-07-24', '2023-07-24 06:54:59 PM', 3, 29, 40, 'Patient Admitted', '00027', 0),
(70, 'IP-SSAL000036', '2023-07-24', '2023-07-24 07:05 PM', 1, 18, 42, 'internal', '00027', 0),
(71, 'IP-SSAL000062', '2023-07-24', '2023-07-24 07:07:40 PM', 1, 2, 2, 'Patient Admitted', '00027', 0),
(72, 'IP-SSAL000063', '2023-07-24', '2023-07-24 07:11:58 PM', 1, 28, 43, 'Patient Admitted', '00027', 0),
(73, 'IP-SSAL000064', '2023-07-25', '2023-07-25 12:15:02 PM', 3, 19, 22, 'Patient Admitted', '00024', 0),
(74, 'IP-SSAL000065', '2023-07-25', '2023-07-25 12:19:35 PM', 3, 19, 32, 'Patient Admitted', '00024', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iop_sent_mail`
--

CREATE TABLE `iop_sent_mail` (
  `mail_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `mail_to` varchar(255) NOT NULL,
  `msg` text DEFAULT NULL,
  `rel_name` varchar(500) DEFAULT NULL,
  `bp` varchar(10) DEFAULT NULL,
  `spo2` varchar(10) DEFAULT NULL,
  `pulse_rate` varchar(10) DEFAULT NULL,
  `temperature` varchar(100) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `bsl` varchar(255) DEFAULT NULL,
  `medicine_name` varchar(5000) DEFAULT NULL,
  `doctor_comments` varchar(5000) DEFAULT NULL,
  `mail_from` varchar(255) DEFAULT NULL,
  `dDate` date NOT NULL,
  `added_date` datetime NOT NULL,
  `sent_by` varchar(255) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_vital_parameters`
--

CREATE TABLE `iop_vital_parameters` (
  `vital_id` int(11) NOT NULL,
  `iop_id` varchar(25) NOT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(50) NOT NULL,
  `pulse_rate` varchar(25) NOT NULL,
  `temperature` varchar(25) NOT NULL,
  `spo2` varchar(255) DEFAULT NULL,
  `height` varchar(25) NOT NULL,
  `bp` varchar(25) NOT NULL,
  `respiration` varchar(25) NOT NULL,
  `bsl_type` varchar(50) DEFAULT NULL,
  `bsl` varchar(255) DEFAULT NULL,
  `weight` varchar(25) NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iop_vital_parameters`
--

INSERT INTO `iop_vital_parameters` (`vital_id`, `iop_id`, `dDate`, `dDateTime`, `pulse_rate`, `temperature`, `spo2`, `height`, `bp`, `respiration`, `bsl_type`, `bsl`, `weight`, `cPreparedBy`, `InActive`) VALUES
(1, 'IP-SSAL000015', '2022-11-01', '2022-11-01 03:58 PM', '123', '22', NULL, '22', '22', '22', NULL, NULL, '22', '00014', 0),
(2, 'IP-SSAL000016', '2022-11-07', '2022-11-07 12:48 PM', '72', '98', NULL, '155', '120 80', '21', NULL, NULL, '70', '00014', 0),
(3, 'IP-SSAL000019', '2023-04-19', '2023-04-19 04:40 PM', '20', '30', NULL, '', '20', '40', NULL, NULL, '', '00014', 0),
(4, 'IP-SSAL000022', '2023-05-02', '2023-05-02 01:12 PM', '72', '96', NULL, '', '120/80', '20', NULL, NULL, '', '00030', 0),
(5, 'IP-SSAL000029', '2023-05-31', '2023-05-31 04:00 PM', '72', '98', NULL, '', '120 80', '21', NULL, NULL, '', '00026', 0),
(6, 'IP-SSAL000029', '2023-06-06', '2023-06-06 11:31 AM', '72', '98', NULL, '170', '120 80', '21', NULL, NULL, '64', '00023', 0),
(7, 'IP-SSAL000052', '2023-07-01', '2023-07-01 02:46 PM', '72', '98', NULL, '139', '120 80', '21', NULL, NULL, '48', '00026', 0),
(8, 'IP-SSAL000052', '2023-07-01', '2023-07-01 02:47 PM', '72', '98', NULL, '', '120 80', '18', NULL, NULL, '', '00026', 1),
(9, 'IP-SSAL000046', '2023-07-01', '2023-07-01 04:13 PM', '84', '95', NULL, '', '120/80', '16', NULL, NULL, '', '00033', 0),
(10, 'IP-SSAL000042', '2023-07-01', '2023-07-01 04:11 PM', '75', '97', NULL, '', '100/80', '16', NULL, NULL, '', '00032', 0),
(11, 'IP-SSAL000041', '2023-07-01', '2023-07-01 04:28 PM', '70', '96', NULL, '', '110/80', '13', NULL, NULL, '', '00032', 0),
(12, 'IP-SSAL000043', '2023-07-01', '2023-07-01 04:33 PM', '84', '98', NULL, '', '120/80', '12', NULL, NULL, '', '00032', 0),
(13, 'IP-SSAL000047', '2023-07-01', '2023-07-01 04:34 PM', '85', '97', NULL, '', '130/80', '16', NULL, NULL, '', '00033', 0),
(14, 'IP-SSAL000045', '2023-07-01', '2023-07-01 04:37 PM', '85', '97', NULL, '', '120/80', '15', NULL, NULL, '', '00032', 0),
(15, 'IP-SSAL000050', '2023-07-01', '2023-07-01 04:41 PM', '85', '96', NULL, '', '120/80', '16', NULL, NULL, '', '00033', 0),
(16, 'IP-SSAL000044', '2023-07-01', '2023-07-01 04:43 PM', '84', '99', NULL, '', '110/70', '17', NULL, NULL, '', '00032', 0),
(17, 'IP-SSAL000048', '2023-07-01', '2023-07-01 04:52 PM', '82', '96', NULL, '', '120/80', '16', NULL, NULL, '', '00033', 0),
(18, 'IP-SSAL000051', '2023-07-01', '2023-07-01 05:09 PM', '84', '97', NULL, '', '130/80', '16', NULL, NULL, '', '00033', 0),
(19, 'IP-SSAL000049', '2023-07-01', '2023-07-01 05:11 PM', '84', '95', NULL, '', '120/80', '16', NULL, NULL, '', '00033', 0),
(20, 'IP-SSAL000045', '2023-07-02', '2023-07-02 08:24 AM', '86', '98', NULL, '', '110/80', '14', NULL, NULL, '', '00032', 0),
(21, 'IP-SSAL000044', '2023-07-02', '2023-07-02 08:26 AM', '84', '91', NULL, '', '110/80', '12', NULL, NULL, '', '00032', 0),
(22, 'IP-SSAL000041', '2023-07-02', '2023-07-02 08:28 AM', '77', '98', NULL, '', '120/80', '15', NULL, NULL, '', '00032', 0),
(23, 'IP-SSAL000043', '2023-07-02', '2023-07-02 08:30 AM', '84', '91', NULL, '', '120/80', '14', NULL, NULL, '', '00032', 0),
(24, 'IP-SSAL000042', '2023-07-02', '2023-07-02 08:32 AM', '77', '96', NULL, '', '110/80', '15', NULL, NULL, '', '00032', 0),
(25, 'IP-SSAL000046', '2023-07-02', '2023-07-02 11:00 AM', '85', '97', NULL, 'na', '120/80', '16', NULL, NULL, 'na', '00033', 0),
(26, 'IP-SSAL000049', '2023-07-02', '2023-07-02 11:04 AM', '82', '95', NULL, 'na', '110/80', '16', NULL, NULL, 'na', '00033', 0),
(27, 'IP-SSAL000051', '2023-07-02', '2023-07-02 11:08 AM', '88', '95', NULL, 'na', '120/80', '16', NULL, NULL, 'na', '00033', 0),
(28, 'IP-SSAL000048', '2023-07-02', '2023-07-02 11:10 AM', '79', '95', NULL, 'na', '120/80', '16', NULL, NULL, 'na', '00033', 0),
(29, 'IP-SSAL000047', '2023-07-02', '2023-07-02 11:26 AM', '89', '97', NULL, 'na', '140/80', '16', NULL, NULL, 'na', '00033', 0),
(30, 'IP-SSAL000050', '2023-07-02', '2023-07-02 11:29 AM', '84', '96', NULL, 'na', '120/80', '16', NULL, NULL, 'na', '00033', 0),
(31, 'IP-SSAL000049', '2023-07-03', '2023-07-03 09:30 AM', '84', '96', NULL, '', '110/80', '15', NULL, NULL, '', '00032', 0),
(32, 'IP-SSAL000047', '2023-07-03', '2023-07-03 09:35 AM', '77', '98', NULL, '', '148/80', '12', NULL, NULL, '', '00032', 0),
(33, 'IP-SSAL000046', '2023-07-03', '2023-07-03 09:36 AM', '75', '96', NULL, '', '120/80', '15', NULL, NULL, '', '00032', 0),
(34, 'IP-SSAL000051', '2023-07-03', '2023-07-03 11:41 AM', '77', '91', NULL, '', '130/80', '14', NULL, NULL, '', '00032', 0),
(35, 'IP-SSAL000050', '2023-07-03', '2023-07-03 11:43 AM', '84', '97', NULL, '', '130/80', '15', NULL, NULL, '', '00032', 0),
(36, 'IP-SSAL000043', '2023-07-03', '2023-07-03 11:50 AM', '84', '98', NULL, '', '120/80', '13', NULL, NULL, '', '00032', 0),
(37, 'IP-SSAL000042', '2023-07-03', '2023-07-03 11:51 AM', '76', '95', NULL, '', '130/80', '14', NULL, NULL, '', '00032', 0),
(38, 'IP-SSAL000041', '2023-07-03', '2023-07-03 11:57 AM', '88', '94', NULL, '', '120/80', '14', NULL, NULL, '', '00032', 0),
(39, 'IP-SSAL000045', '2023-07-03', '2023-07-03 12:00 PM', '84', '98', NULL, '', '120/80', '13', NULL, NULL, '', '00032', 0),
(40, 'IP-SSAL000044', '2023-07-03', '2023-07-03 12:47 PM', '88', '91', NULL, '', '120/80', '15', NULL, NULL, '', '00032', 0),
(41, 'IP-SSAL000034', '2023-07-03', '2023-07-03 01:22:32 PM', '68', '96', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(42, 'IP-SSAL000036', '2023-07-03', '2023-07-03 01:26 PM', '85', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(43, 'IP-SSAL000032', '2023-07-03', '2023-07-03 01:31 PM', '88', '97', NULL, 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(44, 'IP-SSAL000031', '2023-07-03', '2023-07-03 01:35 PM', '75', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(45, 'IP-SSAL000037', '2023-07-03', '2023-07-03 01:42 PM', '85', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(46, 'IP-SSAL000040', '2023-07-03', '2023-07-03 01:48 PM', '75', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(47, 'IP-SSAL000039', '2023-07-03', '2023-07-03 01:56 PM', '92', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(48, 'IP-SSAL000039', '2023-07-03', '2023-07-03 01:56 PM', '92', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(49, 'IP-SSAL000035', '2023-07-03', '2023-07-03 02:01 PM', '79', '96.1', NULL, 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(50, 'IP-SSAL000033', '2023-07-03', '2023-07-03 02:06 PM', '88', '96', NULL, 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(51, 'IP-SSAL000038', '2023-07-03', '2023-07-03 02:10 PM', '79', '96', NULL, 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(52, 'IP-SSAL000030', '2023-07-03', '2023-07-03 02:13 PM', '75', '97', NULL, 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(53, 'IP-SSAL000052', '2023-07-03', '2023-07-03 04:40 PM', '72', '96', NULL, 'na', '120/80', '16', NULL, NULL, '50', '00025', 0),
(54, 'IP-SSAL000030', '2023-07-03', '2023-07-03 09:28 PM', '80', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(55, 'IP-SSAL000030', '2023-07-03', '2023-07-03 09:28 PM', '80', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(56, 'IP-SSAL000031', '2023-07-03', '2023-07-03 09:41 PM', '84', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(57, 'IP-SSAL000032', '2023-07-03', '2023-07-03 09:47 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(58, 'IP-SSAL000041', '2023-07-03', '2023-07-03 09:48 PM', '84', '98', NULL, '', '110/80', '16', NULL, NULL, '', '00035', 0),
(59, 'IP-SSAL000033', '2023-07-03', '2023-07-03 09:52 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(60, 'IP-SSAL000034', '2023-07-03', '2023-07-03 09:53 PM', '84', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(61, 'IP-SSAL000034', '2023-07-03', '2023-07-03 09:53 PM', '84', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(62, 'IP-SSAL000035', '2023-07-03', '2023-07-03 09:55 PM', '80', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(63, 'IP-SSAL000035', '2023-07-03', '2023-07-03 09:55 PM', '80', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(64, 'IP-SSAL000042', '2023-07-03', '2023-07-03 10:13 PM', '84', '96', NULL, '', '120/80', '16', NULL, NULL, '', '00035', 0),
(65, 'IP-SSAL000036', '2023-07-03', '2023-07-03 10:14 PM', '79', '98', NULL, 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(66, 'IP-SSAL000037', '2023-07-03', '2023-07-03 10:16 PM', '84', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00025', 0),
(67, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(68, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(69, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(70, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(71, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(72, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(73, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(74, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(75, 'IP-SSAL000040', '2023-07-03', '2023-07-03 10:20 PM', '84', '98', NULL, '', '130/80', '16', NULL, NULL, '', '00025', 0),
(76, 'IP-SSAL000043', '2023-07-03', '2023-07-03 10:20 PM', '75', '96', NULL, '', '110/70', '16', NULL, NULL, '', '00035', 0),
(77, 'IP-SSAL000041', '2023-07-03', '2023-07-03 10:23 PM', '75', '98', NULL, '', '110/70', '16', NULL, NULL, '', '00035', 0),
(78, 'IP-SSAL000045', '2023-07-03', '2023-07-03 10:26 PM', '72', '98', NULL, '', '120/80', '16', NULL, NULL, '', '00035', 0),
(79, 'IP-SSAL000050', '2023-07-03', '2023-07-03 10:28 PM', '75', '98', NULL, '', '110/70', '16', NULL, NULL, '', '00035', 0),
(80, 'IP-SSAL000048', '2023-07-03', '2023-07-03 10:34 PM', '84', '96', NULL, '', '120/80', '16', NULL, NULL, '', '00035', 0),
(81, 'IP-SSAL000049', '2023-07-03', '2023-07-03 10:37 PM', '84', '96', NULL, '', '120/70', '16', NULL, NULL, '', '00035', 0),
(82, 'IP-SSAL000047', '2023-07-03', '2023-07-03 10:47 PM', '75', '96', NULL, '', '140/70', '16', NULL, NULL, '', '00035', 0),
(83, 'IP-SSAL000039', '2023-07-03', '2023-07-03 10:50 PM', '82', '98', NULL, 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(84, 'IP-SSAL000046', '2023-07-03', '2023-07-03 10:50 PM', '75', '96', NULL, '', '130/70', '16', NULL, NULL, '', '00035', 0),
(85, 'IP-SSAL000051', '2023-07-03', '2023-07-03 10:51 PM', '75', '98', NULL, '', '130/70', '16', NULL, NULL, '', '00035', 0),
(86, 'IP-SSAL000038', '2023-07-04', '2023-07-04 12:50 AM', '79', '98', NULL, 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(87, 'IP-SSAL000030', '2023-07-04', '2023-07-04 12:46 PM', '77', '96', NULL, '', '110/80', '13', NULL, NULL, '', '00032', 0),
(88, 'IP-SSAL000031', '2023-07-04', '2023-07-04 12:47 PM', '84', '91', NULL, '', '120/80', '15', NULL, NULL, '', '00032', 0),
(89, 'IP-SSAL000032', '2023-07-04', '2023-07-04 12:50 PM', '85', '97', NULL, '', '120/80', '13', NULL, NULL, '', '00032', 0),
(90, 'IP-SSAL000033', '2023-07-04', '2023-07-04 12:52 PM', '77', '96', NULL, '', '120/80', '14', NULL, NULL, '', '00032', 0),
(91, 'IP-SSAL000034', '2023-07-04', '2023-07-04 12:53 PM', '75', '96', NULL, '', '110/70', '13', NULL, NULL, '', '00032', 0),
(92, 'IP-SSAL000035', '2023-07-04', '2023-07-04 12:55 PM', '85', '97', NULL, '', '120/80', '14', NULL, NULL, '', '00032', 0),
(93, 'IP-SSAL000036', '2023-07-04', '2023-07-04 12:56 PM', '84', '98', NULL, '', '130/80', '12', NULL, NULL, '', '00032', 0),
(94, 'IP-SSAL000037', '2023-07-04', '2023-07-04 12:59 PM', '84', '91', NULL, '', '120/80', '12', NULL, NULL, '', '00032', 0),
(95, 'IP-SSAL000038', '2023-07-04', '2023-07-04 01:00 PM', '85', '99', NULL, '', '110/80', '13', NULL, NULL, '', '00032', 0),
(96, 'IP-SSAL000039', '2023-07-04', '2023-07-04 01:03 PM', '75', '97', NULL, '', '120/80', '15', NULL, NULL, '', '00032', 0),
(97, 'IP-SSAL000040', '2023-07-04', '2023-07-04 01:05 PM', '85', '97', NULL, '', '120/80', '16', NULL, NULL, '', '00032', 0),
(98, 'IP-SSAL000048', '2023-07-04', '2023-07-04 06:49 PM', '84', '95', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(99, 'IP-SSAL000050', '2023-07-04', '2023-07-04 06:55 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(100, 'IP-SSAL000051', '2023-07-04', '2023-07-04 07:04 PM', '74', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(101, 'IP-SSAL000054', '2023-07-04', '2023-07-04 07:20 PM', '88', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(102, 'IP-SSAL000046', '2023-07-04', '2023-07-04 07:25 PM', '79', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(103, 'IP-SSAL000047', '2023-07-04', '2023-07-04 07:27 PM', '82', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(104, 'IP-SSAL000049', '2023-07-04', '2023-07-04 07:34 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(105, 'IP-SSAL000049', '2023-07-04', '2023-07-04 07:34 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(106, 'IP-SSAL000030', '2023-07-04', '2023-07-04 10:20 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(107, 'IP-SSAL000031', '2023-07-04', '2023-07-04 10:23 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(108, 'IP-SSAL000032', '2023-07-04', '2023-07-04 10:24 PM', '82', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(109, 'IP-SSAL000033', '2023-07-04', '2023-07-04 10:25 PM', '84', '98', '93', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(110, 'IP-SSAL000055', '2023-07-04', '2023-07-04 10:26 PM', '75', '96', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(111, 'IP-SSAL000034', '2023-07-04', '2023-07-04 10:26 PM', '82', '96', '93', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(112, 'IP-SSAL000035', '2023-07-04', '2023-07-04 10:28 PM', '82', '98', '93', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(113, 'IP-SSAL000036', '2023-07-04', '2023-07-04 10:29 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(114, 'IP-SSAL000037', '2023-07-04', '2023-07-04 10:31 PM', '84', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(115, 'IP-SSAL000041', '2023-07-04', '2023-07-04 10:30 PM', '72', '96', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(116, 'IP-SSAL000038', '2023-07-04', '2023-07-04 10:33 PM', '82', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(117, 'IP-SSAL000039', '2023-07-04', '2023-07-04 10:35 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(118, 'IP-SSAL000040', '2023-07-04', '2023-07-04 10:36 PM', '84', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(119, 'IP-SSAL000042', '2023-07-04', '2023-07-04 10:44 PM', '72', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(120, 'IP-SSAL000045', '2023-07-04', '2023-07-04 10:46 PM', '72', '96', '96', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(121, 'IP-SSAL000046', '2023-07-04', '2023-07-04 10:49 PM', '75', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(122, 'IP-SSAL000054', '2023-07-04', '2023-07-04 10:51 PM', '72', '96', '96', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(123, 'IP-SSAL000051', '2023-07-04', '2023-07-04 10:53 PM', '84', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(124, 'IP-SSAL000047', '2023-07-04', '2023-07-04 10:56 PM', '75', '96', '96', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(125, 'IP-SSAL000050', '2023-07-04', '2023-07-04 10:59 PM', '72', '96', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(126, 'IP-SSAL000049', '2023-07-04', '2023-07-04 11:02 PM', '75', '98', '96', '', '140/70', '16', NULL, NULL, '', '00035', 0),
(127, 'IP-SSAL000030', '2023-07-05', '2023-07-05 09:56 AM', '90', '84', '97', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(128, 'IP-SSAL000031', '2023-07-05', '2023-07-05 09:59 AM', '83', '95', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(129, 'IP-SSAL000032', '2023-07-05', '2023-07-05 10:00 AM', '84', '87', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(130, 'IP-SSAL000033', '2023-07-05', '2023-07-05 10:02 AM', '84', '91', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(131, 'IP-SSAL000034', '2023-07-05', '2023-07-05 10:04 AM', '79', '91', '96', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(132, 'IP-SSAL000035', '2023-07-05', '2023-07-05 10:06 AM', '90', '81', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(133, 'IP-SSAL000036', '2023-07-05', '2023-07-05 10:13 AM', '80', '91', '94', '', '130/80', '15', NULL, NULL, '', '00032', 0),
(134, 'IP-SSAL000037', '2023-07-05', '2023-07-05 10:19 AM', '84', '91', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(135, 'IP-SSAL000038', '2023-07-05', '2023-07-05 10:22 AM', '88', '91', '99', '', '100/80', '14', NULL, NULL, '', '00032', 0),
(136, 'IP-SSAL000039', '2023-07-05', '2023-07-05 10:23 AM', '77', '91', '97', '', '130/80', '14', NULL, NULL, '47.6', '00032', 0),
(137, 'IP-SSAL000040', '2023-07-05', '2023-07-05 10:25 AM', '77', '90', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(138, 'IP-SSAL000055', '2023-07-05', '2023-07-05 11:35 AM', '86', '97', '97', 'Na', '160/80', '16', NULL, NULL, 'Na', '00033', 0),
(139, 'IP-SSAL000043', '2023-07-05', '2023-07-05 11:42 AM', '81', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(140, 'IP-SSAL000041', '2023-07-05', '2023-07-05 11:48 AM', '75', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(141, 'IP-SSAL000042', '2023-07-05', '2023-07-05 11:50 AM', '85', '95', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(142, 'IP-SSAL000045', '2023-07-05', '2023-07-05 11:54 AM', '82', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(143, 'IP-SSAL000049', '2023-07-05', '2023-07-05 11:56 AM', '88', '95', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(144, 'IP-SSAL000051', '2023-07-05', '2023-07-05 12:01 PM', '75', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(145, 'IP-SSAL000046', '2023-07-05', '2023-07-05 12:02 PM', '75', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(146, 'IP-SSAL000054', '2023-07-05', '2023-07-05 12:06 PM', '82', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(147, 'IP-SSAL000047', '2023-07-05', '2023-07-05 12:09 PM', '84', '95', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(148, 'IP-SSAL000050', '2023-07-05', '2023-07-05 12:11 PM', '86', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(149, 'IP-SSAL000056', '2023-07-05', '2023-07-05 03:49 PM', '94', '95', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(150, 'IP-SSAL000030', '2023-07-05', '2023-07-05 09:28 PM', '88', '91', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(151, 'IP-SSAL000031', '2023-07-05', '2023-07-05 09:29 PM', '88', '94', '96', 'Na ', '130/80', '13', NULL, NULL, 'NA', '00025', 0),
(152, 'IP-SSAL000032', '2023-07-05', '2023-07-05 09:34 PM', '85', '98', '97', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(153, 'IP-SSAL000033', '2023-07-05', '2023-07-05 09:36 PM', '88', '92', '99', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(154, 'IP-SSAL000035', '2023-07-05', '2023-07-05 09:49 PM', '82', '98', '97', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(155, 'IP-SSAL000036', '2023-07-05', '2023-07-05 09:53 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(156, 'IP-SSAL000036', '2023-07-05', '2023-07-05 09:53 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(157, 'IP-SSAL000037', '2023-07-05', '2023-07-05 09:54 PM', '84', '98', '93', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(158, 'IP-SSAL000039', '2023-07-05', '2023-07-05 09:56 PM', '84', '96', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(159, 'IP-SSAL000039', '2023-07-05', '2023-07-05 09:56 PM', '84', '96', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(160, 'IP-SSAL000039', '2023-07-05', '2023-07-05 09:56 PM', '84', '96', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(161, 'IP-SSAL000040', '2023-07-05', '2023-07-05 10:00 PM', '84', '96', '93', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(162, 'IP-SSAL000041', '2023-07-05', '2023-07-05 10:02 PM', '82', '91', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(163, 'IP-SSAL000042', '2023-07-05', '2023-07-05 10:03 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(164, 'IP-SSAL000043', '2023-07-05', '2023-07-05 10:05 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(165, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(166, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(167, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(168, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(169, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(170, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(171, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(172, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(173, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(174, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(175, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(176, 'IP-SSAL000045', '2023-07-05', '2023-07-05 10:06 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(177, 'IP-SSAL000046', '2023-07-05', '2023-07-05 10:09 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(178, 'IP-SSAL000047', '2023-07-05', '2023-07-05 10:11 PM', '82', '96', '93', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(179, 'IP-SSAL000049', '2023-07-05', '2023-07-05 10:13 PM', '80', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(180, 'IP-SSAL000050', '2023-07-05', '2023-07-05 10:15 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(181, 'IP-SSAL000051', '2023-07-05', '2023-07-05 10:17 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(182, 'IP-SSAL000054', '2023-07-05', '2023-07-05 10:18 PM', '82', '91', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(183, 'IP-SSAL000055', '2023-07-05', '2023-07-05 10:20 PM', '82', '98', '93', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(184, 'IP-SSAL000056', '2023-07-05', '2023-07-05 10:22 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(185, 'IP-SSAL000039', '2023-07-06', '2023-07-06 03:21 PM', '75', '96', '96', '', '120/80', '15', NULL, NULL, '47.7', '00035', 0),
(186, 'IP-SSAL000038', '2023-07-06', '2023-07-06 03:23 PM', '72', '95', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(187, 'IP-SSAL000030', '2023-07-06', '2023-07-06 03:26 PM', '72', '98', '96', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(188, 'IP-SSAL000040', '2023-07-06', '2023-07-06 03:37 PM', '84', '98', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(189, 'IP-SSAL000040', '2023-07-06', '2023-07-06 03:37 PM', '84', '98', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(190, 'IP-SSAL000031', '2023-07-06', '2023-07-06 03:39 PM', '75', '98', '98', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(191, 'IP-SSAL000033', '2023-07-06', '2023-07-06 03:43 PM', '75', '98', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(192, 'IP-SSAL000034', '2023-07-06', '2023-07-06 03:45 PM', '75', '98', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(193, 'IP-SSAL000035', '2023-07-06', '2023-07-06 03:47 PM', '72', '98', '96', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(194, 'IP-SSAL000036', '2023-07-06', '2023-07-06 03:49 PM', '75', '95', '98', '', '110/80', '16 ', NULL, NULL, '', '00035', 0),
(195, 'IP-SSAL000055', '2023-07-06', '2023-07-06 04:01 PM', '88', '95', '99', '', '140/80', '14', NULL, NULL, '', '00032', 0),
(196, 'IP-SSAL000041', '2023-07-06', '2023-07-06 04:03 PM', '88', '96', '99', '', '120/80', '17', NULL, NULL, '', '00032', 0),
(197, 'IP-SSAL000042', '2023-07-06', '2023-07-06 04:05 PM', '84', '95', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(198, 'IP-SSAL000043', '2023-07-06', '2023-07-06 04:08 PM', '84', '96', '99', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(199, 'IP-SSAL000045', '2023-07-06', '2023-07-06 04:09 PM', '83', '96', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(200, 'IP-SSAL000046', '2023-07-06', '2023-07-06 04:12 PM', '80', '97', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(201, 'IP-SSAL000030', '2023-07-06', '2023-07-06 11:04 PM', '82', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(202, 'IP-SSAL000032', '2023-07-06', '2023-07-06 11:05 PM', '84', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(203, 'IP-SSAL000033', '2023-07-06', '2023-07-06 11:16 PM', '82', '96', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(204, 'IP-SSAL000034', '2023-07-06', '2023-07-06 11:17 PM', '84', '98', '93', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(205, 'IP-SSAL000035', '2023-07-06', '2023-07-06 11:18 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(206, 'IP-SSAL000036', '2023-07-07', '2023-07-07 09:26 AM', '75', '96', '96', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(207, 'IP-SSAL000035', '2023-07-07', '2023-07-07 09:27 AM', '72', '95', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(208, 'IP-SSAL000034', '2023-07-07', '2023-07-07 09:28 AM', '75', '98', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(209, 'IP-SSAL000033', '2023-07-07', '2023-07-07 09:28 AM', '75', '95', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(210, 'IP-SSAL000037', '2023-07-07', '2023-07-07 09:30 AM', '75', '98', '96', '', '130/80', '16 ', NULL, NULL, '', '00035', 0),
(211, 'IP-SSAL000032', '2023-07-07', '2023-07-07 09:31 AM', '75', '96', '98', '', '140/80', '15', NULL, NULL, '', '00035', 0),
(212, 'IP-SSAL000031', '2023-07-07', '2023-07-07 09:32 AM', '75', '98', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(213, 'IP-SSAL000040', '2023-07-07', '2023-07-07 09:32 AM', '72', '98', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(214, 'IP-SSAL000038', '2023-07-07', '2023-07-07 09:33 AM', '72', '98', '98', '', '110/70', '16 ', NULL, NULL, '', '00035', 0),
(215, 'IP-SSAL000039', '2023-07-07', '2023-07-07 09:34 AM', '72', '96', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(216, 'IP-SSAL000044', '2023-07-07', '2023-07-07 11:45 AM', '88', '96', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(217, 'IP-SSAL000041', '2023-07-07', '2023-07-07 12:28 PM', '88', '95', '97', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(218, 'IP-SSAL000043', '2023-07-07', '2023-07-07 12:30 PM', '88', '95', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(219, 'IP-SSAL000042', '2023-07-07', '2023-07-07 12:31 PM', '83', '94', '96', '', '110/80', '15', NULL, NULL, '', '00032', 0),
(220, 'IP-SSAL000055', '2023-07-07', '2023-07-07 12:33 PM', '83', '95', '96', '', '150/80', '12', NULL, NULL, '', '00032', 0),
(221, 'IP-SSAL000045', '2023-07-07', '2023-07-07 12:35 PM', '88', '95', '97', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(222, 'IP-SSAL000056', '2023-07-07', '2023-07-07 12:37 PM', '77', '95', '97', '', '130/80', '12', NULL, NULL, '', '00032', 0),
(223, 'IP-SSAL000050', '2023-07-07', '2023-07-07 12:39 PM', '84', '93', '95', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(224, 'IP-SSAL000049', '2023-07-07', '2023-07-07 12:41 PM', '80', '95', '98', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(225, 'IP-SSAL000047', '2023-07-07', '2023-07-07 12:43 PM', '84', '95', '98', '', '130/80', '12', NULL, NULL, '', '00032', 0),
(226, 'IP-SSAL000051', '2023-07-07', '2023-07-07 12:44 PM', '84', '96', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(227, 'IP-SSAL000054', '2023-07-07', '2023-07-07 12:55 PM', '70', '91', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(228, 'IP-SSAL000046', '2023-07-07', '2023-07-07 01:05 PM', '77', '94', '96', '', '130/80', '13', NULL, NULL, '', '00032', 0),
(229, 'IP-SSAL000030', '2023-07-07', '2023-07-07 09:18 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(230, 'IP-SSAL000031', '2023-07-07', '2023-07-07 09:20 PM', '82', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(231, 'IP-SSAL000032', '2023-07-07', '2023-07-07 09:22 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(232, 'IP-SSAL000033', '2023-07-07', '2023-07-07 09:23 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(233, 'IP-SSAL000034', '2023-07-07', '2023-07-07 09:26 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(234, 'IP-SSAL000036', '2023-07-07', '2023-07-07 09:33 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(235, 'IP-SSAL000037', '2023-07-07', '2023-07-07 09:35 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(236, 'IP-SSAL000038', '2023-07-07', '2023-07-07 09:35 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(237, 'IP-SSAL000039', '2023-07-07', '2023-07-07 09:38 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(238, 'IP-SSAL000040', '2023-07-07', '2023-07-07 09:42 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(239, 'IP-SSAL000043', '2023-07-07', '2023-07-07 11:52 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(240, 'IP-SSAL000042', '2023-07-07', '2023-07-07 11:54 PM', '85', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(241, 'IP-SSAL000041', '2023-07-07', '2023-07-07 11:57 PM', '85', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(242, 'IP-SSAL000055', '2023-07-08', '2023-07-08 12:03 AM', '85', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(243, 'IP-SSAL000045', '2023-07-08', '2023-07-08 12:04 AM', '80', '98', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(244, 'IP-SSAL000044', '2023-07-08', '2023-07-08 12:07 AM', '85', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(245, 'IP-SSAL000050', '2023-07-08', '2023-07-08 12:14 AM', '88', '96', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(246, 'IP-SSAL000047', '2023-07-08', '2023-07-08 12:15 AM', '82', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(247, 'IP-SSAL000049', '2023-07-08', '2023-07-08 12:18 AM', '85', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(248, 'IP-SSAL000056', '2023-07-08', '2023-07-08 12:20 AM', '74', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(249, 'IP-SSAL000046', '2023-07-08', '2023-07-08 12:24 AM', '85', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(250, 'IP-SSAL000054', '2023-07-08', '2023-07-08 12:29 AM', '75', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(251, 'IP-SSAL000051', '2023-07-08', '2023-07-08 12:30 AM', '94', '95', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(252, 'IP-SSAL000036', '2023-07-08', '2023-07-08 10:14 AM', '70', '96', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(253, 'IP-SSAL000034', '2023-07-08', '2023-07-08 10:15 AM', '75', '96', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(254, 'IP-SSAL000035', '2023-07-08', '2023-07-08 10:16 AM', '72', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(255, 'IP-SSAL000033', '2023-07-08', '2023-07-08 10:17 AM', '72', '98', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(256, 'IP-SSAL000037', '2023-07-08', '2023-07-08 10:18 AM', '70', '98', '96', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(257, 'IP-SSAL000032', '2023-07-08', '2023-07-08 10:19 AM', '75', '98', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(258, 'IP-SSAL000038', '2023-07-08', '2023-07-08 10:20 AM', '72', '95', '98', '', '110/80', '15', NULL, NULL, '', '00035', 0),
(259, 'IP-SSAL000039', '2023-07-08', '2023-07-08 10:21 AM', '72', '95', '96', '', '130/80', '15', NULL, NULL, '', '00035', 0),
(260, 'IP-SSAL000039', '2023-07-08', '2023-07-08 10:22 AM', '72', '95', '96', '', '130/80', '16', NULL, NULL, '48.1', '00035', 0),
(261, 'IP-SSAL000043', '2023-07-08', '2023-07-08 01:13 PM', '83', '94', '96', '', '110/80', '12', NULL, NULL, '', '00032', 0),
(262, 'IP-SSAL000042', '2023-07-08', '2023-07-08 01:15 PM', '84', '96', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(263, 'IP-SSAL000041', '2023-07-08', '2023-07-08 01:18 PM', '84', '94', '96', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(264, 'IP-SSAL000055', '2023-07-08', '2023-07-08 01:19 PM', '81', '96', '99', '', '150/80', '14', NULL, NULL, '', '00032', 0),
(265, 'IP-SSAL000044', '2023-07-08', '2023-07-08 01:21 PM', '88', '97', '96', '', '110/80', '12', NULL, NULL, '', '00032', 0),
(266, 'IP-SSAL000045', '2023-07-08', '2023-07-08 01:27 PM', '81', '96', '95', '', '120/80', '12', NULL, NULL, '', '00032', 0),
(267, 'IP-SSAL000030', '2023-07-08', '2023-07-08 09:38 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(268, 'IP-SSAL000031', '2023-07-08', '2023-07-08 09:40 PM', '82', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(269, 'IP-SSAL000032', '2023-07-08', '2023-07-08 09:40 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(270, 'IP-SSAL000033', '2023-07-08', '2023-07-08 09:42 PM', '84', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(271, 'IP-SSAL000034', '2023-07-08', '2023-07-08 09:43 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(272, 'IP-SSAL000035', '2023-07-08', '2023-07-08 09:45 PM', '82', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(273, 'IP-SSAL000036', '2023-07-08', '2023-07-08 09:47 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(274, 'IP-SSAL000037', '2023-07-08', '2023-07-08 09:48 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(275, 'IP-SSAL000038', '2023-07-08', '2023-07-08 09:49 PM', '84', '98', '92', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(276, 'IP-SSAL000039', '2023-07-08', '2023-07-08 09:51 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(277, 'IP-SSAL000046', '2023-07-08', '2023-07-08 09:53 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(278, 'IP-SSAL000045', '2023-07-08', '2023-07-08 10:29 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(279, 'IP-SSAL000042', '2023-07-08', '2023-07-08 10:32 PM', '74', '95', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(280, 'IP-SSAL000043', '2023-07-08', '2023-07-08 10:40 PM', '80', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(281, 'IP-SSAL000055', '2023-07-08', '2023-07-08 10:42 PM', '76', '97', '98', 'Na', '150/80', '16', NULL, NULL, 'Na', '00033', 0),
(282, 'IP-SSAL000041', '2023-07-08', '2023-07-08 10:44 PM', '65', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(283, 'IP-SSAL000044', '2023-07-08', '2023-07-08 10:46 PM', '76', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(284, 'IP-SSAL000056', '2023-07-08', '2023-07-08 10:49 PM', '85', '97', '98', 'Na', '110/70', '16', NULL, NULL, 'Na', '00033', 0),
(285, 'IP-SSAL000051', '2023-07-08', '2023-07-08 10:52 PM', '84', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(286, 'IP-SSAL000054', '2023-07-08', '2023-07-08 10:54 PM', '80', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(287, 'IP-SSAL000046', '2023-07-08', '2023-07-08 10:56 PM', '80', '96', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(288, 'IP-SSAL000049', '2023-07-08', '2023-07-08 10:59 PM', '80', '98', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(289, 'IP-SSAL000050', '2023-07-08', '2023-07-08 11:01 PM', '80', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(290, 'IP-SSAL000047', '2023-07-08', '2023-07-08 11:03 PM', '80', '98', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(291, 'IP-SSAL000036', '2023-07-09', '2023-07-09 09:31 AM', '72', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(292, 'IP-SSAL000034', '2023-07-09', '2023-07-09 09:51 AM', '75', '98', '96', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(293, 'IP-SSAL000035', '2023-07-09', '2023-07-09 09:53 AM', '72', '98', '96', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(294, 'IP-SSAL000033', '2023-07-09', '2023-07-09 09:54 AM', '75', '96', '96', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(295, 'IP-SSAL000037', '2023-07-09', '2023-07-09 09:56 AM', '75', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(296, 'IP-SSAL000032', '2023-07-09', '2023-07-09 09:58 AM', '75', '98', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(297, 'IP-SSAL000040', '2023-07-09', '2023-07-09 09:59 AM', '75', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(298, 'IP-SSAL000031', '2023-07-09', '2023-07-09 10:01 AM', '72', '98', '96', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(299, 'IP-SSAL000039', '2023-07-09', '2023-07-09 10:04 AM', '72', '95', '98', '', '120/80', '16', NULL, NULL, '47.2', '00035', 0),
(300, 'IP-SSAL000042', '2023-07-09', '2023-07-09 03:07 PM', '77', '94', '98', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(301, 'IP-SSAL000044', '2023-07-09', '2023-07-09 03:15 PM', '77', '95', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(302, 'IP-SSAL000055', '2023-07-09', '2023-07-09 03:16 PM', '88', '95', '99', '', '150/80', '13', NULL, NULL, '', '00032', 0),
(303, 'IP-SSAL000041', '2023-07-09', '2023-07-09 03:18 PM', '77', '95', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(304, 'IP-SSAL000043', '2023-07-09', '2023-07-09 03:20 PM', '77', '95', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(305, 'IP-SSAL000045', '2023-07-09', '2023-07-09 03:22 PM', '88', '95', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(306, 'IP-SSAL000051', '2023-07-09', '2023-07-09 03:26 PM', '77', '95', '99', '', '110/80', '12', NULL, NULL, '', '00032', 0),
(307, 'IP-SSAL000050', '2023-07-09', '2023-07-09 03:28 PM', '75', '95', '97', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(308, 'IP-SSAL000049', '2023-07-09', '2023-07-09 03:31 PM', '77', '96', '99', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(309, 'IP-SSAL000047', '2023-07-09', '2023-07-09 03:32 PM', '87', '95', '99', '', '150/80', '15', NULL, NULL, '', '00032', 0),
(310, 'IP-SSAL000046', '2023-07-09', '2023-07-09 03:34 PM', '88', '96', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(311, 'IP-SSAL000056', '2023-07-09', '2023-07-09 03:36 PM', '88', '96', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(312, 'IP-SSAL000030', '2023-07-09', '2023-07-09 09:25 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(313, 'IP-SSAL000031', '2023-07-09', '2023-07-09 09:26 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(314, 'IP-SSAL000032', '2023-07-09', '2023-07-09 09:28 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(315, 'IP-SSAL000033', '2023-07-09', '2023-07-09 09:29 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(316, 'IP-SSAL000034', '2023-07-09', '2023-07-09 09:30 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(317, 'IP-SSAL000035', '2023-07-09', '2023-07-09 09:32 PM', '84', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(318, 'IP-SSAL000036', '2023-07-09', '2023-07-09 09:33 PM', '79', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(319, 'IP-SSAL000037', '2023-07-09', '2023-07-09 09:35 PM', '80', '96', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(320, 'IP-SSAL000038', '2023-07-09', '2023-07-09 09:36 PM', '79', '98', '92', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(321, 'IP-SSAL000039', '2023-07-09', '2023-07-09 09:38 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(322, 'IP-SSAL000039', '2023-07-09', '2023-07-09 09:39 PM', '80', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(323, 'IP-SSAL000040', '2023-07-09', '2023-07-09 09:45 PM', '80', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(324, 'IP-SSAL000051', '2023-07-09', '2023-07-09 11:02 PM', '75', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(325, 'IP-SSAL000050', '2023-07-09', '2023-07-09 11:05 PM', '75', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(326, 'IP-SSAL000049', '2023-07-09', '2023-07-09 11:10 PM', '75', '97', '97', 'Na', '170/80', '16', NULL, NULL, 'Na', '00033', 0),
(327, 'IP-SSAL000056', '2023-07-09', '2023-07-09 11:12 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(328, 'IP-SSAL000046', '2023-07-09', '2023-07-09 11:13 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(329, 'IP-SSAL000047', '2023-07-09', '2023-07-09 11:24 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(330, 'IP-SSAL000045', '2023-07-09', '2023-07-09 11:26 PM', '85', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(331, 'IP-SSAL000043', '2023-07-09', '2023-07-09 11:28 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(332, 'IP-SSAL000055', '2023-07-09', '2023-07-09 11:29 PM', '85', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(333, 'IP-SSAL000042', '2023-07-09', '2023-07-09 11:32 PM', '84', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(334, 'IP-SSAL000041', '2023-07-09', '2023-07-09 11:35 PM', '84', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(335, 'IP-SSAL000044', '2023-07-09', '2023-07-09 11:37 PM', '75', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(336, 'IP-SSAL000034', '2023-07-10', '2023-07-10 09:28 AM', '75', '98', '96', '', '110/80', '15', NULL, NULL, '', '00035', 0),
(337, 'IP-SSAL000035', '2023-07-10', '2023-07-10 09:30 AM', '72', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(338, 'IP-SSAL000033', '2023-07-10', '2023-07-10 09:32 AM', '72', '96', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(339, 'IP-SSAL000037', '2023-07-10', '2023-07-10 09:35 AM', '72', '95', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(340, 'IP-SSAL000040', '2023-07-10', '2023-07-10 09:58 AM', '75', '98', '96', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(341, 'IP-SSAL000031', '2023-07-10', '2023-07-10 10:00 AM', '84', '98', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(342, 'IP-SSAL000038', '2023-07-10', '2023-07-10 10:01 AM', '75', '96', '98', '', '110/70', '16', NULL, NULL, '', '00035', 0),
(343, 'IP-SSAL000039', '2023-07-10', '2023-07-10 10:03 AM', '75', '98', '98', '', '130/70', '16', NULL, NULL, '47.2', '00035', 0),
(344, 'IP-SSAL000047', '2023-07-10', '2023-07-10 11:44 AM', '84', '96', '99', '', '140/80', '13', NULL, NULL, '', '00032', 0),
(345, 'IP-SSAL000046', '2023-07-10', '2023-07-10 11:45 AM', '77', '95', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(346, 'IP-SSAL000051', '2023-07-10', '2023-07-10 11:47 AM', '80', '95', '97', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(347, 'IP-SSAL000050', '2023-07-10', '2023-07-10 11:48 AM', '88', '95', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(348, 'IP-SSAL000056', '2023-07-10', '2023-07-10 11:50 AM', '77', '96', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(349, 'IP-SSAL000049', '2023-07-10', '2023-07-10 11:52 AM', '75', '95', '96', '', '130/80', '13', NULL, NULL, '', '00032', 0),
(350, 'IP-SSAL000055', '2023-07-10', '2023-07-10 11:54 AM', '88', '95', '97', '', '150/80', '13', NULL, NULL, '', '00032', 0),
(351, 'IP-SSAL000042', '2023-07-10', '2023-07-10 11:55 AM', '85', '98', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(352, 'IP-SSAL000041', '2023-07-10', '2023-07-10 11:56 AM', '88', '96', '96', '', '110/80', '15', NULL, NULL, '', '00032', 0),
(353, 'IP-SSAL000044', '2023-07-10', '2023-07-10 11:58 AM', '88', '96', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(354, 'IP-SSAL000045', '2023-07-10', '2023-07-10 12:01 PM', '88', '95', '96', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(355, 'IP-SSAL000043', '2023-07-10', '2023-07-10 12:03 PM', '80', '94', '96', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(356, 'IP-SSAL000030', '2023-07-10', '2023-07-10 09:24 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(357, 'IP-SSAL000031', '2023-07-10', '2023-07-10 09:25 PM', '84', '96', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(358, 'IP-SSAL000032', '2023-07-10', '2023-07-10 09:26 PM', '84', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(359, 'IP-SSAL000033', '2023-07-10', '2023-07-10 09:28 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(360, 'IP-SSAL000034', '2023-07-10', '2023-07-10 09:30 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(361, 'IP-SSAL000035', '2023-07-10', '2023-07-10 09:32 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(362, 'IP-SSAL000036', '2023-07-10', '2023-07-10 09:33 PM', '84', '98', '95', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(363, 'IP-SSAL000037', '2023-07-10', '2023-07-10 09:34 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(364, 'IP-SSAL000038', '2023-07-10', '2023-07-10 09:35 PM', '84', '98', '95', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(365, 'IP-SSAL000039', '2023-07-10', '2023-07-10 09:36 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(366, 'IP-SSAL000040', '2023-07-10', '2023-07-10 09:38 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(367, 'IP-SSAL000055', '2023-07-10', '2023-07-10 10:16 PM', '85', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(368, 'IP-SSAL000043', '2023-07-10', '2023-07-10 10:18 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(369, 'IP-SSAL000042', '2023-07-10', '2023-07-10 10:20 PM', '85', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(370, 'IP-SSAL000044', '2023-07-10', '2023-07-10 10:22 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(371, 'IP-SSAL000041', '2023-07-10', '2023-07-10 10:25 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(372, 'IP-SSAL000041', '2023-07-10', '2023-07-10 10:26 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(373, 'IP-SSAL000045', '2023-07-10', '2023-07-10 10:28 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(374, 'IP-SSAL000054', '2023-07-10', '2023-07-10 10:30 PM', '75', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(375, 'IP-SSAL000046', '2023-07-10', '2023-07-10 10:32 PM', '75', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(376, 'IP-SSAL000046', '2023-07-10', '2023-07-10 10:32 PM', '75', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(377, 'IP-SSAL000050', '2023-07-10', '2023-07-10 10:34 PM', '85', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(378, 'IP-SSAL000051', '2023-07-10', '2023-07-10 10:36 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(379, 'IP-SSAL000049', '2023-07-10', '2023-07-10 10:38 PM', '75', '97', '97', 'Na', '170/80', '16', NULL, NULL, 'Na', '00033', 0),
(380, 'IP-SSAL000047', '2023-07-10', '2023-07-10 10:39 PM', '85', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(381, 'IP-SSAL000056', '2023-07-10', '2023-07-10 10:41 PM', '75', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(382, 'IP-SSAL000036', '2023-07-11', '2023-07-11 01:32 PM', '72', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(383, 'IP-SSAL000034', '2023-07-11', '2023-07-11 01:34 PM', '75', '98', '98', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(384, 'IP-SSAL000035', '2023-07-11', '2023-07-11 01:36 PM', '75', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(385, 'IP-SSAL000033', '2023-07-11', '2023-07-11 01:39 PM', '72', '98', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(386, 'IP-SSAL000037', '2023-07-11', '2023-07-11 01:42 PM', '75', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(387, 'IP-SSAL000032', '2023-07-11', '2023-07-11 01:43 PM', '75', '95', '98', '', '150/80', '15', NULL, NULL, '', '00035', 0),
(388, 'IP-SSAL000040', '2023-07-11', '2023-07-11 01:45 PM', '75', '98', '96', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(389, 'IP-SSAL000031', '2023-07-11', '2023-07-11 01:48 PM', '75', '98', '96', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(390, 'IP-SSAL000030', '2023-07-11', '2023-07-11 01:49 PM', '75', '96', '98', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(391, 'IP-SSAL000038', '2023-07-11', '2023-07-11 01:51 PM', '72', '96', '98', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(392, 'IP-SSAL000039', '2023-07-11', '2023-07-11 01:53 PM', '84', '98', '96', '', '120/80', '15', NULL, NULL, '48.1', '00035', 0);
INSERT INTO `iop_vital_parameters` (`vital_id`, `iop_id`, `dDate`, `dDateTime`, `pulse_rate`, `temperature`, `spo2`, `height`, `bp`, `respiration`, `bsl_type`, `bsl`, `weight`, `cPreparedBy`, `InActive`) VALUES
(393, 'IP-SSAL000046', '2023-07-11', '2023-07-11 02:08 PM', '75', '96', '98', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(394, 'IP-SSAL000054', '2023-07-11', '2023-07-11 02:10 PM', '70', '98', '98', '', '110/70', '16 ', NULL, NULL, '', '00035', 0),
(395, 'IP-SSAL000051', '2023-07-11', '2023-07-11 02:36 PM', '72', '95', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(396, 'IP-SSAL000047', '2023-07-11', '2023-07-11 02:39 PM', '72', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(397, 'IP-SSAL000049', '2023-07-11', '2023-07-11 02:40 PM', '70', '98', '98', '', '110/70', '16 ', NULL, NULL, '', '00035', 0),
(398, 'IP-SSAL000050', '2023-07-11', '2023-07-11 02:43 PM', '75', '98', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(399, 'IP-SSAL000043', '2023-07-11', '2023-07-11 02:46 PM', '75', '96', '98', '', '110/70', '16', NULL, NULL, '', '00035', 0),
(400, 'IP-SSAL000042', '2023-07-11', '2023-07-11 02:47 PM', '75', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(401, 'IP-SSAL000055', '2023-07-11', '2023-07-11 02:49 PM', '72', '98', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(402, 'IP-SSAL000045', '2023-07-11', '2023-07-11 02:51 PM', '72', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(403, 'IP-SSAL000041', '2023-07-11', '2023-07-11 02:53 PM', '75', '98', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(404, 'IP-SSAL000030', '2023-07-12', '2023-07-12 12:04 AM', '82', '98', '92', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(405, 'IP-SSAL000030', '2023-07-12', '2023-07-12 12:04 AM', '82', '98', '92', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(406, 'IP-SSAL000031', '2023-07-12', '2023-07-12 12:08 AM', '84', '98', '98', 'NA', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(407, 'IP-SSAL000032', '2023-07-12', '2023-07-12 12:09 AM', '84', '97', '95', 'NA', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(408, 'IP-SSAL000033', '2023-07-12', '2023-07-12 12:12 AM', '84', '98', '95', 'NA', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(409, 'IP-SSAL000034', '2023-07-12', '2023-07-12 12:13 AM', '84', '97', '98', 'NA', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(410, 'IP-SSAL000035', '2023-07-12', '2023-07-12 12:14 AM', '84', '98', '95', 'NA', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(411, 'IP-SSAL000036', '2023-07-12', '2023-07-12 12:17 AM', '75', '94', '98', 'NA', '110/80', '16', NULL, NULL, 'NA', '00025', 0),
(412, 'IP-SSAL000037', '2023-07-12', '2023-07-12 12:18 AM', '84', '98', '98', 'NA', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(413, 'IP-SSAL000038', '2023-07-12', '2023-07-12 12:20 AM', '80', '98', '95', 'NA', '110/80', '16', NULL, NULL, 'NA', '00025', 0),
(414, 'IP-SSAL000039', '2023-07-12', '2023-07-12 12:21 AM', '84', '98', '94', 'NA', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(415, 'IP-SSAL000040', '2023-07-12', '2023-07-12 12:23 AM', '84', '96', '94', 'NA', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(416, 'IP-SSAL000041', '2023-07-11', '2023-07-11 11:00 PM', '77', '98', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(417, 'IP-SSAL000042', '2023-07-11', '2023-07-11 11:12 AM', '84', '96', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(418, 'IP-SSAL000043', '2023-07-11', '2023-07-11 11:13 AM', '84', '95', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(419, 'IP-SSAL000044', '2023-07-11', '2023-07-11 11:14 PM', '84', '98', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(420, 'IP-SSAL000045', '2023-07-11', '2023-07-11 11:16 PM', '88', '98', '95', '', '110/70', '16', NULL, NULL, '', '00032', 0),
(421, 'IP-SSAL000046', '2023-07-11', '2023-07-11 11:20 PM', '77', '98', '97', '', '140/80', '15', NULL, NULL, '', '00032', 0),
(422, 'IP-SSAL000047', '2023-07-11', '2023-07-11 11:30 PM', '84', '97', '98', '', '140/80', '12', NULL, NULL, '', '00032', 0),
(423, 'IP-SSAL000049', '2023-07-11', '2023-07-11 11:32 PM', '75', '97', '96', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(424, 'IP-SSAL000050', '2023-07-11', '2023-07-11 11:33 PM', '88', '97', '98', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(425, 'IP-SSAL000051', '2023-07-11', '2023-07-11 11:34 PM', '75', '98', '96', '', '110/80', '12', NULL, NULL, '', '00032', 0),
(426, 'IP-SSAL000054', '2023-07-11', '2023-07-11 11:36 PM', '75', '97', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(427, 'IP-SSAL000055', '2023-07-11', '2023-07-11 11:39 PM', '77', '96', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(428, 'IP-SSAL000055', '2023-07-11', '2023-07-11 11:40 PM', '88', '91', '95', '', '140/80', '12', NULL, NULL, '', '00032', 0),
(429, 'IP-SSAL000056', '2023-07-11', '2023-07-11 11:43 PM', '77', '98', '95', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(430, 'IP-SSAL000058', '2023-07-11', '2023-07-11 11:50 PM', '88', '91', '98', '', '130/80', '12', NULL, NULL, '', '00032', 0),
(431, 'IP-SSAL000040', '2023-07-12', '2023-07-12 05:14 PM', '50', '97', '94', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(432, 'IP-SSAL000031', '2023-07-12', '2023-07-12 06:06 PM', '60', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(433, 'IP-SSAL000039', '2023-07-12', '2023-07-12 06:11 PM', '85', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(434, 'IP-SSAL000033', '2023-07-12', '2023-07-12 06:14 PM', '95', '97', '97', 'Na', '150/80', '16', NULL, NULL, 'Na', '00033', 0),
(435, 'IP-SSAL000034', '2023-07-12', '2023-07-12 06:20 PM', '65', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(436, 'IP-SSAL000034', '2023-07-12', '2023-07-12 06:20 PM', '65', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(437, 'IP-SSAL000037', '2023-07-12', '2023-07-12 06:30 PM', '75', '97', '95', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(438, 'IP-SSAL000037', '2023-07-12', '2023-07-12 06:30 PM', '75', '97', '95', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(439, 'IP-SSAL000032', '2023-07-12', '2023-07-12 06:33 PM', '85', '96', '100', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(440, 'IP-SSAL000030', '2023-07-12', '2023-07-12 06:36 PM', '120', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(441, 'IP-SSAL000035', '2023-07-12', '2023-07-12 06:40 PM', '76', '97', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(442, 'IP-SSAL000038', '2023-07-12', '2023-07-12 06:45 PM', '65', '97', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(443, 'IP-SSAL000036', '2023-07-12', '2023-07-12 06:49 PM', '75', '97', '95', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(444, 'IP-SSAL000044', '2023-07-12', '2023-07-12 06:50 PM', '85', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(445, 'IP-SSAL000045', '2023-07-12', '2023-07-12 06:56 PM', '75', '97', '100', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(446, 'IP-SSAL000045', '2023-07-12', '2023-07-12 06:56 PM', '75', '97', '100', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(447, 'IP-SSAL000042', '2023-07-12', '2023-07-12 06:58 PM', '64', '97', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(448, 'IP-SSAL000043', '2023-07-12', '2023-07-12 07:02 PM', '73', '97', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(449, 'IP-SSAL000055', '2023-07-12', '2023-07-12 07:05 PM', '71', '97', '98', 'Na', '150/80', '16', NULL, NULL, 'Na', '00033', 0),
(450, 'IP-SSAL000041', '2023-07-12', '2023-07-12 07:07 PM', '69', '97', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(451, 'IP-SSAL000041', '2023-07-12', '2023-07-12 07:07 PM', '69', '97', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(452, 'IP-SSAL000030', '2023-07-12', '2023-07-12 09:45 PM', '84', '98', '92', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(453, 'IP-SSAL000031', '2023-07-12', '2023-07-12 09:45 PM', '84', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(454, 'IP-SSAL000032', '2023-07-12', '2023-07-12 09:47 PM', '82', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(455, 'IP-SSAL000033', '2023-07-12', '2023-07-12 09:49 PM', '84', '98', '92', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(456, 'IP-SSAL000034', '2023-07-12', '2023-07-12 09:54 PM', '84', '98', '92', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(457, 'IP-SSAL000035', '2023-07-12', '2023-07-12 09:55 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(458, 'IP-SSAL000036', '2023-07-12', '2023-07-12 09:57 PM', '84', '98', '95', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(459, 'IP-SSAL000037', '2023-07-12', '2023-07-12 09:59 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(460, 'IP-SSAL000038', '2023-07-12', '2023-07-12 10:01 PM', '84', '96', '95', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(461, 'IP-SSAL000039', '2023-07-12', '2023-07-12 10:02 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(462, 'IP-SSAL000040', '2023-07-12', '2023-07-12 10:03 PM', '84', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(463, 'IP-SSAL000041', '2023-07-13', '2023-07-13 12:53 AM', '77', '98', '99', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(464, 'IP-SSAL000042', '2023-07-12', '2023-07-12 10:00 PM', '84', '98', '97', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(465, 'IP-SSAL000043', '2023-07-12', '2023-07-12 10:03 PM', '88', '91', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(466, 'IP-SSAL000044', '2023-07-12', '2023-07-12 10:15 PM', '75', '97', '99', '', '120/80', '12', NULL, NULL, '', '00032', 0),
(467, 'IP-SSAL000045', '2023-07-12', '2023-07-12 10:30 PM', '75', '95', '98', '', '120/80', '12', NULL, NULL, '', '00032', 0),
(468, 'IP-SSAL000046', '2023-07-12', '2023-07-12 10:40 PM', '88', '97', '95', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(469, 'IP-SSAL000047', '2023-07-12', '2023-07-12 10:46 PM', '75', '96', '97', '', '130/80', '15', NULL, NULL, '', '00032', 0),
(470, 'IP-SSAL000048', '2023-07-12', '2023-07-12 10:00 PM', '94', '97', '98', '', '140/80', '12', NULL, NULL, '', '00032', 0),
(471, 'IP-SSAL000049', '2023-07-12', '2023-07-12 10:50 PM', '88', '97', '98', '', '140/80', '12', NULL, NULL, '', '00032', 0),
(472, 'IP-SSAL000050', '2023-07-12', '2023-07-12 10:55 PM', '75', '95', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(473, 'IP-SSAL000051', '2023-07-12', '2023-07-12 11:00 PM', '77', '97', '98', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(474, 'IP-SSAL000054', '2023-07-12', '2023-07-12 11:15 PM', '80', '97', '98', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(475, 'IP-SSAL000055', '2023-07-12', '2023-07-12 11:17 PM', '85', '98', '99', '', '140/80', '14', NULL, NULL, '', '00032', 0),
(476, 'IP-SSAL000056', '2023-07-12', '2023-07-12 11:20 PM', '77', '98', '96', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(477, 'IP-SSAL000058', '2023-07-12', '2023-07-12 11:25 PM', '80', '94', '98', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(478, 'IP-SSAL000036', '2023-07-13', '2023-07-13 09:23 AM', '72', '98', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(479, 'IP-SSAL000036', '2023-07-13', '2023-07-13 09:23 AM', '72', '98', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(480, 'IP-SSAL000034', '2023-07-13', '2023-07-13 09:27 AM', '82', '97', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(481, 'IP-SSAL000035', '2023-07-13', '2023-07-13 09:30 AM', '72', '96', '98', '', '120/80', '18', NULL, NULL, '', '00035', 0),
(482, 'IP-SSAL000040', '2023-07-13', '2023-07-13 09:32 AM', '50', '96', '98', '', '150/80', '16', NULL, NULL, '', '00035', 0),
(483, 'IP-SSAL000031', '2023-07-13', '2023-07-13 09:34 AM', '75', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(484, 'IP-SSAL000032', '2023-07-13', '2023-07-13 09:36 AM', '84', '97', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(485, 'IP-SSAL000037', '2023-07-13', '2023-07-13 09:37 AM', '75', '96', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(486, 'IP-SSAL000030', '2023-07-13', '2023-07-13 09:39 AM', '75', '95', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(487, 'IP-SSAL000038', '2023-07-13', '2023-07-13 09:41 AM', '80', '98', '98', '', '110/80', '15', NULL, NULL, '', '00035', 0),
(488, 'IP-SSAL000039', '2023-07-13', '2023-07-13 09:55 AM', '82', '98', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(489, 'IP-SSAL000033', '2023-07-13', '2023-07-13 09:57 AM', '84', '98', '98', '', '150/80', '15', NULL, NULL, '', '00035', 0),
(490, 'IP-SSAL000046', '2023-07-13', '2023-07-13 05:12 PM', '76', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(491, 'IP-SSAL000047', '2023-07-13', '2023-07-13 05:15 PM', '76', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(492, 'IP-SSAL000047', '2023-07-13', '2023-07-13 05:15 PM', '76', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(493, 'IP-SSAL000059', '2023-07-13', '2023-07-13 05:21 PM', '82', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(494, 'IP-SSAL000045', '2023-07-13', '2023-07-13 05:24 PM', '76', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(495, 'IP-SSAL000042', '2023-07-13', '2023-07-13 05:27 PM', '76', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(496, 'IP-SSAL000043', '2023-07-13', '2023-07-13 05:31 PM', '72', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(497, 'IP-SSAL000043', '2023-07-13', '2023-07-13 05:31 PM', '72', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(498, 'IP-SSAL000044', '2023-07-13', '2023-07-13 05:36 PM', '76', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(499, 'IP-SSAL000044', '2023-07-13', '2023-07-13 05:36 PM', '76', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(500, 'IP-SSAL000041', '2023-07-13', '2023-07-13 05:39 PM', '67', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(501, 'IP-SSAL000041', '2023-07-13', '2023-07-13 05:39 PM', '67', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(502, 'IP-SSAL000058', '2023-07-13', '2023-07-13 05:41 PM', '60', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(503, 'IP-SSAL000058', '2023-07-13', '2023-07-13 05:41 PM', '60', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(504, 'IP-SSAL000055', '2023-07-13', '2023-07-13 05:44 PM', '75', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(505, 'IP-SSAL000050', '2023-07-13', '2023-07-13 05:48 PM', '62', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(506, 'IP-SSAL000050', '2023-07-13', '2023-07-13 05:48 PM', '62', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(507, 'IP-SSAL000051', '2023-07-13', '2023-07-13 05:53 PM', '84', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(508, 'IP-SSAL000048', '2023-07-13', '2023-07-13 05:58 PM', '111', '97', '94', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(509, 'IP-SSAL000056', '2023-07-13', '2023-07-13 06:01 PM', '88', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(510, 'IP-SSAL000054', '2023-07-13', '2023-07-13 06:07 PM', '65', '96', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(511, 'IP-SSAL000049', '2023-07-13', '2023-07-13 06:09 PM', '80', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(512, 'IP-SSAL000030', '2023-07-13', '2023-07-13 09:54 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(513, 'IP-SSAL000031', '2023-07-13', '2023-07-13 09:55 PM', '84', '96', '92', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(514, 'IP-SSAL000032', '2023-07-13', '2023-07-13 10:05 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(515, 'IP-SSAL000033', '2023-07-13', '2023-07-13 10:06 PM', '82', '98', '95', 'Na ', '130/80', '16', NULL, NULL, 'NA', '00025', 0),
(516, 'IP-SSAL000034', '2023-07-13', '2023-07-13 10:07 PM', '84', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(517, 'IP-SSAL000035', '2023-07-13', '2023-07-13 10:08 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(518, 'IP-SSAL000036', '2023-07-13', '2023-07-13 10:09 PM', '84', '96', '95', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(519, 'IP-SSAL000037', '2023-07-13', '2023-07-13 10:10 PM', '84', '98', '95', 'Na ', '140/80', '16', NULL, NULL, 'NA', '00025', 0),
(520, 'IP-SSAL000038', '2023-07-13', '2023-07-13 10:12 PM', '82', '96', '95', 'Na ', '110/70', '16', NULL, NULL, 'NA', '00025', 0),
(521, 'IP-SSAL000039', '2023-07-13', '2023-07-13 10:12 PM', '80', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(522, 'IP-SSAL000040', '2023-07-13', '2023-07-13 10:14 PM', '82', '96', '95', 'Na ', '140/80', '16', NULL, NULL, 'NA', '00025', 0),
(523, 'IP-SSAL000041', '2023-07-13', '2023-07-13 10:14 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(524, 'IP-SSAL000042', '2023-07-13', '2023-07-13 10:17 PM', '82', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(525, 'IP-SSAL000043', '2023-07-13', '2023-07-13 10:19 PM', '84', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(526, 'IP-SSAL000044', '2023-07-13', '2023-07-13 10:20 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(527, 'IP-SSAL000045', '2023-07-13', '2023-07-13 10:23 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(528, 'IP-SSAL000046', '2023-07-13', '2023-07-13 10:25 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(529, 'IP-SSAL000047', '2023-07-13', '2023-07-13 10:37 PM', '84', '96', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(530, 'IP-SSAL000048', '2023-07-13', '2023-07-13 10:39 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(531, 'IP-SSAL000049', '2023-07-13', '2023-07-13 10:40 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(532, 'IP-SSAL000050', '2023-07-13', '2023-07-13 10:41 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(533, 'IP-SSAL000051', '2023-07-13', '2023-07-13 10:43 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(534, 'IP-SSAL000054', '2023-07-13', '2023-07-13 10:46 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(535, 'IP-SSAL000055', '2023-07-13', '2023-07-13 10:47 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(536, 'IP-SSAL000058', '2023-07-13', '2023-07-13 10:49 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(537, 'IP-SSAL000059', '2023-07-13', '2023-07-13 10:50 PM', '82', '98', '95', 'Na ', '120/80', '16', NULL, NULL, '', '00025', 0),
(538, 'IP-SSAL000034', '2023-07-14', '2023-07-14 08:02 AM', '85', '96', '96', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(539, 'IP-SSAL000035', '2023-07-14', '2023-07-14 08:09 AM', '76', '96', '98', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(540, 'IP-SSAL000033', '2023-07-14', '2023-07-14 12:26 PM', '72', '98', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(541, 'IP-SSAL000037', '2023-07-14', '2023-07-14 08:01 AM', '72', '97', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(542, 'IP-SSAL000032', '2023-07-14', '2023-07-14 12:33 PM', '79', '96', '98', '', '130/70', '18', NULL, NULL, '', '00035', 0),
(543, 'IP-SSAL000031', '2023-07-14', '2023-07-14 12:35 PM', '75', '95', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(544, 'IP-SSAL000040', '2023-07-14', '2023-07-14 08:08 AM', '56', '97', '96', '', '160/80', '16', NULL, NULL, '', '00035', 0),
(545, 'IP-SSAL000038', '2023-07-14', '2023-07-14 12:40 PM', '82', '98', '96', '', '110/70', '16', NULL, NULL, '', '00035', 0),
(546, 'IP-SSAL000030', '2023-07-14', '2023-07-14 12:42 PM', '72', '95', '98', '', '120/80', '18', NULL, NULL, '', '00035', 0),
(547, 'IP-SSAL000039', '2023-07-14', '2023-07-14 12:43 PM', '82', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(548, 'IP-SSAL000042', '2023-07-14', '2023-07-14 01:28 PM', '62', '98', '98', 'Na', '100/80', '16', NULL, NULL, 'Na', '00033', 0),
(549, 'IP-SSAL000044', '2023-07-14', '2023-07-14 01:29 PM', '75', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(550, 'IP-SSAL000041', '2023-07-14', '2023-07-14 01:31 PM', '70', '97', '98', 'Na', '100/80', '16', NULL, NULL, 'Na', '00033', 0),
(551, 'IP-SSAL000043', '2023-07-14', '2023-07-14 01:33 PM', '76', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(552, 'IP-SSAL000055', '2023-07-14', '2023-07-14 01:35 PM', '72', '96', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(553, 'IP-SSAL000045', '2023-07-14', '2023-07-14 01:37 PM', '75', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(554, 'IP-SSAL000058', '2023-07-14', '2023-07-14 01:39 PM', '78', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(555, 'IP-SSAL000051', '2023-07-14', '2023-07-14 01:42 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(556, 'IP-SSAL000050', '2023-07-14', '2023-07-14 01:44 PM', '67', '96', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(557, 'IP-SSAL000048', '2023-07-14', '2023-07-14 01:47 PM', '129', '97', '95', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(558, 'IP-SSAL000049', '2023-07-14', '2023-07-14 01:49 PM', '64', '97', '93', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(559, 'IP-SSAL000054', '2023-07-14', '2023-07-14 01:52 PM', '82', '96', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(560, 'IP-SSAL000047', '2023-07-14', '2023-07-14 01:54 PM', '80', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(561, 'IP-SSAL000046', '2023-07-14', '2023-07-14 01:56 PM', '70', '96', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(562, 'IP-SSAL000056', '2023-07-14', '2023-07-14 01:58 PM', '75', '97', '95', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(563, 'IP-SSAL000059', '2023-07-14', '2023-07-14 02:00 PM', '97', '97', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(564, 'IP-SSAL000030', '2023-07-14', '2023-07-14 09:53 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(565, 'IP-SSAL000031', '2023-07-14', '2023-07-14 09:56 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(566, 'IP-SSAL000032', '2023-07-14', '2023-07-14 09:56 PM', '82', '96', '93', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(567, 'IP-SSAL000033', '2023-07-14', '2023-07-14 09:59 PM', '84', '96', '92', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(568, 'IP-SSAL000034', '2023-07-14', '2023-07-14 10:00 PM', '80', '98', '92', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(569, 'IP-SSAL000035', '2023-07-14', '2023-07-14 10:02 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(570, 'IP-SSAL000036', '2023-07-14', '2023-07-14 10:02 PM', '84', '96', '95', 'Na ', '120/80', '16', NULL, NULL, 'NA', '00025', 0),
(571, 'IP-SSAL000037', '2023-07-14', '2023-07-14 10:04 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(572, 'IP-SSAL000038', '2023-07-14', '2023-07-14 10:12 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(573, 'IP-SSAL000040', '2023-07-14', '2023-07-14 10:15 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(574, 'IP-SSAL000054', '2023-07-14', '2023-07-14 10:42 PM', '80', '98', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(575, 'IP-SSAL000046', '2023-07-14', '2023-07-14 10:44 PM', '79', '98', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(576, 'IP-SSAL000059', '2023-07-14', '2023-07-14 10:45 PM', '96', '98', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(577, 'IP-SSAL000048', '2023-07-14', '2023-07-14 10:47 PM', '75', '98', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(578, 'IP-SSAL000051', '2023-07-14', '2023-07-14 10:48 PM', '80', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(579, 'IP-SSAL000049', '2023-07-14', '2023-07-14 10:49 PM', '80', '98', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(580, 'IP-SSAL000050', '2023-07-14', '2023-07-14 10:51 PM', '80', '98', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(581, 'IP-SSAL000047', '2023-07-14', '2023-07-14 10:52 PM', '80', '98', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(582, 'IP-SSAL000056', '2023-07-14', '2023-07-14 10:54 PM', '88', '98', '96', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(583, 'IP-SSAL000041', '2023-07-14', '2023-07-14 10:56 PM', '88', '95', '97', '', '120/80', '17', NULL, NULL, '', '00032', 0),
(584, 'IP-SSAL000044', '2023-07-14', '2023-07-14 10:57 PM', '83', '95', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(585, 'IP-SSAL000042', '2023-07-14', '2023-07-14 10:59 PM', '77', '97', '97', '', '110/80', '15', NULL, NULL, '', '00032', 0),
(586, 'IP-SSAL000043', '2023-07-14', '2023-07-14 11:01 PM', '87', '95', '96', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(587, 'IP-SSAL000055', '2023-07-14', '2023-07-14 11:02 PM', '88', '97', '99', '', '140/80', '15', NULL, NULL, '', '00032', 0),
(588, 'IP-SSAL000045', '2023-07-14', '2023-07-14 11:03 PM', '79', '96', '97', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(589, 'IP-SSAL000058', '2023-07-14', '2023-07-14 11:04 PM', '80', '95', '99', '', '130/80', '13', NULL, NULL, '', '00032', 0),
(590, 'IP-SSAL000036', '2023-07-15', '2023-07-15 08:28 AM', '72', '98', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(591, 'IP-SSAL000034', '2023-07-15', '2023-07-15 10:30 AM', '80', '96', '97', '', '120/80', '15', NULL, NULL, '44.7', '00035', 0),
(592, 'IP-SSAL000035', '2023-07-15', '2023-07-15 08:32 AM', '72', '98', '98', '', '110/80', '16', NULL, NULL, '42.2', '00035', 0),
(593, 'IP-SSAL000033', '2023-07-15', '2023-07-15 11:28 AM', '75', '96', '97', '', '130/70', '16 ', NULL, NULL, '63.1', '00035', 0),
(594, 'IP-SSAL000037', '2023-07-15', '2023-07-15 08:00 AM', '82', '96', '98', '', '140/70', '15', NULL, NULL, '44.7', '00035', 0),
(595, 'IP-SSAL000032', '2023-07-15', '2023-07-15 08:33 AM', '82', '98', '97', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(596, 'IP-SSAL000039', '2023-07-15', '2023-07-15 08:36 AM', '82', '97', '98', '', '120/70', '15', NULL, NULL, '47.2', '00035', 0),
(597, 'IP-SSAL000031', '2023-07-15', '2023-07-15 08:39 AM', '58', '95', '98', '', '150/80', '15', NULL, NULL, '71.2', '00035', 0),
(598, 'IP-SSAL000031', '2023-07-15', '2023-07-15 08:41 AM', '80', '97', '98', '', '120/70', '15', NULL, NULL, '53.4', '00035', 0),
(599, 'IP-SSAL000038', '2023-07-15', '2023-07-15 11:43 AM', '84', '96', '98', '', '110/70', '15', NULL, NULL, '33.2', '00035', 0),
(600, 'IP-SSAL000030', '2023-07-15', '2023-07-15 11:45 AM', '75', '97', '96', '', '130/70', '15', NULL, NULL, '53.4', '00035', 0),
(601, 'IP-SSAL000042', '2023-07-15', '2023-07-15 06:13 PM', '75', '97', '98', 'Na', '110/80', '16', NULL, NULL, '42.500', '00033', 0),
(602, 'IP-SSAL000043', '2023-07-15', '2023-07-15 06:16 PM', '75', '98', '99', 'Na', '120/80', '16', NULL, NULL, '64', '00033', 0),
(603, 'IP-SSAL000044', '2023-07-15', '2023-07-15 06:18 PM', '62', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(604, 'IP-SSAL000058', '2023-07-15', '2023-07-15 06:21 PM', '75', '97', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(605, 'IP-SSAL000045', '2023-07-15', '2023-07-15 06:23 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, '54.200', '00033', 0),
(606, 'IP-SSAL000041', '2023-07-15', '2023-07-15 06:25 PM', '75', '96', '98', 'Na', '120/80', '16', NULL, NULL, '52', '00033', 0),
(607, 'IP-SSAL000055', '2023-07-15', '2023-07-15 06:27 PM', '65', '96', '98', 'Na', '170/80', '16', NULL, NULL, '51.900', '00033', 0),
(608, 'IP-SSAL000049', '2023-07-15', '2023-07-15 06:31 PM', '82', '96', '96', 'Na', '120/80', '16', NULL, NULL, '43.900', '00033', 0),
(609, 'IP-SSAL000054', '2023-07-15', '2023-07-15 06:36 PM', '82', '98', '98', 'Na', '120/80', '16', NULL, NULL, '56', '00033', 0),
(610, 'IP-SSAL000047', '2023-07-15', '2023-07-15 06:38 PM', '73', '97', '93', 'Na', '130/80', '16', NULL, NULL, '71.600', '00033', 0),
(611, 'IP-SSAL000056', '2023-07-15', '2023-07-15 06:40 PM', '75', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(612, 'IP-SSAL000048', '2023-07-15', '2023-07-15 06:42 PM', '117', '96', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(613, 'IP-SSAL000059', '2023-07-15', '2023-07-15 06:44 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, '53', '00033', 0),
(614, 'IP-SSAL000046', '2023-07-15', '2023-07-15 08:02 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, '61.800', '00033', 0),
(615, 'IP-SSAL000050', '2023-07-15', '2023-07-15 08:05 PM', '73', '97', '99', 'Na', '130/80', '16', NULL, NULL, '64.500', '00033', 0),
(616, 'IP-SSAL000051', '2023-07-15', '2023-07-15 08:07 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, '53.500', '00033', 0),
(617, 'IP-SSAL000030', '2023-07-15', '2023-07-15 09:40 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(618, 'IP-SSAL000032', '2023-07-15', '2023-07-15 09:40 PM', '82', '96', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(619, 'IP-SSAL000033', '2023-07-15', '2023-07-15 09:43 PM', '84', '96', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(620, 'IP-SSAL000036', '2023-07-15', '2023-07-15 09:44 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(621, 'IP-SSAL000037', '2023-07-15', '2023-07-15 09:46 PM', '82', '96', '93', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(622, 'IP-SSAL000038', '2023-07-15', '2023-07-15 09:46 PM', '84', '96', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(623, 'IP-SSAL000039', '2023-07-15', '2023-07-15 09:48 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(624, 'IP-SSAL000040', '2023-07-15', '2023-07-15 09:49 PM', '84', '96', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(625, 'IP-SSAL000041', '2023-07-15', '2023-07-15 09:53 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(626, 'IP-SSAL000042', '2023-07-15', '2023-07-15 09:53 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(627, 'IP-SSAL000043', '2023-07-15', '2023-07-15 09:56 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(628, 'IP-SSAL000045', '2023-07-15', '2023-07-15 09:57 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(629, 'IP-SSAL000046', '2023-07-15', '2023-07-15 10:00 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(630, 'IP-SSAL000055', '2023-07-15', '2023-07-15 10:14 PM', '60', '95', '99', '', '150/80', '13', NULL, NULL, '', '00032', 0),
(631, 'IP-SSAL000044', '2023-07-15', '2023-07-15 10:16 PM', '88', '96', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(632, 'IP-SSAL000041', '2023-07-15', '2023-07-15 10:19 PM', '88', '97', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(633, 'IP-SSAL000058', '2023-07-15', '2023-07-15 10:22 PM', '84', '96', '96', '', '130/80', '12', NULL, NULL, '', '00032', 0),
(634, 'IP-SSAL000054', '2023-07-15', '2023-07-15 10:24 PM', '84', '96', '95', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(635, 'IP-SSAL000059', '2023-07-15', '2023-07-15 10:26 PM', '88', '96', '96', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(636, 'IP-SSAL000050', '2023-07-15', '2023-07-15 10:28 PM', '84', '96', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(637, 'IP-SSAL000047', '2023-07-15', '2023-07-15 10:29 PM', '88', '97', '95', '', '130/80', '15', NULL, NULL, '', '00032', 0),
(638, 'IP-SSAL000049', '2023-07-15', '2023-07-15 10:30 PM', '84', '97', '96', '', '130/80', '13', NULL, NULL, '', '00032', 0),
(639, 'IP-SSAL000048', '2023-07-15', '2023-07-15 10:32 PM', '77', '97', '96', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(640, 'IP-SSAL000056', '2023-07-15', '2023-07-15 10:33 PM', '88', '97', '95', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(641, 'IP-SSAL000038', '2023-07-16', '2023-07-16 10:47 AM', '82', '98', '98', '', '110/80', '15', NULL, NULL, '', '00035', 0),
(642, 'IP-SSAL000039', '2023-07-16', '2023-07-16 10:49 AM', '82', '97', '98', '', '120/80', '16 ', NULL, NULL, '48.1', '00035', 0),
(643, 'IP-SSAL000032', '2023-07-16', '2023-07-16 10:51 AM', '82', '98', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(644, 'IP-SSAL000040', '2023-07-16', '2023-07-16 10:53 AM', '59', '98', '98', '', '150/80', '16', NULL, NULL, '', '00035', 0),
(645, 'IP-SSAL000033', '2023-07-16', '2023-07-16 10:55 AM', '72', '98', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(646, 'IP-SSAL000030', '2023-07-16', '2023-07-16 10:57 AM', '72', '97', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(647, 'IP-SSAL000036', '2023-07-16', '2023-07-16 08:15 AM', '75', '97', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(648, 'IP-SSAL000037', '2023-07-16', '2023-07-16 11:02 AM', '82', '98', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(649, 'IP-SSAL000043', '2023-07-16', '2023-07-16 04:38 PM', '77', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(650, 'IP-SSAL000049', '2023-07-16', '2023-07-16 04:43 PM', '85', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(651, 'IP-SSAL000049', '2023-07-16', '2023-07-16 04:43 PM', '85', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(652, 'IP-SSAL000042', '2023-07-16', '2023-07-16 04:52 PM', '74', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(653, 'IP-SSAL000041', '2023-07-16', '2023-07-16 04:55 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(654, 'IP-SSAL000055', '2023-07-16', '2023-07-16 04:58 PM', '70', '97', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(655, 'IP-SSAL000055', '2023-07-16', '2023-07-16 04:58 PM', '70', '97', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(656, 'IP-SSAL000045', '2023-07-16', '2023-07-16 05:04 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(657, 'IP-SSAL000058', '2023-07-16', '2023-07-16 05:09 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(658, 'IP-SSAL000058', '2023-07-16', '2023-07-16 05:09 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(659, 'IP-SSAL000056', '2023-07-16', '2023-07-16 05:13 PM', '88', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(660, 'IP-SSAL000056', '2023-07-16', '2023-07-16 05:13 PM', '88', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(661, 'IP-SSAL000056', '2023-07-16', '2023-07-16 05:13 PM', '88', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(662, 'IP-SSAL000047', '2023-07-16', '2023-07-16 05:15 PM', '74', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(663, 'IP-SSAL000050', '2023-07-16', '2023-07-16 05:19 PM', '80', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(664, 'IP-SSAL000059', '2023-07-16', '2023-07-16 05:23 PM', '85', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(665, 'IP-SSAL000059', '2023-07-16', '2023-07-16 05:23 PM', '85', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(666, 'IP-SSAL000046', '2023-07-16', '2023-07-16 05:26 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(667, 'IP-SSAL000054', '2023-07-16', '2023-07-16 05:30 PM', '85', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(668, 'IP-SSAL000048', '2023-07-16', '2023-07-16 05:34 PM', '100', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(669, 'IP-SSAL000044', '2023-07-16', '2023-07-16 05:38 PM', '65', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(670, 'IP-SSAL000054', '2023-07-16', '2023-07-16 09:41 PM', '80', '98', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(671, 'IP-SSAL000056', '2023-07-16', '2023-07-16 09:44 PM', '85', '98', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(672, 'IP-SSAL000030', '2023-07-16', '2023-07-16 09:45 PM', '82', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(673, 'IP-SSAL000031', '2023-07-16', '2023-07-16 09:45 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(674, 'IP-SSAL000059', '2023-07-16', '2023-07-16 09:46 PM', '80', '98', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(675, 'IP-SSAL000032', '2023-07-16', '2023-07-16 09:47 PM', '80', '98', '92', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(676, 'IP-SSAL000033', '2023-07-16', '2023-07-16 09:47 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(677, 'IP-SSAL000046', '2023-07-16', '2023-07-16 09:47 PM', '84', '98', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(678, 'IP-SSAL000036', '2023-07-16', '2023-07-16 09:48 PM', '80', '96', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(679, 'IP-SSAL000050', '2023-07-16', '2023-07-16 09:49 PM', '82', '98', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(680, 'IP-SSAL000047', '2023-07-16', '2023-07-16 09:50 PM', '76', '98', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(681, 'IP-SSAL000037', '2023-07-16', '2023-07-16 09:50 PM', '80', '91', '92', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(682, 'IP-SSAL000038', '2023-07-16', '2023-07-16 09:50 PM', '82', '96', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(683, 'IP-SSAL000048', '2023-07-16', '2023-07-16 09:51 PM', '88', '98', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(684, 'IP-SSAL000039', '2023-07-16', '2023-07-16 09:52 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(685, 'IP-SSAL000049', '2023-07-16', '2023-07-16 09:53 PM', '86', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(686, 'IP-SSAL000040', '2023-07-16', '2023-07-16 09:53 PM', '75', '96', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(687, 'IP-SSAL000044', '2023-07-16', '2023-07-16 09:55 PM', '88', '97', '99', '', '110/80', '15', NULL, NULL, '', '00032', 0),
(688, 'IP-SSAL000041', '2023-07-16', '2023-07-16 09:55 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(689, 'IP-SSAL000042', '2023-07-16', '2023-07-16 09:56 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(690, 'IP-SSAL000043', '2023-07-16', '2023-07-16 09:57 PM', '88', '95', '96', '', '110/80', '12', NULL, NULL, '', '00032', 0),
(691, 'IP-SSAL000055', '2023-07-16', '2023-07-16 09:59 PM', '77', '91', '96', '', '150/80', '13', NULL, NULL, '', '00032', 0),
(692, 'IP-SSAL000058', '2023-07-16', '2023-07-16 10:01 PM', '88', '97', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(693, 'IP-SSAL000045', '2023-07-16', '2023-07-16 10:01 PM', '80', '97', '96', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(694, 'IP-SSAL000033', '2023-07-17', '2023-07-17 08:04 AM', '75', '98', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(695, 'IP-SSAL000036', '2023-07-17', '2023-07-17 10:55 AM', '80', '97', '97', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(696, 'IP-SSAL000032', '2023-07-17', '2023-07-17 08:27 AM', '82', '96', '97', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(697, 'IP-SSAL000040', '2023-07-17', '2023-07-17 08:31 AM', '58', '96', '96', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(698, 'IP-SSAL000038', '2023-07-17', '2023-07-17 08:36 AM', '80', '96', '97', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(699, 'IP-SSAL000030', '2023-07-17', '2023-07-17 11:40 AM', '75', '96', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(700, 'IP-SSAL000055', '2023-07-17', '2023-07-17 04:42 PM', '85', '97', '97', 'Na', '160/80', '16', NULL, NULL, 'Na', '00033', 0),
(701, 'IP-SSAL000055', '2023-07-17', '2023-07-17 04:43 PM', '85', '97', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(702, 'IP-SSAL000043', '2023-07-17', '2023-07-17 04:45 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(703, 'IP-SSAL000041', '2023-07-17', '2023-07-17 04:49 PM', '84', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(704, 'IP-SSAL000042', '2023-07-17', '2023-07-17 04:51 PM', '78', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(705, 'IP-SSAL000045', '2023-07-17', '2023-07-17 04:52 PM', '85', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(706, 'IP-SSAL000058', '2023-07-17', '2023-07-17 04:55 PM', '85', '96', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(707, 'IP-SSAL000044', '2023-07-17', '2023-07-17 04:57 PM', '72', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(708, 'IP-SSAL000056', '2023-07-17', '2023-07-17 05:04 PM', '75', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(709, 'IP-SSAL000054', '2023-07-17', '2023-07-17 05:11 PM', '82', '97', '97', 'Na', '110/80', '16', NULL, NULL, '55.900', '00033', 0),
(710, 'IP-SSAL000050', '2023-07-17', '2023-07-17 05:16 PM', '85', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(711, 'IP-SSAL000046', '2023-07-17', '2023-07-17 05:18 PM', '86', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(712, 'IP-SSAL000059', '2023-07-17', '2023-07-17 05:21 PM', '82', '97', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(713, 'IP-SSAL000047', '2023-07-17', '2023-07-17 05:23 PM', '75', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(714, 'IP-SSAL000048', '2023-07-17', '2023-07-17 05:26 PM', '112', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(715, 'IP-SSAL000049', '2023-07-17', '2023-07-17 05:30 PM', '84', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(716, 'IP-SSAL000049', '2023-07-17', '2023-07-17 05:30 PM', '84', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(717, 'IP-SSAL000049', '2023-07-17', '2023-07-17 05:30 PM', '84', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(718, 'IP-SSAL000049', '2023-07-17', '2023-07-17 05:30 PM', '84', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(719, 'IP-SSAL000030', '2023-07-17', '2023-07-17 10:18 PM', '84', '95', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(720, 'IP-SSAL000032', '2023-07-17', '2023-07-17 10:19 PM', '88', '96', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(721, 'IP-SSAL000033', '2023-07-17', '2023-07-17 10:20 PM', '88', '97', '96', '', '120/80', '12', NULL, NULL, '', '00032', 0),
(722, 'IP-SSAL000036', '2023-07-17', '2023-07-17 10:21 PM', '77', '91', '97', '', '130/80', '13', NULL, NULL, '', '00032', 0),
(723, 'IP-SSAL000037', '2023-07-17', '2023-07-17 10:22 PM', '88', '95', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(724, 'IP-SSAL000038', '2023-07-17', '2023-07-17 10:23 PM', '88', '96', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(725, 'IP-SSAL000039', '2023-07-17', '2023-07-17 10:25 PM', '88', '95', '99', '', '140/80', '12', NULL, NULL, '', '00032', 0),
(726, 'IP-SSAL000040', '2023-07-17', '2023-07-17 10:26 PM', '84', '97', '99', '', '140/80', '14', NULL, NULL, '', '00032', 0),
(727, 'IP-SSAL000041', '2023-07-17', '2023-07-17 10:27 PM', '88', '96', '99', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(728, 'IP-SSAL000042', '2023-07-17', '2023-07-17 10:28 PM', '84', '95', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(729, 'IP-SSAL000043', '2023-07-17', '2023-07-17 10:30 PM', '88', '96', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(730, 'IP-SSAL000044', '2023-07-17', '2023-07-17 10:31 PM', '88', '97', '98', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(731, 'IP-SSAL000045', '2023-07-17', '2023-07-17 10:33 PM', '88', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(732, 'IP-SSAL000046', '2023-07-17', '2023-07-17 10:34 PM', '88', '96', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(733, 'IP-SSAL000047', '2023-07-17', '2023-07-17 10:35 PM', '88', '96', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(734, 'IP-SSAL000048', '2023-07-17', '2023-07-17 10:36 PM', '100', '96', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(735, 'IP-SSAL000049', '2023-07-17', '2023-07-17 10:37 PM', '77', '96', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(736, 'IP-SSAL000050', '2023-07-17', '2023-07-17 10:39 PM', '88', '95', '98', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(737, 'IP-SSAL000054', '2023-07-17', '2023-07-17 10:40 PM', '88', '96', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(738, 'IP-SSAL000055', '2023-07-17', '2023-07-17 10:41 PM', '84', '97', '98', '', '140/80', '14', NULL, NULL, '', '00032', 0),
(739, 'IP-SSAL000056', '2023-07-17', '2023-07-17 10:42 PM', '84', '95', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(740, 'IP-SSAL000058', '2023-07-17', '2023-07-17 10:43 PM', '84', '95', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(741, 'IP-SSAL000059', '2023-07-17', '2023-07-17 10:44 PM', '84', '95', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(742, 'IP-SSAL000039', '2023-07-18', '2023-07-18 09:58 AM', '100', '96', '90', '', '120/80', '15', NULL, NULL, '48.1', '00035', 0),
(743, 'IP-SSAL000032', '2023-07-18', '2023-07-18 08:02 AM', '84', '96', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(744, 'IP-SSAL000040', '2023-07-18', '2023-07-18 08:04 AM', '60', '96', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(745, 'IP-SSAL000037', '2023-07-18', '2023-07-18 08:30 AM', '85', '96', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(746, 'IP-SSAL000038', '2023-07-18', '2023-07-18 09:08 AM', '80', '97', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(747, 'IP-SSAL000036', '2023-07-18', '2023-07-18 10:10 AM', '82', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(748, 'IP-SSAL000033', '2023-07-18', '2023-07-18 10:12 AM', '72', '98', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(749, 'IP-SSAL000030', '2023-07-18', '2023-07-18 10:13 AM', '82', '98', '97', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(750, 'IP-SSAL000046', '2023-07-18', '2023-07-18 01:19 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(751, 'IP-SSAL000054', '2023-07-18', '2023-07-18 01:22 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(752, 'IP-SSAL000059', '2023-07-18', '2023-07-18 01:33 PM', '85', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(753, 'IP-SSAL000056', '2023-07-18', '2023-07-18 01:37 PM', '82', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(754, 'IP-SSAL000048', '2023-07-18', '2023-07-18 01:40 PM', '94', '98', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(755, 'IP-SSAL000050', '2023-07-18', '2023-07-18 01:49 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(756, 'IP-SSAL000049', '2023-07-18', '2023-07-18 01:54 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(757, 'IP-SSAL000047', '2023-07-18', '2023-07-18 02:04 PM', '72', '98', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(758, 'IP-SSAL000044', '2023-07-18', '2023-07-18 02:08 PM', '82', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(759, 'IP-SSAL000041', '2023-07-18', '2023-07-18 02:10 PM', '85', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(760, 'IP-SSAL000041', '2023-07-18', '2023-07-18 02:10 PM', '85', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(761, 'IP-SSAL000042', '2023-07-18', '2023-07-18 02:13 PM', '82', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(762, 'IP-SSAL000055', '2023-07-18', '2023-07-18 02:15 PM', '82', '97', '98', 'Na', '160/80', '16', NULL, NULL, 'Na', '00033', 0),
(763, 'IP-SSAL000055', '2023-07-18', '2023-07-18 02:16 PM', '82', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(764, 'IP-SSAL000043', '2023-07-18', '2023-07-18 02:20 PM', '85', '98', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(765, 'IP-SSAL000058', '2023-07-18', '2023-07-18 02:30 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(766, 'IP-SSAL000058', '2023-07-18', '2023-07-18 02:30 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(767, 'IP-SSAL000030', '2023-07-18', '2023-07-18 10:29 PM', '88', '95', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(768, 'IP-SSAL000032', '2023-07-18', '2023-07-18 10:31 PM', '88', '95', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(769, 'IP-SSAL000033', '2023-07-18', '2023-07-18 10:31 PM', '77', '98', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(770, 'IP-SSAL000036', '2023-07-18', '2023-07-18 10:32 PM', '88', '99', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(771, 'IP-SSAL000037', '2023-07-18', '2023-07-18 10:33 PM', '77', '96', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(772, 'IP-SSAL000038', '2023-07-18', '2023-07-18 10:34 PM', '84', '98', '98', '', '100/80', '16', NULL, NULL, '', '00032', 0),
(773, 'IP-SSAL000039', '2023-07-18', '2023-07-18 10:35 PM', '77', '98', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(774, 'IP-SSAL000040', '2023-07-18', '2023-07-18 10:36 PM', '88', '97', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(775, 'IP-SSAL000041', '2023-07-18', '2023-07-18 10:37 PM', '88', '96', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(776, 'IP-SSAL000042', '2023-07-18', '2023-07-18 10:38 PM', '84', '96', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(777, 'IP-SSAL000043', '2023-07-18', '2023-07-18 10:39 PM', '88', '96', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(778, 'IP-SSAL000044', '2023-07-18', '2023-07-18 10:40 PM', '88', '98', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(779, 'IP-SSAL000045', '2023-07-18', '2023-07-18 10:42 PM', '88', '98', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(780, 'IP-SSAL000046', '2023-07-18', '2023-07-18 10:43 PM', '84', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(781, 'IP-SSAL000047', '2023-07-18', '2023-07-18 10:44 PM', '88', '98', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(782, 'IP-SSAL000048', '2023-07-18', '2023-07-18 10:45 PM', '84', '98', '96', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(783, 'IP-SSAL000049', '2023-07-18', '2023-07-18 10:46 PM', '88', '96', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0);
INSERT INTO `iop_vital_parameters` (`vital_id`, `iop_id`, `dDate`, `dDateTime`, `pulse_rate`, `temperature`, `spo2`, `height`, `bp`, `respiration`, `bsl_type`, `bsl`, `weight`, `cPreparedBy`, `InActive`) VALUES
(784, 'IP-SSAL000050', '2023-07-18', '2023-07-18 10:47 PM', '88', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(785, 'IP-SSAL000054', '2023-07-18', '2023-07-18 10:49 PM', '84', '95', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(786, 'IP-SSAL000055', '2023-07-18', '2023-07-18 10:51 PM', '88', '95', '98', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(787, 'IP-SSAL000058', '2023-07-18', '2023-07-18 10:55 PM', '84', '95', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(788, 'IP-SSAL000056', '2023-07-18', '2023-07-18 10:57 PM', '88', '96', '98', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(789, 'IP-SSAL000059', '2023-07-18', '2023-07-18 10:58 PM', '88', '95', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(790, 'IP-SSAL000036', '2023-07-19', '2023-07-19 08:15 AM', '85', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(791, 'IP-SSAL000037', '2023-07-19', '2023-07-19 10:55 AM', '78', '96', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(792, 'IP-SSAL000040', '2023-07-19', '2023-07-19 10:56 AM', '60', '96', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(793, 'IP-SSAL000038', '2023-07-19', '2023-07-19 08:58 AM', '84', '96', '97', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(794, 'IP-SSAL000039', '2023-07-19', '2023-07-19 11:00 AM', '76', '97', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(795, 'IP-SSAL000030', '2023-07-19', '2023-07-19 08:01 AM', '72', '97', '96', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(796, 'IP-SSAL000032', '2023-07-19', '2023-07-19 11:03 AM', '72', '97', '98', '', '130/80', '16 ', NULL, NULL, '', '00035', 0),
(797, 'IP-SSAL000054', '2023-07-19', '2023-07-19 06:44 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(798, 'IP-SSAL000049', '2023-07-19', '2023-07-19 06:46 PM', '85', '98', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(799, 'IP-SSAL000048', '2023-07-19', '2023-07-19 06:48 PM', '82', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(800, 'IP-SSAL000059', '2023-07-19', '2023-07-19 06:50 PM', '82', '96', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(801, 'IP-SSAL000047', '2023-07-19', '2023-07-19 06:52 PM', '75', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(802, 'IP-SSAL000046', '2023-07-19', '2023-07-19 06:53 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(803, 'IP-SSAL000050', '2023-07-19', '2023-07-19 06:55 PM', '83', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(804, 'IP-SSAL000056', '2023-07-19', '2023-07-19 06:56 PM', '85', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(805, 'IP-SSAL000058', '2023-07-19', '2023-07-19 06:58 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(806, 'IP-SSAL000043', '2023-07-19', '2023-07-19 07:01 PM', '84', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(807, 'IP-SSAL000042', '2023-07-19', '2023-07-19 07:02 PM', '85', '96', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(808, 'IP-SSAL000055', '2023-07-19', '2023-07-19 07:04 PM', '84', '97', '98', 'Na', '160/80', '16', NULL, NULL, 'Na', '00033', 0),
(809, 'IP-SSAL000041', '2023-07-19', '2023-07-19 07:06 PM', '82', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(810, 'IP-SSAL000044', '2023-07-19', '2023-07-19 07:09 PM', '85', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(811, 'IP-SSAL000045', '2023-07-19', '2023-07-19 07:13 PM', '83', '97', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(812, 'IP-SSAL000030', '2023-07-19', '2023-07-19 11:06 PM', '84', '96', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(813, 'IP-SSAL000032', '2023-07-19', '2023-07-19 11:08 PM', '88', '98', '97', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(814, 'IP-SSAL000033', '2023-07-19', '2023-07-19 11:09 PM', '84', '96', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(815, 'IP-SSAL000036', '2023-07-19', '2023-07-19 11:09 PM', '80', '98', '97', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(816, 'IP-SSAL000037', '2023-07-19', '2023-07-19 11:11 PM', '84', '96', '98', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(817, 'IP-SSAL000038', '2023-07-19', '2023-07-19 11:11 PM', '84', '95', '97', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(818, 'IP-SSAL000039', '2023-07-19', '2023-07-19 11:12 PM', '84', '96', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(819, 'IP-SSAL000040', '2023-07-19', '2023-07-19 11:13 PM', '88', '98', '97', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(820, 'IP-SSAL000041', '2023-07-19', '2023-07-19 11:14 PM', '88', '98', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(821, 'IP-SSAL000042', '2023-07-19', '2023-07-19 11:15 PM', '84', '98', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(822, 'IP-SSAL000043', '2023-07-19', '2023-07-19 11:16 PM', '80', '98', '96', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(823, 'IP-SSAL000044', '2023-07-19', '2023-07-19 11:17 PM', '84', '95', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(824, 'IP-SSAL000045', '2023-07-19', '2023-07-19 11:19 PM', '84', '95', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(825, 'IP-SSAL000046', '2023-07-19', '2023-07-19 11:20 PM', '84', '96', '97', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(826, 'IP-SSAL000047', '2023-07-19', '2023-07-19 11:21 PM', '80', '98', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(827, 'IP-SSAL000048', '2023-07-19', '2023-07-19 11:22 PM', '80', '95', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(828, 'IP-SSAL000049', '2023-07-19', '2023-07-19 11:24 PM', '88', '95', '97', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(829, 'IP-SSAL000050', '2023-07-19', '2023-07-19 11:25 PM', '77', '96', '98', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(830, 'IP-SSAL000051', '2023-07-19', '2023-07-19 11:26 PM', '84', '98', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(831, 'IP-SSAL000054', '2023-07-19', '2023-07-19 11:27 PM', '80', '96', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(832, 'IP-SSAL000055', '2023-07-19', '2023-07-19 11:28 PM', '84', '98', '96', '', '140/80', '16', NULL, NULL, '', '00032', 0),
(833, 'IP-SSAL000056', '2023-07-19', '2023-07-19 11:29 PM', '88', '96', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(834, 'IP-SSAL000058', '2023-07-19', '2023-07-19 11:30 PM', '88', '98', '96', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(835, 'IP-SSAL000059', '2023-07-19', '2023-07-19 11:32 PM', '88', '96', '98', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(836, 'IP-SSAL000036', '2023-07-20', '2023-07-20 08:30 AM', '75', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(837, 'IP-SSAL000033', '2023-07-20', '2023-07-20 08:24 AM', '75', '96', '97', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(838, 'IP-SSAL000037', '2023-07-20', '2023-07-20 02:26 PM', '72', '96', '98', '', '130/80', '16 ', NULL, NULL, '', '00035', 0),
(839, 'IP-SSAL000032', '2023-07-20', '2023-07-20 02:28 PM', '82', '96', '98', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(840, 'IP-SSAL000040', '2023-07-20', '2023-07-20 02:32 PM', '75', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(841, 'IP-SSAL000030', '2023-07-20', '2023-07-20 02:36 PM', '73', '98', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(842, 'IP-SSAL000038', '2023-07-20', '2023-07-20 02:38 PM', '82', '98', '96', '', '110/70', '16 ', NULL, NULL, '', '00035', 0),
(843, 'IP-SSAL000039', '2023-07-20', '2023-07-20 02:39 PM', '72', '96', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(844, 'IP-SSAL000054', '2023-07-20', '2023-07-20 06:37 PM', '85', '98', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(845, 'IP-SSAL000051', '2023-07-20', '2023-07-20 06:41 PM', '96', '96', '100', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(846, 'IP-SSAL000047', '2023-07-20', '2023-07-20 06:42 PM', '76', '96', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(847, 'IP-SSAL000046', '2023-07-20', '2023-07-20 06:45 PM', '86', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(848, 'IP-SSAL000059', '2023-07-20', '2023-07-20 06:47 PM', '85', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(849, 'IP-SSAL000049', '2023-07-20', '2023-07-20 06:48 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(850, 'IP-SSAL000048', '2023-07-20', '2023-07-20 06:50 PM', '84', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(851, 'IP-SSAL000050', '2023-07-20', '2023-07-20 06:52 PM', '84', '98', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(852, 'IP-SSAL000056', '2023-07-20', '2023-07-20 06:54 PM', '79', '96', '97', 'Na', '100/70', '16', NULL, NULL, 'Na', '00033', 0),
(853, 'IP-SSAL000058', '2023-07-20', '2023-07-20 06:57 PM', '84', '98', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(854, 'IP-SSAL000041', '2023-07-20', '2023-07-20 07:02 PM', '85', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(855, 'IP-SSAL000055', '2023-07-20', '2023-07-20 07:03 PM', '82', '98', '97', 'Na', '150/80', '16', NULL, NULL, 'Na', '00033', 0),
(856, 'IP-SSAL000042', '2023-07-20', '2023-07-20 07:07 PM', '82', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(857, 'IP-SSAL000043', '2023-07-20', '2023-07-20 07:08 PM', '86', '98', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(858, 'IP-SSAL000045', '2023-07-20', '2023-07-20 07:10 PM', '85', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(859, 'IP-SSAL000044', '2023-07-20', '2023-07-20 07:12 PM', '84', '98', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(860, 'IP-SSAL000039', '2023-07-21', '2023-07-21 11:19 PM', '82', '98', '92', '', '120/80', '', NULL, NULL, '', '00025', 0),
(861, 'IP-SSAL000036', '2023-07-21', '2023-07-21 11:21 PM', '79', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(862, 'IP-SSAL000037', '2023-07-21', '2023-07-21 11:29 PM', '84', '96', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(863, 'IP-SSAL000038', '2023-07-21', '2023-07-21 11:30 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(864, 'IP-SSAL000040', '2023-07-21', '2023-07-21 11:37 PM', '84', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(865, 'IP-SSAL000041', '2023-07-21', '2023-07-21 11:37 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(866, 'IP-SSAL000042', '2023-07-21', '2023-07-21 11:40 PM', '80', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(867, 'IP-SSAL000043', '2023-07-21', '2023-07-21 11:41 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(868, 'IP-SSAL000030', '2023-07-22', '2023-07-22 04:24 PM', '84', '98', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(869, 'IP-SSAL000031', '2023-07-22', '2023-07-22 04:26 PM', '88', '98', '97', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(870, 'IP-SSAL000032', '2023-07-22', '2023-07-22 04:29 PM', '88', '98', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(871, 'IP-SSAL000033', '2023-07-22', '2023-07-22 04:29 PM', '84', '96', '97', '', '120/80', '15', NULL, NULL, '', '00032', 0),
(872, 'IP-SSAL000039', '2023-07-22', '2023-07-22 04:31 PM', '112', '96', '100', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(873, 'IP-SSAL000036', '2023-07-22', '2023-07-22 04:32 PM', '88', '96', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(874, 'IP-SSAL000037', '2023-07-22', '2023-07-22 04:34 PM', '77', '98', '96', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(875, 'IP-SSAL000038', '2023-07-22', '2023-07-22 04:51 PM', '84', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(876, 'IP-SSAL000040', '2023-07-22', '2023-07-22 04:53 PM', '84', '95', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(877, 'IP-SSAL000036', '2023-07-22', '2023-07-22 10:22 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(878, 'IP-SSAL000037', '2023-07-22', '2023-07-22 10:24 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(879, 'IP-SSAL000038', '2023-07-22', '2023-07-22 10:28 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(880, 'IP-SSAL000040', '2023-07-22', '2023-07-22 10:30 PM', '84', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(881, 'IP-SSAL000041', '2023-07-22', '2023-07-22 10:31 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(882, 'IP-SSAL000042', '2023-07-22', '2023-07-22 10:32 PM', '80', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(883, 'IP-SSAL000043', '2023-07-22', '2023-07-22 10:34 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(884, 'IP-SSAL000044', '2023-07-22', '2023-07-22 10:37 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(885, 'IP-SSAL000045', '2023-07-22', '2023-07-22 10:38 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(886, 'IP-SSAL000051', '2023-07-22', '2023-07-22 10:39 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(887, 'IP-SSAL000050', '2023-07-22', '2023-07-22 10:40 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(888, 'IP-SSAL000049', '2023-07-22', '2023-07-22 10:40 PM', '84', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(889, 'IP-SSAL000048', '2023-07-22', '2023-07-22 10:42 PM', '80', '96', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(890, 'IP-SSAL000047', '2023-07-22', '2023-07-22 10:42 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(891, 'IP-SSAL000046', '2023-07-22', '2023-07-22 10:43 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(892, 'IP-SSAL000054', '2023-07-22', '2023-07-22 10:43 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(893, 'IP-SSAL000055', '2023-07-22', '2023-07-22 10:44 PM', '80', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(894, 'IP-SSAL000056', '2023-07-22', '2023-07-22 10:44 PM', '80', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(895, 'IP-SSAL000058', '2023-07-22', '2023-07-22 10:51 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(896, 'IP-SSAL000059', '2023-07-22', '2023-07-22 10:51 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(897, 'IP-SSAL000030', '2023-07-22', '2023-07-22 10:55 PM', '80', '98', '92', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(898, 'IP-SSAL000032', '2023-07-22', '2023-07-22 10:55 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(899, 'IP-SSAL000033', '2023-07-22', '2023-07-22 10:56 PM', '80', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(900, 'IP-SSAL000039', '2023-07-22', '2023-07-22 10:56 PM', '80', '98', '92', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(901, 'IP-SSAL000041', '2023-07-23', '2023-07-23 04:03 PM', '80', '96', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(902, 'IP-SSAL000042', '2023-07-23', '2023-07-23 04:06 PM', '82', '96', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(903, 'IP-SSAL000043', '2023-07-23', '2023-07-23 04:08 PM', '75', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(904, 'IP-SSAL000045', '2023-07-23', '2023-07-23 04:10 PM', '85', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(905, 'IP-SSAL000051', '2023-07-23', '2023-07-23 04:12 PM', '85', '98', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(906, 'IP-SSAL000030', '2023-07-23', '2023-07-23 04:15 PM', '88', '98', '99', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(907, 'IP-SSAL000032', '2023-07-23', '2023-07-23 04:16 PM', '84', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(908, 'IP-SSAL000050', '2023-07-23', '2023-07-23 04:15 PM', '88', '98', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(909, 'IP-SSAL000033', '2023-07-23', '2023-07-23 04:17 PM', '77', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(910, 'IP-SSAL000049', '2023-07-23', '2023-07-23 04:18 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(911, 'IP-SSAL000047', '2023-07-23', '2023-07-23 04:22 PM', '75', '98', '99', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(912, 'IP-SSAL000039', '2023-07-23', '2023-07-23 04:18 PM', '88', '98', '96', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(913, 'IP-SSAL000036', '2023-07-23', '2023-07-23 04:32 PM', '80', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(914, 'IP-SSAL000037', '2023-07-23', '2023-07-23 04:33 PM', '77', '96', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(915, 'IP-SSAL000038', '2023-07-23', '2023-07-23 04:35 PM', '75', '98', '97', '', '130/80', '15', NULL, NULL, '', '00032', 0),
(916, 'IP-SSAL000040', '2023-07-23', '2023-07-23 04:37 PM', '80', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(917, 'IP-SSAL000046', '2023-07-23', '2023-07-23 04:37 PM', '80', '97', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(918, 'IP-SSAL000054', '2023-07-23', '2023-07-23 04:39 PM', '82', '98', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(919, 'IP-SSAL000055', '2023-07-23', '2023-07-23 04:41 PM', '82', '98', '97', 'Na', '150/80', '16', NULL, NULL, 'Na', '00033', 0),
(920, 'IP-SSAL000055', '2023-07-23', '2023-07-23 04:41 PM', '82', '98', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(921, 'IP-SSAL000056', '2023-07-23', '2023-07-23 04:43 PM', '75', '97', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(922, 'IP-SSAL000058', '2023-07-23', '2023-07-23 04:45 PM', '80', '96', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(923, 'IP-SSAL000059', '2023-07-23', '2023-07-23 04:47 PM', '85', '98', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(924, 'IP-SSAL000048', '2023-07-23', '2023-07-23 04:50 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(925, 'IP-SSAL000032', '2023-07-23', '2023-07-23 10:03 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(926, 'IP-SSAL000033', '2023-07-23', '2023-07-23 10:06 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(927, 'IP-SSAL000030', '2023-07-23', '2023-07-23 10:07 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(928, 'IP-SSAL000039', '2023-07-23', '2023-07-23 10:07 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(929, 'IP-SSAL000036', '2023-07-23', '2023-07-23 10:08 PM', '82', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(930, 'IP-SSAL000037', '2023-07-23', '2023-07-23 10:08 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(931, 'IP-SSAL000038', '2023-07-23', '2023-07-23 10:08 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(932, 'IP-SSAL000040', '2023-07-23', '2023-07-23 10:09 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(933, 'IP-SSAL000041', '2023-07-23', '2023-07-23 10:28 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(934, 'IP-SSAL000042', '2023-07-23', '2023-07-23 10:30 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(935, 'IP-SSAL000043', '2023-07-23', '2023-07-23 10:31 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(936, 'IP-SSAL000045', '2023-07-23', '2023-07-23 10:32 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(937, 'IP-SSAL000051', '2023-07-23', '2023-07-23 10:33 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(938, 'IP-SSAL000046', '2023-07-23', '2023-07-23 09:22 PM', '82', '96', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(939, 'IP-SSAL000054', '2023-07-23', '2023-07-23 09:25 PM', '72', '96', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(940, 'IP-SSAL000059', '2023-07-23', '2023-07-23 09:27 PM', '72', '96', '96', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(941, 'IP-SSAL000056', '2023-07-23', '2023-07-23 09:31 PM', '72', '96', '98', '', '110/80', '18', NULL, NULL, '', '00035', 0),
(942, 'IP-SSAL000048', '2023-07-23', '2023-07-23 09:34 AM', '72', '98', '97', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(943, 'IP-SSAL000050', '2023-07-23', '2023-07-23 10:36 PM', '82', '98', '96', '', '140/70', '16 ', NULL, NULL, '', '00035', 0),
(944, 'IP-SSAL000049', '2023-07-23', '2023-07-23 10:39 PM', '84', '98', '96', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(945, 'IP-SSAL000047', '2023-07-24', '2023-07-24 03:42 AM', '75', '98', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(946, 'IP-SSAL000051', '2023-07-23', '2023-07-23 09:44 PM', '75', '97', '90', '', '120/80', '18', NULL, NULL, '', '00035', 0),
(947, 'IP-SSAL000044', '2023-07-24', '2023-07-24 03:49 AM', '72', '97', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(948, 'IP-SSAL000055', '2023-07-23', '2023-07-23 09:52 PM', '72', '98', '96', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(949, 'IP-SSAL000030', '2023-07-24', '2023-07-24 02:26 PM', '88', '96', '97', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(950, 'IP-SSAL000032', '2023-07-24', '2023-07-24 02:27 PM', '88', '95', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(951, 'IP-SSAL000033', '2023-07-24', '2023-07-24 02:29 PM', '88', '95', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(952, 'IP-SSAL000039', '2023-07-24', '2023-07-24 02:31 PM', '90', '96', '99', '', '130/80', '16', NULL, NULL, '47.2', '00032', 0),
(953, 'IP-SSAL000036', '2023-07-24', '2023-07-24 02:32 PM', '77', '98', '96', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(954, 'IP-SSAL000037', '2023-07-24', '2023-07-24 02:34 PM', '84', '98', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(955, 'IP-SSAL000038', '2023-07-24', '2023-07-24 02:35 PM', '88', '96', '97', '', '100/80', '16', NULL, NULL, '', '00032', 0),
(956, 'IP-SSAL000040', '2023-07-24', '2023-07-24 02:36 PM', '84', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(957, 'IP-SSAL000041', '2023-07-24', '2023-07-24 05:10 PM', '80', '97', '100', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(958, 'IP-SSAL000045', '2023-07-24', '2023-07-24 05:15 PM', '83', '98', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(959, 'IP-SSAL000055', '2023-07-24', '2023-07-24 05:17 PM', '80', '97', '99', 'Na', '160/80', '16', NULL, NULL, 'Na', '00033', 0),
(960, 'IP-SSAL000055', '2023-07-24', '2023-07-24 05:18 PM', '80', '97', '99', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(961, 'IP-SSAL000042', '2023-07-24', '2023-07-24 05:21 PM', '84', '98', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(962, 'IP-SSAL000043', '2023-07-24', '2023-07-24 05:40 PM', '86', '96', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(963, 'IP-SSAL000049', '2023-07-24', '2023-07-24 05:46 PM', '84', '98', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(964, 'IP-SSAL000050', '2023-07-24', '2023-07-24 05:48 PM', '82', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(965, 'IP-SSAL000048', '2023-07-24', '2023-07-24 05:51 PM', '84', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(966, 'IP-SSAL000056', '2023-07-24', '2023-07-24 05:53 PM', '72', '96', '96', 'Na', '100/70', '16', NULL, NULL, 'Na', '00033', 0),
(967, 'IP-SSAL000046', '2023-07-24', '2023-07-24 05:55 PM', '85', '96', '95', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(968, 'IP-SSAL000059', '2023-07-24', '2023-07-24 05:57 PM', '84', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(969, 'IP-SSAL000054', '2023-07-24', '2023-07-24 05:59 PM', '80', '97', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(970, 'IP-SSAL000051', '2023-07-24', '2023-07-24 06:01 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(971, 'IP-SSAL000047', '2023-07-24', '2023-07-24 06:03 PM', '82', '96', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(972, 'IP-SSAL000030', '2023-07-24', '2023-07-24 09:27 PM', '84', '98', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(973, 'IP-SSAL000030', '2023-07-24', '2023-07-24 09:27 PM', '84', '98', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(974, 'IP-SSAL000032', '2023-07-24', '2023-07-24 09:57 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(975, 'IP-SSAL000033', '2023-07-24', '2023-07-24 09:58 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(976, 'IP-SSAL000033', '2023-07-24', '2023-07-24 09:58 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(977, 'IP-SSAL000039', '2023-07-24', '2023-07-24 09:58 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(978, 'IP-SSAL000036', '2023-07-24', '2023-07-24 09:59 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(979, 'IP-SSAL000037', '2023-07-24', '2023-07-24 09:59 PM', '82', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(980, 'IP-SSAL000038', '2023-07-24', '2023-07-24 10:00 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(981, 'IP-SSAL000040', '2023-07-24', '2023-07-24 10:00 PM', '84', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(982, 'IP-SSAL000041', '2023-07-24', '2023-07-24 10:01 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(983, 'IP-SSAL000042', '2023-07-24', '2023-07-24 10:01 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(984, 'IP-SSAL000043', '2023-07-24', '2023-07-24 10:02 PM', '80', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(985, 'IP-SSAL000045', '2023-07-24', '2023-07-24 10:02 PM', '80', '96', '93', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(986, 'IP-SSAL000051', '2023-07-24', '2023-07-24 10:02 PM', '80', '96', '93', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(987, 'IP-SSAL000060', '2023-07-24', '2023-07-24 10:03 PM', '82', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(988, 'IP-SSAL000046', '2023-07-24', '2023-07-24 11:19 PM', '72', '98', '97', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(989, 'IP-SSAL000054', '2023-07-24', '2023-07-24 11:20 PM', '82', '98', '96', '', '110/80', '16 ', NULL, NULL, '', '00035', 0),
(990, 'IP-SSAL000059', '2023-07-24', '2023-07-24 11:48 PM', '72', '98', '96', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(991, 'IP-SSAL000056', '2023-07-24', '2023-07-24 11:51 PM', '72', '96', '96', '', '100/80', '16 ', NULL, NULL, '', '00035', 0),
(992, 'IP-SSAL000048', '2023-07-24', '2023-07-24 11:53 PM', '82', '97', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(993, 'IP-SSAL000050', '2023-07-24', '2023-07-24 11:54 PM', '82', '96', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(994, 'IP-SSAL000049', '2023-07-24', '2023-07-24 11:58 PM', '82', '97', '98', '', '120/70', '18', NULL, NULL, '', '00035', 0),
(995, 'IP-SSAL000047', '2023-07-24', '2023-07-24 11:59 PM', '82', '98', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(996, 'IP-SSAL000044', '2023-07-24', '2023-07-24 11:03 PM', '72', '98', '96', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(997, 'IP-SSAL000058', '2023-07-24', '2023-07-24 11:18 PM', '82', '98', '96', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(998, 'IP-SSAL000055', '2023-07-24', '2023-07-24 11:20 PM', '82', '98', '96', '', '140/70', '16', NULL, NULL, '', '00035', 0),
(999, 'IP-SSAL000030', '2023-07-25', '2023-07-25 01:13 PM', '84', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1000, 'IP-SSAL000032', '2023-07-25', '2023-07-25 01:15 PM', '88', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1001, 'IP-SSAL000033', '2023-07-25', '2023-07-25 01:16 PM', '77', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1002, 'IP-SSAL000039', '2023-07-25', '2023-07-25 01:43 PM', '75', '96', '99', '', '120/80', '13', NULL, NULL, '48.4', '00032', 0),
(1003, 'IP-SSAL000036', '2023-07-25', '2023-07-25 03:26 PM', '88', '95', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1004, 'IP-SSAL000037', '2023-07-25', '2023-07-25 03:27 PM', '77', '98', '96', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1005, 'IP-SSAL000038', '2023-07-25', '2023-07-25 03:29 PM', '84', '96', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1006, 'IP-SSAL000040', '2023-07-25', '2023-07-25 03:30 PM', '80', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1007, 'IP-SSAL000046', '2023-07-25', '2023-07-25 05:13 PM', '88', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1008, 'IP-SSAL000047', '2023-07-25', '2023-07-25 05:18 PM', '83', '98', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1009, 'IP-SSAL000059', '2023-07-25', '2023-07-25 05:21 PM', '80', '95', '96', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1010, 'IP-SSAL000054', '2023-07-25', '2023-07-25 05:34 PM', '82', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1011, 'IP-SSAL000051', '2023-07-25', '2023-07-25 05:36 PM', '84', '96', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1012, 'IP-SSAL000050', '2023-07-25', '2023-07-25 05:38 PM', '84', '98', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1013, 'IP-SSAL000049', '2023-07-25', '2023-07-25 05:39 PM', '85', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1014, 'IP-SSAL000048', '2023-07-25', '2023-07-25 05:42 PM', '80', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1015, 'IP-SSAL000056', '2023-07-25', '2023-07-25 05:45 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1016, 'IP-SSAL000042', '2023-07-25', '2023-07-25 05:48 PM', '82', '96', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1017, 'IP-SSAL000043', '2023-07-25', '2023-07-25 05:50 PM', '82', '98', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1018, 'IP-SSAL000055', '2023-07-25', '2023-07-25 05:52 PM', '82', '96', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1019, 'IP-SSAL000041', '2023-07-25', '2023-07-25 05:54 PM', '84', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1020, 'IP-SSAL000058', '2023-07-25', '2023-07-25 05:56 PM', '82', '98', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1021, 'IP-SSAL000044', '2023-07-25', '2023-07-25 05:58 PM', '75', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1022, 'IP-SSAL000045', '2023-07-25', '2023-07-25 06:01 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1023, 'IP-SSAL000061', '2023-07-25', '2023-07-25 06:03 PM', '79', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1024, 'IP-SSAL000046', '2023-07-25', '2023-07-25 10:30 PM', '82', '98', '96', '', '120/80', '', NULL, NULL, '', '00035', 0),
(1025, 'IP-SSAL000054', '2023-07-25', '2023-07-25 10:32 PM', '82', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1026, 'IP-SSAL000059', '2023-07-25', '2023-07-25 10:34 PM', '72', '97', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1027, 'IP-SSAL000056', '2023-07-25', '2023-07-25 10:36 PM', '82', '96', '98', '', '110/80', '15', NULL, NULL, '', '00035', 0),
(1028, 'IP-SSAL000048', '2023-07-25', '2023-07-25 10:38 PM', '72', '98', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(1029, 'IP-SSAL000050', '2023-07-25', '2023-07-25 10:39 PM', '72', '98', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1030, 'IP-SSAL000049', '2023-07-25', '2023-07-25 10:41 PM', '72', '97', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1031, 'IP-SSAL000047', '2023-07-25', '2023-07-25 10:44 PM', '82', '98', '97', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1032, 'IP-SSAL000051', '2023-07-25', '2023-07-25 10:46 PM', '72', '96', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(1033, 'IP-SSAL000030', '2023-07-26', '2023-07-26 02:55 PM', '88', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1034, 'IP-SSAL000032', '2023-07-26', '2023-07-26 02:56 PM', '84', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1035, 'IP-SSAL000033', '2023-07-26', '2023-07-26 02:58 PM', '84', '98', '99', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(1036, 'IP-SSAL000039', '2023-07-26', '2023-07-26 02:59 PM', '88', '96', '97', '', '130/80', '16', NULL, NULL, '47.4', '00032', 0),
(1037, 'IP-SSAL000036', '2023-07-26', '2023-07-26 03:00 PM', '88', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1038, 'IP-SSAL000037', '2023-07-26', '2023-07-26 03:01 PM', '84', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1039, 'IP-SSAL000038', '2023-07-26', '2023-07-26 03:03 PM', '84', '96', '99', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(1040, 'IP-SSAL000040', '2023-07-26', '2023-07-26 03:04 PM', '84', '95', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1041, 'IP-SSAL000060', '2023-07-26', '2023-07-26 03:06 PM', '88', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1042, 'IP-SSAL000064', '2023-07-26', '2023-07-26 03:07 PM', '88', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1043, 'IP-SSAL000065', '2023-07-26', '2023-07-26 03:08 PM', '77', '95', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1044, 'IP-SSAL000048', '2023-07-26', '2023-07-26 04:15 PM', '82', '96', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1045, 'IP-SSAL000059', '2023-07-26', '2023-07-26 04:19 PM', '88', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1046, 'IP-SSAL000043', '2023-07-26', '2023-07-26 04:22 PM', '84', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1047, 'IP-SSAL000055', '2023-07-26', '2023-07-26 04:25 PM', '84', '98', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1048, 'IP-SSAL000045', '2023-07-26', '2023-07-26 04:35 PM', '84', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1049, 'IP-SSAL000049', '2023-07-26', '2023-07-26 04:37 PM', '84', '98', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1050, 'IP-SSAL000051', '2023-07-26', '2023-07-26 04:45 PM', '82', '98', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1051, 'IP-SSAL000051', '2023-07-26', '2023-07-26 04:45 PM', '82', '98', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1052, 'IP-SSAL000047', '2023-07-26', '2023-07-26 04:49 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1053, 'IP-SSAL000058', '2023-07-26', '2023-07-26 04:54 PM', '80', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1054, 'IP-SSAL000044', '2023-07-26', '2023-07-26 04:57 PM', '72', '95', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1055, 'IP-SSAL000042', '2023-07-26', '2023-07-26 05:01 PM', '86', '98', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1056, 'IP-SSAL000042', '2023-07-26', '2023-07-26 05:01 PM', '86', '98', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1057, 'IP-SSAL000041', '2023-07-26', '2023-07-26 05:07 PM', '82', '98', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1058, 'IP-SSAL000061', '2023-07-26', '2023-07-26 05:13 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1059, 'IP-SSAL000054', '2023-07-26', '2023-07-26 05:18 PM', '84', '98', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1060, 'IP-SSAL000062', '2023-07-26', '2023-07-26 05:20 PM', '85', '96', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1061, 'IP-SSAL000056', '2023-07-26', '2023-07-26 05:25 PM', '88', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1062, 'IP-SSAL000050', '2023-07-26', '2023-07-26 05:36 PM', '82', '97', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1063, 'IP-SSAL000046', '2023-07-26', '2023-07-26 05:39 PM', '84', '96', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1064, 'IP-SSAL000046', '2023-07-26', '2023-07-26 09:37 PM', '72', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1065, 'IP-SSAL000054', '2023-07-26', '2023-07-26 09:39 PM', '84', '96', '98', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(1066, 'IP-SSAL000062', '2023-07-26', '2023-07-26 09:41 PM', '82', '97', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(1067, 'IP-SSAL000059', '2023-07-26', '2023-07-26 09:43 PM', '72', '97', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(1068, 'IP-SSAL000056', '2023-07-26', '2023-07-26 09:45 PM', '82', '95', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(1069, 'IP-SSAL000048', '2023-07-26', '2023-07-26 09:46 PM', '72', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1070, 'IP-SSAL000050', '2023-07-26', '2023-07-26 09:48 PM', '72', '98', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1071, 'IP-SSAL000049', '2023-07-26', '2023-07-26 09:49 PM', '75', '96', '96', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1072, 'IP-SSAL000047', '2023-07-26', '2023-07-26 09:53 PM', '82', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1073, 'IP-SSAL000051', '2023-07-26', '2023-07-26 09:54 PM', '75', '98', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1074, 'IP-SSAL000044', '2023-07-26', '2023-07-26 09:57 PM', '72', '98', '96', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(1075, 'IP-SSAL000061', '2023-07-26', '2023-07-26 09:59 PM', '82', '98', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1076, 'IP-SSAL000041', '2023-07-26', '2023-07-26 10:01 PM', '72', '98', '96', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1077, 'IP-SSAL000030', '2023-07-26', '2023-07-26 10:04 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1078, 'IP-SSAL000042', '2023-07-26', '2023-07-26 10:05 PM', '72', '98', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(1079, 'IP-SSAL000032', '2023-07-26', '2023-07-26 10:05 PM', '80', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1080, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1081, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1082, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1083, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1084, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1085, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1086, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1087, 'IP-SSAL000033', '2023-07-26', '2023-07-26 10:06 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1088, 'IP-SSAL000055', '2023-07-26', '2023-07-26 10:07 PM', '72', '96', '98', '', '150/80', '16', NULL, NULL, '', '00035', 0),
(1089, 'IP-SSAL000039', '2023-07-26', '2023-07-26 10:08 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1090, 'IP-SSAL000043', '2023-07-26', '2023-07-26 10:08 PM', '72', '96', '96', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(1091, 'IP-SSAL000036', '2023-07-26', '2023-07-26 10:09 PM', '82', '98', '92', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(1092, 'IP-SSAL000037', '2023-07-26', '2023-07-26 10:10 PM', '82', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1093, 'IP-SSAL000038', '2023-07-26', '2023-07-26 10:10 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1094, 'IP-SSAL000040', '2023-07-26', '2023-07-26 10:12 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1095, 'IP-SSAL000061', '2023-07-26', '2023-07-26 10:13 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1096, 'IP-SSAL000060', '2023-07-26', '2023-07-26 10:14 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1097, 'IP-SSAL000065', '2023-07-26', '2023-07-26 10:15 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1098, 'IP-SSAL000064', '2023-07-26', '2023-07-26 10:17 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1099, 'IP-SSAL000062', '2023-07-27', '2023-07-27 05:43 PM', '72', '97', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1100, 'IP-SSAL000056', '2023-07-27', '2023-07-27 05:51 PM', '88', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1101, 'IP-SSAL000054', '2023-07-27', '2023-07-27 06:20 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, '56.300 kg', '00033', 0),
(1102, 'IP-SSAL000042', '2023-07-27', '2023-07-27 06:23 PM', '82', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1103, 'IP-SSAL000048', '2023-07-27', '2023-07-27 06:33 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1104, 'IP-SSAL000048', '2023-07-27', '2023-07-27 06:33 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1105, 'IP-SSAL000044', '2023-07-27', '2023-07-27 06:45 PM', '75', '98', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1106, 'IP-SSAL000043', '2023-07-27', '2023-07-27 06:53:45 PM', '82', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1107, 'IP-SSAL000041', '2023-07-27', '2023-07-27 06:57 PM', '84', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1108, 'IP-SSAL000058', '2023-07-27', '2023-07-27 07:02 PM', '75', '98', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1109, 'IP-SSAL000058', '2023-07-27', '2023-07-27 07:02 PM', '75', '98', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1110, 'IP-SSAL000059', '2023-07-27', '2023-07-27 07:12 PM', '82', '96', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1111, 'IP-SSAL000030', '2023-07-27', '2023-07-27 07:20 PM', '88', '96', '98', '', '110/80', '13', NULL, NULL, '', '00032', 0),
(1112, 'IP-SSAL000032', '2023-07-27', '2023-07-27 07:21 PM', '84', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1113, 'IP-SSAL000033', '2023-07-27', '2023-07-27 07:22 PM', '84', '98', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1114, 'IP-SSAL000039', '2023-07-27', '2023-07-27 07:23 PM', '84', '98', '97', '', '130/80', '16', NULL, NULL, '48.1', '00032', 0),
(1115, 'IP-SSAL000036', '2023-07-27', '2023-07-27 07:25 PM', '88', '98', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1116, 'IP-SSAL000055', '2023-07-27', '2023-07-27 07:26 PM', '85', '98', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1117, 'IP-SSAL000037', '2023-07-27', '2023-07-27 07:26 PM', '84', '96', '98', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1118, 'IP-SSAL000040', '2023-07-27', '2023-07-27 07:27 PM', '88', '96', '97', '', '120/80', '13', NULL, NULL, '', '00032', 0),
(1119, 'IP-SSAL000060', '2023-07-27', '2023-07-27 07:29 PM', '88', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1120, 'IP-SSAL000065', '2023-07-27', '2023-07-27 07:30 PM', '84', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1121, 'IP-SSAL000064', '2023-07-27', '2023-07-27 07:32 PM', '88', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1122, 'IP-SSAL000047', '2023-07-27', '2023-07-27 07:32 PM', '82', '96', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1123, 'IP-SSAL000049', '2023-07-27', '2023-07-27 07:38 PM', '75', '98', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1124, 'IP-SSAL000045', '2023-07-27', '2023-07-27 07:44 PM', '82', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1125, 'IP-SSAL000030', '2023-07-27', '2023-07-27 09:32 PM', '82', '98', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(1126, 'IP-SSAL000032', '2023-07-27', '2023-07-27 09:32 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1127, 'IP-SSAL000033', '2023-07-27', '2023-07-27 09:33 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1128, 'IP-SSAL000039', '2023-07-27', '2023-07-27 09:33 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1129, 'IP-SSAL000036', '2023-07-27', '2023-07-27 09:34 PM', '82', '98', '92', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(1130, 'IP-SSAL000037', '2023-07-27', '2023-07-27 09:34 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1131, 'IP-SSAL000040', '2023-07-27', '2023-07-27 09:35 PM', '80', '98', '92', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1132, 'IP-SSAL000060', '2023-07-27', '2023-07-27 09:37 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1133, 'IP-SSAL000064', '2023-07-27', '2023-07-27 09:37 PM', '84', '96', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1134, 'IP-SSAL000065', '2023-07-27', '2023-07-27 09:39 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1135, 'IP-SSAL000046', '2023-07-27', '2023-07-27 10:52 PM', '72', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1136, 'IP-SSAL000054', '2023-07-27', '2023-07-27 10:57 PM', '72', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1137, 'IP-SSAL000059', '2023-07-27', '2023-07-27 11:03 PM', '72', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1138, 'IP-SSAL000056', '2023-07-27', '2023-07-27 11:13 PM', '72', '98', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(1139, 'IP-SSAL000050', '2023-07-28', '2023-07-28 10:42 PM', '72', '96', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(1140, 'IP-SSAL000050', '2023-07-27', '2023-07-27 10:29 PM', '72', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1141, 'IP-SSAL000049', '2023-07-27', '2023-07-27 10:46 PM', '82', '96', '97', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(1142, 'IP-SSAL000047', '2023-07-27', '2023-07-27 11:00 PM', '72', '96', '97', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1143, 'IP-SSAL000051', '2023-07-27', '2023-07-27 11:09 PM', '72', '98', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1144, 'IP-SSAL000044', '2023-07-28', '2023-07-28 12:58 AM', '72', '96', '98', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(1145, 'IP-SSAL000061', '2023-07-27', '2023-07-27 11:15 PM', '72', '98', '96', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1146, 'IP-SSAL000045', '2023-07-27', '2023-07-27 11:30 PM', '82', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1147, 'IP-SSAL000041', '2023-07-28', '2023-07-28 01:05 AM', '72', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1148, 'IP-SSAL000042', '2023-07-28', '2023-07-28 01:07 AM', '72', '98', '98', '', '110/70', '16', NULL, NULL, '', '00035', 0),
(1149, 'IP-SSAL000055', '2023-07-28', '2023-07-28 01:10 AM', '72', '96', '96', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(1150, 'IP-SSAL000058', '2023-07-27', '2023-07-27 11:30 PM', '84', '96', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1151, 'IP-SSAL000043', '2023-07-27', '2023-07-27 11:13 PM', '82', '97', '96', '', '120/70', '16 ', NULL, NULL, '', '00035', 0),
(1152, 'IP-SSAL000030', '2023-07-28', '2023-07-28 08:42 AM', '84', '96', '99', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1153, 'IP-SSAL000032', '2023-07-28', '2023-07-28 08:43 AM', '88', '96', '97', '', '110/80', '15', NULL, NULL, '', '00032', 0),
(1154, 'IP-SSAL000033', '2023-07-28', '2023-07-28 08:43 AM', '88', '95', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1155, 'IP-SSAL000039', '2023-07-28', '2023-07-28 08:44 AM', '88', '95', '97', '', '120/80', '16', NULL, NULL, '48.4', '00032', 0),
(1156, 'IP-SSAL000036', '2023-07-28', '2023-07-28 08:44 AM', '88', '95', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1157, 'IP-SSAL000037', '2023-07-28', '2023-07-28 08:45 AM', '84', '98', '96', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1158, 'IP-SSAL000040', '2023-07-28', '2023-07-28 08:45 AM', '84', '96', '97', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(1159, 'IP-SSAL000060', '2023-07-28', '2023-07-28 08:46 AM', '88', '98', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1160, 'IP-SSAL000065', '2023-07-28', '2023-07-28 08:49 AM', '84', '96', '98', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1161, 'IP-SSAL000064', '2023-07-28', '2023-07-28 08:50 AM', '88', '96', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1162, 'IP-SSAL000041', '2023-07-28', '2023-07-28 01:50 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1163, 'IP-SSAL000041', '2023-07-28', '2023-07-28 01:50 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1164, 'IP-SSAL000043', '2023-07-28', '2023-07-28 02:33 PM', '82', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1165, 'IP-SSAL000045', '2023-07-28', '2023-07-28 02:41 PM', '84', '98', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1166, 'IP-SSAL000055', '2023-07-28', '2023-07-28 02:44 PM', '85', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1167, 'IP-SSAL000044', '2023-07-28', '2023-07-28 02:52 PM', '70', '96', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1168, 'IP-SSAL000058', '2023-07-28', '2023-07-28 02:54 PM', '82', '97', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1169, 'IP-SSAL000061', '2023-07-28', '2023-07-28 02:57 PM', '70', '98', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1170, 'IP-SSAL000042', '2023-07-28', '2023-07-28 02:59 PM', '85', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1171, 'IP-SSAL000056', '2023-07-28', '2023-07-28 03:01 PM', '85', '98', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1172, 'IP-SSAL000050', '2023-07-28', '2023-07-28 03:03 PM', '79', '98', '98', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1173, 'IP-SSAL000062', '2023-07-28', '2023-07-28 03:05 PM', '75', '98', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1174, 'IP-SSAL000060', '2023-07-28', '2023-07-28 03:06 PM', '79', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1175, 'IP-SSAL000049', '2023-07-28', '2023-07-28 03:08 PM', '72', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0);
INSERT INTO `iop_vital_parameters` (`vital_id`, `iop_id`, `dDate`, `dDateTime`, `pulse_rate`, `temperature`, `spo2`, `height`, `bp`, `respiration`, `bsl_type`, `bsl`, `weight`, `cPreparedBy`, `InActive`) VALUES
(1176, 'IP-SSAL000059', '2023-07-28', '2023-07-28 03:09 PM', '84', '97', '97', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1177, 'IP-SSAL000051', '2023-07-28', '2023-07-28 03:10 PM', '77', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1178, 'IP-SSAL000046', '2023-07-28', '2023-07-28 03:12 PM', '79', '96', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1179, 'IP-SSAL000047', '2023-07-28', '2023-07-28 03:12 PM', '88', '97', '99', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1180, 'IP-SSAL000054', '2023-07-28', '2023-07-28 03:15 PM', '85', '96', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1181, 'IP-SSAL000030', '2023-07-28', '2023-07-28 06:11 PM', '88', '98', '96', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1182, 'IP-SSAL000032', '2023-07-28', '2023-07-28 06:12 PM', '84', '96', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1183, 'IP-SSAL000033', '2023-07-28', '2023-07-28 06:12 PM', '84', '95', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1184, 'IP-SSAL000039', '2023-07-28', '2023-07-28 06:13 PM', '77', '96', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1185, 'IP-SSAL000036', '2023-07-28', '2023-07-28 06:14 PM', '75', '96', '97', '', '130/80', '14', NULL, NULL, '', '00032', 0),
(1186, 'IP-SSAL000037', '2023-07-28', '2023-07-28 06:14 PM', '77', '98', '96', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1187, 'IP-SSAL000040', '2023-07-28', '2023-07-28 06:15 PM', '80', '98', '96', '', '120/80', '14', NULL, NULL, '', '00032', 0),
(1188, 'IP-SSAL000065', '2023-07-28', '2023-07-28 06:15 PM', '88', '98', '96', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1189, 'IP-SSAL000064', '2023-07-28', '2023-07-28 06:16 PM', '84', '98', '96', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1190, 'IP-SSAL000060', '2023-07-28', '2023-07-28 06:17 PM', '77', '96', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1191, 'IP-SSAL000030', '2023-07-28', '2023-07-28 10:26 PM', '82', '96', NULL, '', '110/80', '16', NULL, '', '', '00023', 0),
(1192, 'IP-SSAL000030', '2023-07-28', '2023-07-28 11:39 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1193, 'IP-SSAL000032', '2023-07-28', '2023-07-28 11:42 PM', '80', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1194, 'IP-SSAL000033', '2023-07-28', '2023-07-28 11:42 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1195, 'IP-SSAL000039', '2023-07-28', '2023-07-28 11:43 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1196, 'IP-SSAL000036', '2023-07-28', '2023-07-28 11:43 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1197, 'IP-SSAL000037', '2023-07-28', '2023-07-28 11:43 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1198, 'IP-SSAL000040', '2023-07-28', '2023-07-28 11:44 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1199, 'IP-SSAL000041', '2023-07-28', '2023-07-28 11:44 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1200, 'IP-SSAL000042', '2023-07-28', '2023-07-28 11:44 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1201, 'IP-SSAL000043', '2023-07-28', '2023-07-28 11:45 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1202, 'IP-SSAL000044', '2023-07-28', '2023-07-28 11:45 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1203, 'IP-SSAL000045', '2023-07-28', '2023-07-28 11:45 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1204, 'IP-SSAL000051', '2023-07-28', '2023-07-28 11:46 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1205, 'IP-SSAL000050', '2023-07-28', '2023-07-28 11:46 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1206, 'IP-SSAL000049', '2023-07-28', '2023-07-28 11:47 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1207, 'IP-SSAL000048', '2023-07-28', '2023-07-28 11:47 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1208, 'IP-SSAL000047', '2023-07-28', '2023-07-28 11:47 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1209, 'IP-SSAL000046', '2023-07-28', '2023-07-28 11:47 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1210, 'IP-SSAL000054', '2023-07-28', '2023-07-28 11:48 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1211, 'IP-SSAL000055', '2023-07-28', '2023-07-28 11:50 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1212, 'IP-SSAL000056', '2023-07-28', '2023-07-28 11:50 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1213, 'IP-SSAL000058', '2023-07-28', '2023-07-28 11:50 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1214, 'IP-SSAL000059', '2023-07-28', '2023-07-28 11:52 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1215, 'IP-SSAL000062', '2023-07-28', '2023-07-28 11:53 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1216, 'IP-SSAL000061', '2023-07-28', '2023-07-28 11:53 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1217, 'IP-SSAL000060', '2023-07-28', '2023-07-28 11:53 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1218, 'IP-SSAL000064', '2023-07-28', '2023-07-28 11:54 PM', '84', '98', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(1219, 'IP-SSAL000065', '2023-07-28', '2023-07-28 11:54 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1220, 'IP-SSAL000030', '2023-07-29', '2023-07-29 08:49 AM', '88', '96', '98', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(1221, 'IP-SSAL000032', '2023-07-29', '2023-07-29 08:50 AM', '84', '96', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1222, 'IP-SSAL000033', '2023-07-29', '2023-07-29 08:50 AM', '88', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1223, 'IP-SSAL000039', '2023-07-29', '2023-07-29 08:50 AM', '84', '96', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1224, 'IP-SSAL000036', '2023-07-29', '2023-07-29 08:51 AM', '88', '98', '95', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1225, 'IP-SSAL000037', '2023-07-29', '2023-07-29 08:51 AM', '84', '96', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1226, 'IP-SSAL000040', '2023-07-29', '2023-07-29 08:52 AM', '88', '98', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1227, 'IP-SSAL000065', '2023-07-29', '2023-07-29 08:53 AM', '88', '97', '96', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1228, 'IP-SSAL000064', '2023-07-29', '2023-07-29 08:53 AM', '77', '96', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1229, 'IP-SSAL000060', '2023-07-29', '2023-07-29 08:54 AM', '80', '94', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1230, 'IP-SSAL000041', '2023-07-29', '2023-07-29 11:46 AM', '82', '96', '99', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1231, 'IP-SSAL000042', '2023-07-29', '2023-07-29 11:47 AM', '75', '97', '98', 'Na', '100/70', '16', NULL, NULL, 'Na', '00033', 0),
(1232, 'IP-SSAL000043', '2023-07-29', '2023-07-29 11:49 AM', '84', '98', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1233, 'IP-SSAL000044', '2023-07-29', '2023-07-29 11:49 AM', '70', '97', '96', 'Na', '100/70', '16', NULL, NULL, 'Na', '00033', 0),
(1234, 'IP-SSAL000045', '2023-07-29', '2023-07-29 11:50 AM', '88', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1235, 'IP-SSAL000051', '2023-07-29', '2023-07-29 11:51 AM', '84', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1236, 'IP-SSAL000050', '2023-07-29', '2023-07-29 11:58 AM', '85', '97', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1237, 'IP-SSAL000049', '2023-07-29', '2023-07-29 05:22 PM', '84', '96', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1238, 'IP-SSAL000048', '2023-07-29', '2023-07-29 05:23 PM', '75', '98', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1239, 'IP-SSAL000047', '2023-07-29', '2023-07-29 05:24 PM', '82', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1240, 'IP-SSAL000046', '2023-07-29', '2023-07-29 05:25 PM', '75', '98', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1241, 'IP-SSAL000054', '2023-07-29', '2023-07-29 05:26 PM', '70', '97', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1242, 'IP-SSAL000055', '2023-07-29', '2023-07-29 05:27 PM', '84', '96', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1243, 'IP-SSAL000056', '2023-07-29', '2023-07-29 05:29 PM', '79', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1244, 'IP-SSAL000056', '2023-07-29', '2023-07-29 05:29 PM', '79', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1245, 'IP-SSAL000058', '2023-07-29', '2023-07-29 05:30 PM', '75', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1246, 'IP-SSAL000059', '2023-07-29', '2023-07-29 05:33:02 PM', '82', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1247, 'IP-SSAL000062', '2023-07-29', '2023-07-29 05:34 PM', '75', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1248, 'IP-SSAL000061', '2023-07-29', '2023-07-29 05:37 PM', '85', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1249, 'IP-SSAL000046', '2023-07-29', '2023-07-29 10:02 PM', '82', '98', '96', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(1250, 'IP-SSAL000054', '2023-07-29', '2023-07-29 10:03 PM', '72', '97', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1251, 'IP-SSAL000062', '2023-07-29', '2023-07-29 10:04 PM', '72', '95', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1252, 'IP-SSAL000059', '2023-07-29', '2023-07-29 10:06 PM', '72', '96', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(1253, 'IP-SSAL000056', '2023-07-29', '2023-07-29 10:07 PM', '72', '98', '98', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(1254, 'IP-SSAL000048', '2023-07-29', '2023-07-29 10:09 PM', '72', '96', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(1255, 'IP-SSAL000050', '2023-07-29', '2023-07-29 10:11 PM', '72', '97', '96', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(1256, 'IP-SSAL000049', '2023-07-29', '2023-07-29 10:12 PM', '72', '98', '98', '', '140/70', '16', NULL, NULL, '', '00035', 0),
(1257, 'IP-SSAL000047', '2023-07-29', '2023-07-29 10:14 PM', '72', '98', '98', '', '120/70', '16', NULL, NULL, '', '00035', 0),
(1258, 'IP-SSAL000051', '2023-07-29', '2023-07-29 10:15 PM', '84', '98', '96', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1259, 'IP-SSAL000030', '2023-07-29', '2023-07-29 10:17 PM', '82', '98', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(1260, 'IP-SSAL000032', '2023-07-29', '2023-07-29 10:17 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1261, 'IP-SSAL000044', '2023-07-29', '2023-07-29 10:19 PM', '75', '98', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1262, 'IP-SSAL000033', '2023-07-29', '2023-07-29 10:18 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1263, 'IP-SSAL000044', '2023-07-29', '2023-07-29 10:22 PM', '72', '97', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(1264, 'IP-SSAL000039', '2023-07-29', '2023-07-29 10:22 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1265, 'IP-SSAL000061', '2023-07-29', '2023-07-29 10:23 PM', '72', '98', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1266, 'IP-SSAL000036', '2023-07-29', '2023-07-29 10:23 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1267, 'IP-SSAL000037', '2023-07-29', '2023-07-29 10:24 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1268, 'IP-SSAL000040', '2023-07-29', '2023-07-29 10:24 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1269, 'IP-SSAL000041', '2023-07-29', '2023-07-29 10:25 PM', '72', '96', '98', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1270, 'IP-SSAL000060', '2023-07-29', '2023-07-29 10:25 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1271, 'IP-SSAL000064', '2023-07-29', '2023-07-29 10:26 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1272, 'IP-SSAL000042', '2023-07-29', '2023-07-29 10:26 PM', '72', '96', '98', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1273, 'IP-SSAL000065', '2023-07-29', '2023-07-29 10:26 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1274, 'IP-SSAL000045', '2023-07-29', '2023-07-29 10:28 PM', '82', '97', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1275, 'IP-SSAL000043', '2023-07-29', '2023-07-29 10:29 PM', '72', '98', '97', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(1276, 'IP-SSAL000058', '2023-07-29', '2023-07-29 10:31 PM', '72', '98', '98', '', '140/70', '16', NULL, NULL, '', '00035', 0),
(1277, 'IP-SSAL000055', '2023-07-29', '2023-07-29 10:33 PM', '82', '98', '98', '', '140/70', '15', NULL, NULL, '', '00035', 0),
(1278, 'IP-SSAL000041', '2023-07-30', '2023-07-30 12:59 PM', '84', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1279, 'IP-SSAL000042', '2023-07-30', '2023-07-30 01:00 PM', '79', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1280, 'IP-SSAL000042', '2023-07-30', '2023-07-30 01:00 PM', '79', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1281, 'IP-SSAL000043', '2023-07-30', '2023-07-30 01:00 PM', '78', '97', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1282, 'IP-SSAL000044', '2023-07-30', '2023-07-30 01:01 PM', '76', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1283, 'IP-SSAL000045', '2023-07-30', '2023-07-30 01:03 PM', '82', '96', '100', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1284, 'IP-SSAL000051', '2023-07-30', '2023-07-30 01:03 PM', '72', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1285, 'IP-SSAL000050', '2023-07-30', '2023-07-30 01:05 PM', '77', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1286, 'IP-SSAL000049', '2023-07-30', '2023-07-30 01:07 PM', '69', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1287, 'IP-SSAL000048', '2023-07-30', '2023-07-30 01:08 PM', '85', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1288, 'IP-SSAL000047', '2023-07-30', '2023-07-30 01:08 PM', '84', '97', '96', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1289, 'IP-SSAL000046', '2023-07-30', '2023-07-30 01:10 PM', '88', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1290, 'IP-SSAL000054', '2023-07-30', '2023-07-30 01:11 PM', '75', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1291, 'IP-SSAL000055', '2023-07-30', '2023-07-30 01:14 PM', '85', '97', '98', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1292, 'IP-SSAL000056', '2023-07-30', '2023-07-30 01:15 PM', '75', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1293, 'IP-SSAL000058', '2023-07-30', '2023-07-30 01:19 PM', '69', '96', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1294, 'IP-SSAL000059', '2023-07-30', '2023-07-30 01:38 PM', '75', '97', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1295, 'IP-SSAL000059', '2023-07-30', '2023-07-30 01:38 PM', '75', '97', '96', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1296, 'IP-SSAL000062', '2023-07-30', '2023-07-30 01:40 PM', '80', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1297, 'IP-SSAL000062', '2023-07-30', '2023-07-30 01:40 PM', '80', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1298, 'IP-SSAL000061', '2023-07-30', '2023-07-30 01:42 PM', '85', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1299, 'IP-SSAL000030', '2023-07-30', '2023-07-30 09:02 PM', '82', '98', '95', '', '110/70', '16', NULL, NULL, '', '00025', 0),
(1300, 'IP-SSAL000032', '2023-07-30', '2023-07-30 09:02 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1301, 'IP-SSAL000033', '2023-07-30', '2023-07-30 09:02 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1302, 'IP-SSAL000039', '2023-07-30', '2023-07-30 09:03 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1303, 'IP-SSAL000036', '2023-07-30', '2023-07-30 09:03 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1304, 'IP-SSAL000037', '2023-07-30', '2023-07-30 09:04 PM', '82', '98', '95', '', '130/80', '16', NULL, NULL, '', '00025', 0),
(1305, 'IP-SSAL000040', '2023-07-30', '2023-07-30 09:12 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1306, 'IP-SSAL000060', '2023-07-30', '2023-07-30 09:12 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1307, 'IP-SSAL000064', '2023-07-30', '2023-07-30 09:13 PM', '84', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1308, 'IP-SSAL000065', '2023-07-30', '2023-07-30 09:13 PM', '82', '98', '95', '', '120/80', '16', NULL, NULL, '', '00025', 0),
(1309, 'IP-SSAL000058', '2023-07-30', '2023-07-30 09:48 PM', '72', '96', '96', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1310, 'IP-SSAL000043', '2023-07-30', '2023-07-30 09:49 PM', '72', '96', '98', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(1311, 'IP-SSAL000042', '2023-07-30', '2023-07-30 09:50 PM', '72', '96', '98', '', '110/80', '16', NULL, NULL, '', '00035', 0),
(1312, 'IP-SSAL000055', '2023-07-30', '2023-07-30 09:50 PM', '72', '98', '98', '', '140/70', '16', NULL, NULL, '', '00035', 0),
(1313, 'IP-SSAL000045', '2023-07-30', '2023-07-30 09:50 PM', '72', '96', '97', '', '120/70', '18', NULL, NULL, '', '00035', 0),
(1314, 'IP-SSAL000041', '2023-07-30', '2023-07-30 09:51 PM', '72', '98', '97', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(1315, 'IP-SSAL000061', '2023-07-30', '2023-07-30 09:51 PM', '72', '96', '97', '', '130/70', '16', NULL, NULL, '', '00035', 0),
(1316, 'IP-SSAL000044', '2023-07-30', '2023-07-30 09:52 PM', '72', '96', '98', '', '120/70', '15', NULL, NULL, '', '00035', 0),
(1317, 'IP-SSAL000046', '2023-07-30', '2023-07-30 09:52 PM', '82', '98', '97', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1318, 'IP-SSAL000054', '2023-07-30', '2023-07-30 09:52 PM', '72', '97', '97', '', '110/70', '15', NULL, NULL, '', '00035', 0),
(1319, 'IP-SSAL000062', '2023-07-30', '2023-07-30 09:53 PM', '72', '97', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(1320, 'IP-SSAL000059', '2023-07-30', '2023-07-30 09:53 PM', '72', '95', '96', '', '120/80', '15', NULL, NULL, '', '00035', 0),
(1321, 'IP-SSAL000056', '2023-07-30', '2023-07-30 09:54 PM', '84', '98', '98', '', '110/70', '16 ', NULL, NULL, '', '00035', 0),
(1322, 'IP-SSAL000048', '2023-07-30', '2023-07-30 09:55 PM', '80', '98', '98', '', '120/80', '16', NULL, NULL, '', '00035', 0),
(1323, 'IP-SSAL000050', '2023-07-30', '2023-07-30 09:55 PM', '72', '98', '96', '', '130/70', '15', NULL, NULL, '', '00035', 0),
(1324, 'IP-SSAL000049', '2023-07-30', '2023-07-30 09:56 PM', '72', '97', '98', '', '120/80', '16 ', NULL, NULL, '', '00035', 0),
(1325, 'IP-SSAL000047', '2023-07-30', '2023-07-30 09:56 PM', '72', '98', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(1326, 'IP-SSAL000051', '2023-07-30', '2023-07-30 09:56 PM', '82', '96', '98', '', '130/70', '16 ', NULL, NULL, '', '00035', 0),
(1327, 'IP-SSAL000030', '2023-07-31', '2023-07-31 08:44 AM', '88', '95', '98', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1328, 'IP-SSAL000032', '2023-07-31', '2023-07-31 08:44 AM', '88', '98', '97', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1329, 'IP-SSAL000033', '2023-07-31', '2023-07-31 08:44 AM', '84', '96', '99', '', '130/80', '16', NULL, NULL, '', '00032', 0),
(1330, 'IP-SSAL000039', '2023-07-31', '2023-07-31 08:45 AM', '77', '96', '99', '', '130/80', '16', NULL, NULL, '48.4', '00032', 0),
(1331, 'IP-SSAL000036', '2023-07-31', '2023-07-31 08:45 AM', '80', '96', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1332, 'IP-SSAL000037', '2023-07-31', '2023-07-31 08:46 AM', '75', '96', '99', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1333, 'IP-SSAL000040', '2023-07-31', '2023-07-31 08:46 AM', '80', '98', '99', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1334, 'IP-SSAL000065', '2023-07-31', '2023-07-31 08:47 AM', '80', '95', '98', '', '120/80', '16', NULL, NULL, '', '00032', 0),
(1335, 'IP-SSAL000064', '2023-07-31', '2023-07-31 08:49 AM', '84', '96', '99', '', '110/80', '14', NULL, NULL, '', '00032', 0),
(1336, 'IP-SSAL000060', '2023-07-31', '2023-07-31 08:50 AM', '77', '96', '97', '', '110/80', '16', NULL, NULL, '', '00032', 0),
(1337, 'IP-SSAL000041', '2023-07-31', '2023-07-31 11:50 AM', '82', '97', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1338, 'IP-SSAL000042', '2023-07-31', '2023-07-31 11:51 AM', '75', '96', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1339, 'IP-SSAL000043', '2023-07-31', '2023-07-31 11:52 AM', '75', '97', '99', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1340, 'IP-SSAL000044', '2023-07-31', '2023-07-31 11:53 AM', '69', '96', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1341, 'IP-SSAL000045', '2023-07-31', '2023-07-31 11:54 AM', '75', '95', '98', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1342, 'IP-SSAL000051', '2023-07-31', '2023-07-31 11:56 AM', '84', '96', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1343, 'IP-SSAL000050', '2023-07-31', '2023-07-31 11:57 AM', '84', '98', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1344, 'IP-SSAL000049', '2023-07-31', '2023-07-31 11:59 AM', '80', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1345, 'IP-SSAL000048', '2023-07-31', '2023-07-31 12:00 PM', '85', '96', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1346, 'IP-SSAL000047', '2023-07-31', '2023-07-31 12:01 PM', '88', '96.1', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1347, 'IP-SSAL000046', '2023-07-31', '2023-07-31 12:02 PM', '75', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1348, 'IP-SSAL000054', '2023-07-31', '2023-07-31 12:04 PM', '80', '98', '97', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1349, 'IP-SSAL000055', '2023-07-31', '2023-07-31 12:08 PM', '85', '97', '97', 'Na', '140/80', '16', NULL, NULL, 'Na', '00033', 0),
(1350, 'IP-SSAL000056', '2023-07-31', '2023-07-31 12:11 PM', '72', '97', '97', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1351, 'IP-SSAL000058', '2023-07-31', '2023-07-31 12:23 PM', '78', '96', '98', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1352, 'IP-SSAL000059', '2023-07-31', '2023-07-31 12:28 PM', '89', '97', '99', 'Na', '130/80', '16', NULL, NULL, 'Na', '00033', 0),
(1353, 'IP-SSAL000062', '2023-07-31', '2023-07-31 12:30 PM', '80', '97', '96', 'Na', '110/80', '16', NULL, NULL, 'Na', '00033', 0),
(1354, 'IP-SSAL000061', '2023-07-31', '2023-07-31 12:32 PM', '77', '97', '96', 'Na', '120/80', '16', NULL, NULL, 'Na', '00033', 0),
(1355, 'IP-SSAL000052', '2023-08-03', '2023-08-03 10:37 AM', '11', '33', NULL, '22', '111', '22', 'F', '120', '22', '00028', 0),
(1356, 'IP-SSAL000052', '2023-08-03', '2023-08-03 10:40 AM', '11', '33', '11', '11', '111', '11', 'F', '121', '11', '00030', 0),
(1357, 'IP-SSAL000052', '2023-09-15', '2023-09-15 05:33 PM', '11', '33', NULL, '5.6', '55', '44', 'F', 'bsl', '70', '00028', 0),
(1358, 'IP-SSAL000052', '2023-09-16', '2023-09-16 11:22 AM', '11', '33', NULL, '5.6', '68', '44', 'F', 'bsl', '70', '00028', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logfile`
--

CREATE TABLE `logfile` (
  `logid` bigint(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `module` varchar(50) NOT NULL,
  `event` varchar(10) NOT NULL,
  `ipaddress` varchar(25) NOT NULL,
  `value` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logfile`
--

INSERT INTO `logfile` (`logid`, `user_id`, `module`, `event`, `ipaddress`, `value`, `date_time`) VALUES
(1, '00010', 'Patient Registration', 'INSERT', '127.0.0.1', 'Jenna P santos', '2016-11-01 02:34:43'),
(2, '00010', 'Patient Registration', 'INSERT', '127.0.0.1', 'Brook P Ramon', '2016-11-01 03:11:34'),
(3, '00010', 'Company Information', 'INSERT', '127.0.0.1', 'DEMO HOSPITAL CENTER', '2017-02-11 11:44:00'),
(4, '00010', 'User', 'INSERT', '127.0.0.1', 'Bayes P. Danica', '2017-02-11 11:49:01'),
(5, '00010', 'Patient Registration', 'INSERT', '127.0.0.1', 'sad asd aasd', '2017-02-23 01:52:52'),
(6, '00010', 'Patient Registration', 'INSERT', '127.0.0.1', 'Jenna P. Santos', '2017-02-24 06:17:18'),
(7, '00010', 'Patient Registration', 'INSERT', '127.0.0.1', 'Ferdinand  Dela Cruz', '2017-02-24 06:42:43'),
(8, '00010', 'User', 'UPDATE', '127.0.0.1', 'Admin A. Administrator', '2017-02-24 07:02:40'),
(9, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '4', '2017-02-24 07:04:00'),
(10, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '5', '2017-02-24 07:04:06'),
(11, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '6', '2017-02-24 07:04:12'),
(12, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '1', '2017-02-24 07:04:19'),
(13, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '2', '2017-02-24 07:04:26'),
(14, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '3', '2017-02-24 07:04:34'),
(15, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '4', '2017-02-24 07:04:40'),
(16, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '11', '2017-02-24 07:05:50'),
(17, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', '12', '2017-02-24 07:05:57'),
(18, '00010', 'Room Bed Master', 'INSERT', '127.0.0.1', 'RM-101-1', '2017-02-24 07:10:54'),
(19, '00002', 'Room Master', 'DELETE', '::1', '8', '2021-09-17 04:00:06'),
(20, '00002', 'Room Master', 'DELETE', '::1', '10', '2021-09-17 04:00:10'),
(21, '00002', 'Room Master', 'DELETE', '::1', '11', '2021-09-17 04:00:12'),
(22, '00002', 'Room Master', 'DELETE', '::1', '15', '2021-09-17 04:00:39'),
(23, '00002', 'Room Master', 'DELETE', '::1', '33', '2021-09-17 04:00:43'),
(24, '00002', 'Room Master', 'DELETE', '::1', '30', '2021-09-17 04:00:46'),
(25, '00002', 'Room Master', 'DELETE', '::1', '7', '2021-09-17 04:00:48'),
(26, '00002', 'Room Master', 'DELETE', '::1', '9', '2021-09-17 04:00:51'),
(27, '00002', 'Room Master', 'DELETE', '::1', '28', '2021-09-17 04:00:54'),
(28, '00002', 'Room Master', 'DELETE', '::1', '29', '2021-09-17 04:00:56'),
(29, '00002', 'Room Master', 'DELETE', '::1', '32', '2021-09-17 04:00:58'),
(30, '00002', 'Room Master', 'UPDATE', '::1', '101', '2021-09-17 04:01:27'),
(31, '00002', 'Room Master', 'UPDATE', '::1', '102', '2021-09-17 04:01:46'),
(32, '00002', 'Room Master', 'UPDATE', '::1', '103', '2021-09-17 04:02:43'),
(33, '00002', 'Room Master', 'UPDATE', '::1', '104', '2021-09-17 04:02:57'),
(34, '00002', 'Room Master', 'UPDATE', '::1', '105', '2021-09-17 04:03:11'),
(35, '00002', 'Room Master', 'UPDATE', '::1', '106', '2021-09-17 04:03:32'),
(36, '00002', 'Room Master', 'INSERT', '::1', '222', '2021-09-17 04:03:48'),
(37, '00002', 'Room Master', 'DELETE', '::1', '36', '2021-09-17 04:03:57'),
(38, '00002', 'Room Master', 'UPDATE', '::1', '107', '2021-09-17 04:04:16'),
(39, '00002', 'Room Master', 'UPDATE', '::1', '108/Twinshare', '2021-09-17 04:04:39'),
(40, '00002', 'Room Master', 'UPDATE', '::1', '107/Twin Sharing', '2021-09-17 04:04:51'),
(41, '00002', 'Room Master', 'UPDATE', '::1', '109', '2021-09-17 04:05:05'),
(42, '00002', 'Room Master', 'DELETE', '::1', '22', '2021-09-17 04:05:09'),
(43, '00002', 'Room Master', 'DELETE', '::1', '23', '2021-09-17 04:05:13'),
(44, '00002', 'Room Master', 'DELETE', '::1', '34', '2021-09-17 04:06:01'),
(45, '00002', 'Room Master', 'DELETE', '::1', '35', '2021-09-17 04:06:04'),
(46, '00002', 'Room Bed Master', 'INSERT', '::1', '101-1', '2021-09-17 04:06:16'),
(47, '00002', 'Room Bed Master', 'INSERT', '::1', 'RM-101-1-1', '2021-09-17 04:06:58'),
(48, '00002', 'Room Bed Master', 'INSERT', '::1', 'RM-103-1', '2021-09-17 04:07:49'),
(49, '00002', 'Room Bed Master', 'INSERT', '::1', 'RM-101-1', '2021-09-17 04:09:57'),
(50, '00002', 'Room Bed Master', 'UPDATE', '::1', 'Bed-101-1', '2021-09-17 04:10:22'),
(51, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 102-1', '2021-09-17 04:10:34'),
(52, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed -103-1', '2021-09-17 04:10:56'),
(53, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 104-1', '2021-09-17 04:11:06'),
(54, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 105-1', '2021-09-17 04:11:19'),
(55, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 106-1', '2021-09-17 04:11:42'),
(56, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 107-1-1', '2021-09-17 04:12:03'),
(57, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed -107-2', '2021-09-17 04:12:25'),
(58, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 108-1-1', '2021-09-17 04:13:02'),
(59, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 108-1-2', '2021-09-17 04:13:20'),
(60, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 109-1', '2021-09-17 04:13:32'),
(61, '00002', 'Room Category', 'INSERT', '::1', 'Twin Sharing Room', '2021-09-17 04:30:42'),
(62, '00002', 'Room Category', 'INSERT', '::1', 'Executive Rooms', '2021-09-17 04:31:29'),
(63, '00002', 'Room Master', 'INSERT', '::1', 'Room - 101', '2021-09-17 04:31:54'),
(64, '00002', 'Room Master', 'INSERT', '::1', 'Room - 102', '2021-09-17 04:32:08'),
(65, '00002', 'Room Master', 'INSERT', '::1', 'Room - 103', '2021-09-17 04:32:22'),
(66, '00002', 'Room Master', 'INSERT', '::1', 'Room - 104', '2021-09-17 04:32:36'),
(67, '00002', 'Room Master', 'INSERT', '::1', 'Room - 105/2', '2021-09-17 04:32:56'),
(68, '00002', 'Room Master', 'INSERT', '::1', 'Room - 106/2', '2021-09-17 04:33:14'),
(69, '00002', 'Room Master', 'INSERT', '::1', 'Room - 107', '2021-09-17 04:33:31'),
(70, '00002', 'Room Master', 'INSERT', '::1', 'Room - 108', '2021-09-17 04:33:46'),
(71, '00002', 'Room Master', 'INSERT', '::1', 'Room - 109', '2021-09-17 04:34:02'),
(72, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 101', '2021-09-17 04:34:27'),
(73, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 102', '2021-09-17 04:34:37'),
(74, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 103', '2021-09-17 04:34:45'),
(75, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 104', '2021-09-17 04:34:57'),
(76, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 105-1', '2021-09-17 04:35:13'),
(77, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 105-2', '2021-09-17 04:35:25'),
(78, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 106-1', '2021-09-17 04:35:43'),
(79, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 106-2', '2021-09-17 04:35:56'),
(80, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 107', '2021-09-17 04:36:08'),
(81, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 108', '2021-09-17 04:36:20'),
(82, '00002', 'Room Bed Master', 'INSERT', '::1', 'Bed 109', '2021-09-17 04:36:31'),
(83, '00002', 'Company Information', 'INSERT', '::1', 'Assisted Living', '2021-09-17 04:50:52'),
(84, '00013', 'Patient Registration', 'INSERT', '::1', 'test1 Fanse demo', '2021-09-17 05:03:28'),
(85, '00002', 'User', 'INACTIVE U', '::1', '00008', '2021-09-17 05:13:57'),
(86, '00002', 'User', 'INACTIVE U', '::1', '00009', '2021-09-17 05:14:07'),
(87, '00002', 'User', 'INACTIVE U', '::1', '00010', '2021-09-17 05:15:09'),
(88, '00013', 'Patient Registration', 'INSERT', '::1', 'test1 shinde demo', '2021-09-17 05:22:09'),
(89, '00013', 'Patient Registration', 'INSERT', '152.57.195.90', 'test1 KUMAR demo', '2021-09-18 03:29:01'),
(90, '00013', 'Patient Registration', 'INSERT', '210.212.165.114', 'ashvini ss qw', '2021-09-20 01:29:01'),
(91, '00002', 'Appointment Registration', 'INSERT', '183.87.122.153', 'Ferdinand NA Dela Cruz', '2021-09-22 12:42:12'),
(92, '00002', 'Patient Appointment', 'CHECK IN', '183.87.122.153', '1', '2021-09-22 02:41:37'),
(93, '00013', 'Patient Registration', 'INSERT', '183.87.122.153', 'tjyt ttj jtjj', '2021-09-23 03:27:12'),
(94, '00013', 'Patient Registration', 'INSERT', '1.39.147.90', 'praveen  nair', '2021-09-27 01:09:29'),
(95, '00002', 'User', 'ACTIVATE U', '183.87.122.153', '00008', '2021-09-28 05:03:18'),
(96, '00002', 'User', 'INSERT', '183.87.122.153', 'fanse kumar kanisha', '2021-09-28 05:06:29'),
(97, '00013', 'Patient Registration', 'INSERT', '::1', ' asdfcgvbh ', '2021-10-04 04:24:11'),
(98, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-04 04:26:08'),
(99, '00013', 'Patient Registration', 'INSERT', '::1', ' kumar ', '2021-10-04 04:34:04'),
(100, '00013', 'Patient Registration', 'INSERT', '::1', 'kumar', '2021-10-04 04:40:18'),
(101, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-04 05:00:07'),
(102, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-04 05:06:36'),
(103, '00013', 'Patient Registration', 'INSERT', '::1', ' ', '2021-10-04 05:18:49'),
(104, '00013', 'Patient Registration', 'INSERT', '::1', ' ', '2021-10-04 05:32:53'),
(105, '00013', 'Patient Registration', 'INSERT', '::1', ' ', '2021-10-04 05:34:45'),
(106, '00013', 'Patient Registration', 'INSERT', '::1', ' 000056', '2021-10-04 05:35:09'),
(107, '00013', 'Patient Registration', 'INSERT', '::1', 'asdfv 000057 ', '2021-10-04 05:37:26'),
(108, '00013', 'Patient Registration', 'INSERT', '::1', ' 000058 ', '2021-10-04 06:22:18'),
(109, '00013', 'Patient Registration', 'INSERT', '::1', 'test  000059 ', '2021-10-04 06:24:11'),
(110, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-05 01:57:13'),
(111, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-06 02:16:28'),
(112, '00013', 'Patient Registration', 'INSERT', '::1', ' sdfg ', '2021-10-06 02:26:07'),
(113, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-06 02:28:53'),
(114, '00013', 'Patient Registration', 'INSERT', '::1', ' Hello ', '2021-10-06 02:33:09'),
(115, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-06 02:37:17'),
(116, '00013', 'Patient Management', 'UPDATE', '::1', ' kanisha ', '2021-10-06 03:07:40'),
(117, '00013', 'Patient Management', 'UPDATE', '::1', ' kumar ', '2021-10-06 03:10:26'),
(118, '00013', 'Patient Management', 'UPDATE', '::1', ' kumar ', '2021-10-06 03:11:32'),
(119, '00013', 'Patient Management', 'UPDATE', '::1', ' kumar ', '2021-10-06 03:12:40'),
(120, '00013', 'Patient Management', 'UPDATE', '::1', ' kumar ', '2021-10-06 03:12:53'),
(121, '00013', 'Patient Management', 'UPDATE', '::1', ' kumar ', '2021-10-06 03:14:45'),
(122, '00013', 'Patient Management', 'UPDATE', '::1', ' abcd ', '2021-10-06 03:39:39'),
(123, '00013', 'Patient Management', 'UPDATE', '::1', ' abcd ', '2021-10-06 03:39:57'),
(124, '00013', 'Patient Management', 'UPDATE', '::1', ' abcd ', '2021-10-06 03:44:21'),
(125, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-06 04:36:26'),
(126, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 02:48:17'),
(127, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 04:50:31'),
(128, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 04:55:03'),
(129, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 04:55:51'),
(130, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 04:58:55'),
(131, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 05:15:54'),
(132, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 05:19:30'),
(133, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 05:19:52'),
(134, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 05:20:38'),
(135, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 05:30:43'),
(136, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 06:39:38'),
(137, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 07:12:08'),
(138, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-12 07:13:23'),
(139, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 07:14:44'),
(140, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-12 07:16:30'),
(141, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-12 07:52:25'),
(142, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-12 07:56:08'),
(143, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-12 07:56:29'),
(144, '00002', 'System Parameters', 'INSERT', '::1', 'gender ->Any Other', '2021-10-12 07:58:56'),
(145, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-13 02:40:06'),
(146, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-13 03:05:50'),
(147, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-13 03:10:07'),
(148, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-13 04:26:34'),
(149, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-13 04:26:59'),
(150, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-13 04:38:05'),
(151, '00002', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-13 04:53:04'),
(152, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-13 04:54:50'),
(153, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-13 05:18:20'),
(154, '00002', 'System Parameters', 'INSERT', '::1', 'condition_upon_discharge ->Recovering', '2021-10-13 06:11:28'),
(155, '00002', 'Bill Group Name', 'INSERT', '::1', 'MRI', '2021-10-13 06:42:34'),
(156, '00002', 'Bill Group Name', 'INSERT', '::1', 'CT Scan', '2021-10-13 06:42:59'),
(157, '00002', 'Bill Group Name', 'UPDATED', '::1', 'CT Scan', '2021-10-13 06:43:10'),
(158, '00002', 'Bill Group Name', 'UPDATED', '::1', 'CT Scan', '2021-10-13 06:43:12'),
(159, '00002', 'Bill Group Name', 'INSERT', '::1', 'X-Ray', '2021-10-13 06:43:33'),
(160, '00002', 'Bill Group Name', 'INSERT', '::1', 'ECG', '2021-10-13 06:43:43'),
(161, '00002', 'Bill Group Name', 'INSERT', '::1', 'USG', '2021-10-13 06:43:55'),
(162, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Brain and Spine', '2021-10-13 06:45:07'),
(163, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Brain', '2021-10-13 06:45:29'),
(164, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Brain with Contrast', '2021-10-13 06:46:38'),
(165, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Entire Spine', '2021-10-13 06:47:20'),
(166, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Entire Spine with Contrast', '2021-10-13 06:47:51'),
(167, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Cervical Spine', '2021-10-13 06:48:25'),
(168, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Breast (Both)', '2021-10-13 06:49:03'),
(169, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Cervical (C) Spine with Contrast', '2021-10-13 06:49:47'),
(170, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Abdomen and Pelvis', '2021-10-13 06:50:24'),
(171, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Extremities', '2021-10-13 06:51:17'),
(172, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Extremities with Contrast', '2021-10-13 06:51:33'),
(173, '00002', 'Particular Bill', 'INSERT', '::1', 'MRI Whole Body', '2021-10-13 06:52:05'),
(174, '00002', 'Particular Bill', 'INSERT', '::1', 'Abdominal X-ray', '2021-10-13 06:52:45'),
(175, '00002', 'Particular Bill', 'INSERT', '::1', 'Barium X-ray', '2021-10-13 06:53:07'),
(176, '00002', 'Particular Bill', 'INSERT', '::1', 'Bone X-ray', '2021-10-13 06:53:25'),
(177, '00002', 'Particular Bill', 'INSERT', '::1', 'Chest X-ray', '2021-10-13 06:53:47'),
(178, '00002', 'Particular Bill', 'INSERT', '::1', 'Dental X-ray', '2021-10-13 06:54:04'),
(179, '00002', 'Particular Bill', 'INSERT', '::1', 'Extremity X-ray', '2021-10-13 06:54:30'),
(180, '00002', 'Particular Bill', 'INSERT', '::1', 'Hand X-ray', '2021-10-13 06:54:47'),
(181, '00002', 'Particular Bill', 'INSERT', '::1', 'Joint X-ray', '2021-10-13 06:55:10'),
(182, '00002', 'Particular Bill', 'INSERT', '::1', 'Lumbosacral Spine X-ray', '2021-10-13 06:55:36'),
(183, '00002', 'Particular Bill', 'INSERT', '::1', 'Neck  X-ray', '2021-10-13 06:55:57'),
(184, '00002', 'Particular Bill', 'INSERT', '::1', 'Pelvis X-ray', '2021-10-13 06:56:18'),
(185, '00002', 'Particular Bill', 'INSERT', '::1', 'Sinus X-ray', '2021-10-13 06:56:41'),
(186, '00002', 'Particular Bill', 'INSERT', '::1', 'Skull X-ray', '2021-10-13 06:56:56'),
(187, '00002', 'Particular Bill', 'INSERT', '::1', 'Thoracic Spine X-ray', '2021-10-13 06:57:21'),
(188, '00002', 'Particular Bill', 'INSERT', '::1', 'Upper GI and Small Bowel Series X-ray', '2021-10-13 06:57:58'),
(189, '00002', 'Particular Bill', 'INSERT', '::1', 'X-ray of the Skeleton', '2021-10-13 06:58:20'),
(190, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Angiography', '2021-10-13 06:59:26'),
(191, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Abdomen Sacn', '2021-10-13 06:59:44'),
(192, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Bone Scan', '2021-10-13 07:00:03'),
(193, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Head', '2021-10-13 07:00:21'),
(194, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Scan Chest/Lungs', '2021-10-13 07:00:43'),
(195, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Cardiac', '2021-10-13 07:01:00'),
(196, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Neck', '2021-10-13 07:01:18'),
(197, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Pelvis Scan', '2021-10-13 07:01:38'),
(198, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Scan Kidney', '2021-10-13 07:01:58'),
(199, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Scan of Spine', '2021-10-13 07:02:23'),
(200, '00002', 'Particular Bill', 'INSERT', '::1', 'CT Brain', '2021-10-13 07:02:38'),
(201, '00002', 'Particular Bill', 'INSERT', '::1', 'US Guided Breast Biopsy', '2021-10-13 07:08:57'),
(202, '00002', 'Particular Bill', 'INSERT', '::1', 'US Uterus', '2021-10-13 07:09:13'),
(203, '00002', 'Particular Bill', 'INSERT', '::1', 'US Obstetric', '2021-10-13 07:09:35'),
(204, '00002', 'Particular Bill', 'INSERT', '::1', 'US Abdomen', '2021-10-13 07:09:59'),
(205, '00002', 'Particular Bill', 'INSERT', '::1', 'US Abdomen(Children)', '2021-10-13 07:10:28'),
(206, '00002', 'Particular Bill', 'INSERT', '::1', 'US Breast', '2021-10-13 07:10:49'),
(207, '00002', 'Particular Bill', 'INSERT', '::1', 'US Carotid', '2021-10-13 07:11:25'),
(208, '00002', 'Particular Bill', 'INSERT', '::1', 'US General', '2021-10-13 07:11:45'),
(209, '00002', 'Particular Bill', 'INSERT', '::1', 'US Musculoskeletal', '2021-10-13 07:12:32'),
(210, '00002', 'Particular Bill', 'INSERT', '::1', 'US Pelvis', '2021-10-13 07:12:48'),
(211, '00002', 'Particular Bill', 'INSERT', '::1', 'US Prostate', '2021-10-13 07:13:12'),
(212, '00002', 'Particular Bill', 'INSERT', '::1', 'US Scrotum', '2021-10-13 07:13:30'),
(213, '00002', 'Particular Bill', 'INSERT', '::1', 'US Thyroid', '2021-10-13 07:13:45'),
(214, '00002', 'Particular Bill', 'INSERT', '::1', 'US Venous(Extremities)', '2021-10-13 07:14:48'),
(215, '00002', 'User', 'INACTIVE U', '::1', '37', '2021-10-13 07:54:00'),
(216, '00002', 'Medicine Category', 'INSERT', '::1', 'Physician Assistant Service', '2021-10-14 05:38:06'),
(217, '00002', 'Medicine Category', 'INSERT', '::1', 'Physiotherapy Services', '2021-10-14 05:38:38'),
(218, '00002', 'Medicine Category', 'INSERT', '::1', 'Nursing', '2021-10-14 05:38:53'),
(219, '00002', 'Medicine Category', 'INSERT', '::1', 'Lab Services', '2021-10-14 05:39:15'),
(220, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-14 08:27:29'),
(221, '00013', 'Patient Management', 'UPDATE', '::1', ' A Demo test ', '2021-10-14 08:28:12'),
(222, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-18 12:35:53'),
(223, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 12:46:48'),
(224, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-18 01:45:39'),
(225, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:47:22'),
(226, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:48:12'),
(227, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:48:25'),
(228, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:48:36'),
(229, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:49:30'),
(230, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:49:53'),
(231, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:55:32'),
(232, '00013', 'Patient Management', 'UPDATE', '::1', ' Aniket Pashte ', '2021-10-18 01:56:01'),
(233, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-18 01:57:33'),
(234, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2021-10-18 02:07:04'),
(235, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2021-10-18 02:09:29'),
(236, '00013', 'Patient Management', 'UPDATE', '152.57.236.41', ' Kanisha Fanse ', '2021-10-20 03:41:48'),
(237, '00013', 'Patient Registration', 'INSERT', '152.57.236.41', '  ', '2021-10-20 04:45:37'),
(238, '00013', 'Patient Registration', 'INSERT', '152.57.236.41', '  ', '2021-10-20 05:22:39'),
(239, '00002', 'Room Category', 'INSERT', '152.57.238.177', 'Private Room', '2021-10-21 11:32:25'),
(240, '00002', 'Room Category', 'INSERT', '152.57.238.177', 'Semi-private Room', '2021-10-21 11:32:34'),
(241, '00002', 'Room Category', 'INSERT', '152.57.238.177', 'Suite', '2021-10-21 11:33:01'),
(242, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 301', '2021-10-21 11:34:36'),
(243, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 303', '2021-10-21 11:34:51'),
(244, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 311', '2021-10-21 11:35:08'),
(245, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 304', '2021-10-21 11:35:36'),
(246, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 305', '2021-10-21 11:35:50'),
(247, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 306', '2021-10-21 11:36:03'),
(248, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 307', '2021-10-21 11:36:17'),
(249, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 308', '2021-10-21 11:37:30'),
(250, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 309', '2021-10-21 11:37:48'),
(251, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 310', '2021-10-21 11:38:05'),
(252, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 404', '2021-10-21 11:38:41'),
(253, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 408', '2021-10-21 11:39:06'),
(254, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 407', '2021-10-21 11:40:20'),
(255, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 406', '2021-10-21 11:40:40'),
(256, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 401', '2021-10-21 11:41:08'),
(257, '00002', 'Room Category', 'INSERT', '152.57.238.177', 'Office', '2021-10-21 11:41:34'),
(258, '00002', 'Room Master', 'INSERT', '152.57.238.177', 'Room - 405', '2021-10-21 11:42:00'),
(259, '00002', 'Room Category', 'UPDATE', '152.57.238.177', 'Suite', '2021-10-21 11:42:48'),
(260, '00002', 'User', 'INSERT', '152.57.235.118', 'Ajeya  Upadhye', '2021-10-22 12:11:25'),
(261, '00002', 'User', 'INSERT', '152.57.235.118', 'Arpita  Laulkar', '2021-10-22 12:12:18'),
(262, '00002', 'User', 'INSERT', '152.57.235.118', 'Samruddha  Borana', '2021-10-22 12:12:59'),
(263, '00002', 'User', 'INSERT', '152.57.235.118', 'Tejaswini  Jamadade', '2021-10-22 12:13:27'),
(264, '00002', 'User', 'INSERT', '152.57.235.118', 'Suchita  Shah', '2021-10-22 12:14:04'),
(265, '00002', 'User', 'INSERT', '152.57.235.118', 'Mahesh  Kulkarni', '2021-10-22 12:14:37'),
(266, '00002', 'User', 'UPDATE', '152.57.235.118', 'Bhatt P. Devika', '2021-10-22 12:43:26'),
(267, '00013', 'Patient Registration', 'INSERT', '152.57.235.118', '  ', '2021-10-22 12:45:09'),
(268, '00013', 'Patient Management', 'UPDATE', '152.57.235.118', ' Demo1 ', '2021-10-22 12:46:14'),
(269, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 301', '2021-10-22 12:47:06'),
(270, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 303', '2021-10-22 12:47:31'),
(271, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 311', '2021-10-22 12:47:46'),
(272, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 304', '2021-10-22 12:47:57'),
(273, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 305', '2021-10-22 12:48:09'),
(274, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 306', '2021-10-22 12:48:27'),
(275, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 307', '2021-10-22 12:48:35'),
(276, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 308', '2021-10-22 12:48:46'),
(277, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 309', '2021-10-22 12:48:57'),
(278, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 310', '2021-10-22 12:49:10'),
(279, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 404', '2021-10-22 12:49:25'),
(280, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 408/1', '2021-10-22 12:49:41'),
(281, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 408/2', '2021-10-22 12:49:55'),
(282, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 407', '2021-10-22 12:50:10'),
(283, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 406', '2021-10-22 12:50:23'),
(284, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 401', '2021-10-22 12:50:39'),
(285, '00002', 'Room Bed Master', 'INSERT', '152.57.235.118', 'Bed 405', '2021-10-22 12:50:56'),
(286, '00002', 'User', 'UPDATE', '152.57.235.118', 'Patil L. Shushil', '2021-10-22 12:53:28'),
(287, '00013', 'Patient Registration', 'INSERT', '183.87.122.153', '  ', '2021-10-25 06:21:31'),
(288, '00013', 'Patient Registration', 'INSERT', '183.87.122.153', '  ', '2022-10-31 02:38:02'),
(289, '00013', 'Patient Management', 'UPDATE', '183.87.122.153', ' Varsha Raut ', '2022-10-31 02:38:16'),
(290, '00006', 'Patient Registration', 'INSERT', '183.87.122.153', '  ', '2022-10-31 03:53:18'),
(291, '00013', 'Patient Management', 'UPDATE', '183.87.122.153', ' Demo11 ', '2022-11-07 12:11:56'),
(292, '00013', 'Patient Management', 'UPDATE', '183.87.122.153', ' Demo111 ', '2022-11-07 12:36:52'),
(293, '00013', 'Patient Registration', 'INSERT', '152.57.197.144', '  ', '2022-11-07 12:39:14'),
(294, '00013', 'Patient Management', 'UPDATE', '152.57.197.144', ' afsds ', '2022-11-07 12:40:36'),
(295, '00006', 'Patient Registration', 'INSERT', '183.87.122.153', '  ', '2022-11-07 12:47:17'),
(296, '00013', 'Patient Registration', 'INSERT', '183.87.122.153', '  ', '2022-11-07 12:49:49'),
(297, '00013', 'Patient Registration', 'INSERT', '183.87.122.153', '  ', '2022-11-07 05:31:36'),
(298, '00013', 'Patient Management', 'UPDATE', '183.87.122.153', ' Kanisha ', '2022-11-07 05:32:15'),
(299, '00013', 'Patient Management', 'UPDATE', '183.87.122.153', ' Kanisha ', '2022-11-07 05:32:30'),
(300, '00002', 'Room Category', 'INSERT', '183.87.122.153', 'suite2', '2022-11-08 11:39:57'),
(301, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2023-04-17 01:55:59'),
(302, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2023-04-17 06:21:24'),
(303, '00002', 'Particular Bill', 'INSERT', '::1', 'balaji', '2023-04-17 10:06:35'),
(304, '00002', 'User', 'INSERT', '::1', 'balaji pandurang muttepawar', '2023-04-19 04:12:59'),
(305, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse1 ', '2023-04-20 10:50:47'),
(306, '00013', 'Patient Management', 'UPDATE', '::1', ' Kanisha Fanse ', '2023-04-20 10:51:03'),
(307, '00013', 'Patient Registration', 'INSERT', '::1', '  ', '2023-04-20 02:04:44'),
(308, '00013', 'Patient Management', 'UPDATE', '::1', ' balaji ', '2023-04-20 02:11:03'),
(309, '00014', 'Patient Registration', 'INSERT', '::1', '  ', '2023-04-20 02:34:26'),
(310, '00002', 'User', 'INSERT', '::1', 'nurse nurse nurse', '2023-04-20 10:29:05'),
(311, '00002', 'User', 'INSERT', '203.192.205.80', 'Dipali S. Benake', '2023-04-27 03:57:43'),
(312, '00002', 'User', 'INSERT', '203.192.205.80', 'Ajeya V Upadhye', '2023-04-27 04:02:16'),
(313, '00002', 'User', 'INSERT', '203.192.205.80', 'Ragini M Kamble', '2023-04-27 04:05:35'),
(314, '00002', 'User', 'INSERT', '203.192.205.80', 'Nilam S. Nivale', '2023-04-27 04:23:59'),
(315, '00002', 'User', 'INSERT', '203.192.205.80', 'Avinash V Kinikar', '2023-04-27 04:26:46'),
(316, '00002', 'User', 'INSERT', '103.186.133.168', 'balaji pandurang muttepawar', '2023-04-28 03:05:25'),
(317, '00002', 'User', 'INSERT', '103.186.133.168', 'rajesh ram polshetwar', '2023-04-28 03:07:18'),
(318, '00002', 'User', 'INSERT', '103.186.133.168', 'ashfiya ashish momin', '2023-04-28 03:09:50'),
(319, '00029', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-04-28 03:13:43'),
(320, '00029', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-04-28 03:38:13'),
(321, '00028', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-04-28 03:48:26'),
(322, '00029', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-04-28 03:50:53'),
(323, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' test1 ', '2023-04-28 03:52:57'),
(324, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-04-28 03:53:21'),
(325, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:24:51'),
(326, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:37:44'),
(327, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:41:19'),
(328, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:43:40'),
(329, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:48:31'),
(330, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:55:05'),
(331, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawaless ', '2023-05-02 09:57:08'),
(332, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' nagesh dawales ', '2023-05-02 09:57:40'),
(333, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' raj ', '2023-05-02 11:09:16'),
(334, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' demo ', '2023-05-02 11:09:40'),
(335, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' test1 ', '2023-05-02 11:09:55'),
(336, '00024', 'Patient Registration', 'INSERT', '152.57.165.48', '  ', '2023-05-02 12:27:48'),
(337, '00023', 'Patient Management', 'UPDATE', '152.57.165.48', ' raj ', '2023-05-02 12:37:47'),
(338, '00023', 'Patient Management', 'UPDATE', '152.57.165.48', ' vinay shinde ', '2023-05-02 12:40:18'),
(339, '00028', 'Patient Management', 'UPDATE', '152.57.95.170', ' demo1 ', '2023-05-03 09:04:46'),
(340, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' demo ', '2023-05-10 09:55:34'),
(341, '00028', 'Patient Discharge', 'INSERT', '103.186.133.168', ' demo ', '2023-05-10 10:10:58'),
(342, '00028', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-05-10 03:06:14'),
(343, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' test1 ', '2023-05-10 03:08:12'),
(344, '00029', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-05-10 03:10:22'),
(345, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' spero ', '2023-05-10 03:10:54'),
(346, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' spero ', '2023-05-10 03:14:49'),
(347, '00029', 'Patient Management', 'UPDATE', '103.186.133.168', ' spero ', '2023-05-10 03:33:27'),
(348, '00029', 'Patient Discharge', 'INSERT', '103.186.133.168', ' spero ', '2023-05-10 03:54:17'),
(349, '00029', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-05-10 04:04:54'),
(350, '00029', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-05-11 11:53:38'),
(351, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' spero ', '2023-05-16 01:26:24'),
(352, '00028', 'Patient Discharge', 'INSERT', '103.186.133.168', ' nagesh dawales ', '2023-05-16 03:47:57'),
(353, '00002', 'Appointment Registration', 'INSERT', '103.186.133.168', 'test test test', '2023-05-18 10:44:22'),
(354, '00002', 'Appointment Registration', 'INSERT', '103.186.133.168', 'test test test', '2023-05-18 10:47:05'),
(355, '00002', 'Patient Appointment', 'CHECK IN', '103.186.133.168', '2', '2023-05-18 11:01:07'),
(356, '00002', 'Patient Appointment', 'DELETED', '103.186.133.168', '2', '2023-05-18 11:03:29'),
(357, '00002', 'Patient Appointment', 'CHECK IN', '103.186.133.168', '1', '2023-05-18 11:07:50'),
(358, '00002', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-05-18 11:10:00'),
(359, '00002', 'Room Category', 'UPDATE', '103.186.133.168', 'Office', '2023-05-18 02:29:15'),
(360, '00002', 'Room Category', 'UPDATE', '103.186.133.168', 'Private Room', '2023-05-18 02:29:29'),
(361, '00002', 'Room Category', 'UPDATE', '103.186.133.168', 'Private Room', '2023-05-18 02:29:51'),
(362, '00002', 'Room Category', 'INSERT', '103.186.133.168', 'Test', '2023-05-18 02:30:21'),
(363, '00002', 'Room Category', 'UPDATE', '103.186.133.168', 'Test', '2023-05-18 02:30:29'),
(364, '00002', 'Room Category', 'DELETE', '103.186.133.168', '6', '2023-05-18 02:30:43'),
(365, '00002', 'Room Category', 'INSERT', '103.186.133.168', 'Test', '2023-05-18 02:31:13'),
(366, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'test', '2023-05-18 02:34:13'),
(367, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'spero', '2023-05-18 02:34:36'),
(368, '00002', 'Room Bed Master', 'UPDATE', '103.186.133.168', 'Bed 3010', '2023-05-18 02:49:23'),
(369, '00002', 'Room Bed Master', 'UPDATE', '103.186.133.168', 'Bed 3010000', '2023-05-18 02:49:51'),
(370, '00002', 'Room Bed Master', 'UPDATE', '103.186.133.168', 'Bed 301', '2023-05-18 02:50:45'),
(371, '00002', 'Room Bed Master', 'UPDATE', '103.186.133.168', 'Bed 301', '2023-05-18 02:51:15'),
(372, '00002', 'Room Bed Master', 'UPDATE', '103.186.133.168', 'Bed 30', '2023-05-18 02:51:43'),
(373, '00002', 'Appointment Registration', 'INSERT', '152.57.223.168', 'Domo Domo Domo', '2023-05-20 12:45:16'),
(374, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Test ', '2023-05-23 02:50:53'),
(375, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Test ', '2023-05-23 02:51:07'),
(376, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Test ', '2023-05-23 02:51:21'),
(377, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Test ', '2023-05-23 02:51:30'),
(378, '00024', 'Patient Registration', 'INSERT', '203.192.205.81', '  ', '2023-05-31 03:39:06'),
(379, '00002', 'Company Information', 'INSERT', '103.186.133.168', 'Assisted Living', '2023-06-02 11:03:48'),
(380, '00002', 'Company Information', 'INSERT', '103.186.133.168', 'Assisted Living', '2023-06-02 11:03:57'),
(381, '00002', 'Company Information', 'INSERT', '103.186.133.168', 'Assisted Living', '2023-06-02 11:04:13'),
(382, '00002', 'Company Information', 'INSERT', '103.186.133.168', 'Assisted Living', '2023-06-02 11:05:13'),
(383, '00002', 'Company Information', 'INSERT', '103.186.133.168', 'Assisted Living', '2023-06-02 11:06:03'),
(384, '00002', 'Department', 'INSERT', '103.186.133.168', 'spero', '2023-06-02 11:10:32'),
(385, '00002', 'Department', 'UPDATE', '103.186.133.168', 'spero', '2023-06-02 11:32:05'),
(386, '00002', 'Department', 'UPDATE', '103.186.133.168', 'spero', '2023-06-02 11:32:21'),
(387, '00002', 'Designation', 'INSERT', '103.186.133.168', 'IT', '2023-06-02 11:33:11'),
(388, '00002', 'Designation', 'UPDATE', '103.186.133.168', 'IT', '2023-06-02 11:33:22'),
(389, '00002', 'Bill Group Name', 'INSERT', '103.186.133.168', 'IT', '2023-06-02 11:34:08'),
(390, '00002', 'Bill Group Name', 'UPDATED', '103.186.133.168', 'IT', '2023-06-02 11:34:15'),
(391, '00002', 'Pages', 'INSERT', '103.186.133.168', 'gjhgjh', '2023-06-02 11:44:36'),
(392, '00002', 'Complain', 'INSERT', '152.57.233.2', 'other', '2023-06-15 01:53:31'),
(393, '00002', 'Diagnosis', 'INSERT', '152.57.233.2', 'other', '2023-06-15 01:53:52'),
(394, '00028', 'Patient Discharge', 'INSERT', '152.57.209.174', ' vinay shinde ', '2023-06-16 09:14:39'),
(395, '00002', 'User', 'UPDATE', '203.192.205.84', 'Neha S. Choudhary', '2023-06-29 11:28:06'),
(396, '00002', 'User', 'INSERT', '103.186.133.168', 'demo demo demo', '2023-06-29 11:46:31'),
(397, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-29 11:51:39'),
(398, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Kshama Jayant Majumdar ', '2023-06-29 11:53:20'),
(399, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Kshama Jayant Majumdar ', '2023-06-29 11:53:39'),
(400, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Kshama Jayant Majumdar ', '2023-06-29 04:17:28'),
(401, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 10:49:03'),
(402, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Sunanda Dattatray Phadke ', '2023-06-30 10:49:55'),
(403, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:06:26'),
(404, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:14:15'),
(405, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:19:32'),
(406, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:23:47'),
(407, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:34:43'),
(408, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:41:30'),
(409, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:49:03'),
(410, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:56:19'),
(411, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 11:59:58'),
(412, '00002', 'Room Master', 'INSERT', '203.192.205.84', '201', '2023-06-30 12:16:03'),
(413, '00002', 'Room Master', 'INSERT', '203.192.205.84', '202', '2023-06-30 12:16:49'),
(414, '00002', 'Room Master', 'INSERT', '203.192.205.84', '203', '2023-06-30 12:17:13'),
(415, '00002', 'Room Master', 'INSERT', '203.192.205.84', '204', '2023-06-30 12:22:15'),
(416, '00002', 'Room Master', 'INSERT', '203.192.205.84', '205', '2023-06-30 12:25:00'),
(417, '00002', 'Room Master', 'INSERT', '203.192.205.84', '206', '2023-06-30 12:31:07'),
(418, '00002', 'Room Master', 'INSERT', '203.192.205.84', '207', '2023-06-30 12:31:35'),
(419, '00002', 'Room Master', 'INSERT', '203.192.205.84', '208', '2023-06-30 12:32:15'),
(420, '00002', 'Room Master', 'INSERT', '203.192.205.84', '209', '2023-06-30 12:32:44'),
(421, '00002', 'Room Master', 'UPDATE', '203.192.205.84', '201', '2023-06-30 12:33:00'),
(422, '00002', 'Room Master', 'INSERT', '203.192.205.84', '210', '2023-06-30 12:33:28'),
(423, '00002', 'Room Master', 'INSERT', '203.192.205.84', '401', '2023-06-30 12:35:16'),
(424, '00002', 'Room Master', 'INSERT', '203.192.205.84', '402', '2023-06-30 12:35:35'),
(425, '00002', 'Room Master', 'INSERT', '203.192.205.84', '403', '2023-06-30 12:40:12'),
(426, '00002', 'Room Master', 'INSERT', '203.192.205.84', '404', '2023-06-30 12:40:42'),
(427, '00002', 'Room Master', 'INSERT', '203.192.205.84', '405', '2023-06-30 12:41:09'),
(428, '00002', 'Room Master', 'INSERT', '203.192.205.84', '406', '2023-06-30 12:41:59'),
(429, '00002', 'Room Master', 'INSERT', '203.192.205.84', '407', '2023-06-30 12:43:14'),
(430, '00002', 'Room Master', 'UPDATE', '203.192.205.84', 'Room - 408', '2023-06-30 12:46:40'),
(431, '00002', 'Room Master', 'INSERT', '203.192.205.84', '409', '2023-06-30 12:47:15'),
(432, '00002', 'Room Master', 'INSERT', '203.192.205.84', '410', '2023-06-30 12:47:36'),
(433, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:07:25'),
(434, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:07:47'),
(435, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:08:08'),
(436, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:08:26'),
(437, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:08:39'),
(438, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:08:56'),
(439, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:09:11'),
(440, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:09:27'),
(441, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:09:45'),
(442, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 01:11:21'),
(443, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 02:11:46'),
(444, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 02:11:58'),
(445, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 02:12:21'),
(446, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 02:13:05'),
(447, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 02:13:30'),
(448, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 02:13:52'),
(449, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 1', '2023-06-30 02:14:12'),
(450, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 2', '2023-06-30 02:14:44'),
(451, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 02:15:07'),
(452, '00002', 'Room Category', 'DELETE', '203.192.205.84', '7', '2023-06-30 02:21:12'),
(453, '00002', 'Room Category', 'UPDATE', '203.192.205.84', 'Semi-private Room', '2023-06-30 02:21:35'),
(454, '00002', 'Room Category', 'UPDATE', '203.192.205.84', 'Private Room', '2023-06-30 02:21:56'),
(455, '00002', 'Room Category', 'UPDATE', '203.192.205.84', 'Suite', '2023-06-30 02:22:27'),
(456, '00002', 'Room Category', 'UPDATE', '203.192.205.84', 'suite2', '2023-06-30 02:22:44'),
(457, '00002', 'Room Master', 'UPDATE', '203.192.205.84', '201', '2023-06-30 02:23:14'),
(458, '00002', 'Room Master', 'DELETE', '203.192.205.84', '3', '2023-06-30 02:24:01'),
(459, '00002', 'Room Master', 'DELETE', '203.192.205.84', '16', '2023-06-30 02:24:58'),
(460, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 02:26:01'),
(461, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', 'Bed 2', '2023-06-30 02:26:26'),
(462, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:27:05'),
(463, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:27:19'),
(464, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:27:34'),
(465, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:27:48'),
(466, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:28:00'),
(467, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:28:13'),
(468, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:28:31'),
(469, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:28:43'),
(470, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'bed 2', '2023-06-30 02:29:00'),
(471, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:29:13'),
(472, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 2', '2023-06-30 02:29:27'),
(473, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 02:29:40'),
(474, '00002', 'Room Master', 'UPDATE', '203.192.205.84', '207', '2023-06-30 02:36:41'),
(475, '00002', 'Room Master', 'UPDATE', '203.192.205.84', '207', '2023-06-30 02:40:46'),
(476, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Sarojini Patel ', '2023-06-30 02:48:09'),
(477, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 2', '2023-06-30 03:00:54'),
(478, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Sarojini Patel ', '2023-06-30 03:17:43'),
(479, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 03:23:35'),
(480, '00002', 'Room Master', 'UPDATE', '203.192.205.84', 'Room - 404', '2023-06-30 03:27:33'),
(481, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '2', '2023-06-30 03:28:47'),
(482, '00002', 'Room Master', 'INSERT', '203.192.205.84', '404', '2023-06-30 03:30:27'),
(483, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 03:30:52'),
(484, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.84', '1', '2023-06-30 03:31:11'),
(485, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 03:31:31'),
(486, '00027', 'Patient Management', 'UPDATE', '203.192.205.84', ' Diwakar Joshi ', '2023-06-30 03:53:43'),
(487, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 03:57:17'),
(488, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:12:00'),
(489, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 04:15:22'),
(490, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:17:57'),
(491, '00002', 'Room Master', 'UPDATE', '203.192.205.84', 'Room - 401', '2023-06-30 04:19:03'),
(492, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:22:27'),
(493, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 04:23:38'),
(494, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:30:42'),
(495, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:31:39'),
(496, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:34:09'),
(497, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:35:21'),
(498, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:36:53'),
(499, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:38:14'),
(500, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-06-30 04:39:30'),
(501, '00002', 'Room Master', 'INSERT', '203.192.205.84', '302', '2023-06-30 04:42:24'),
(502, '00002', 'Room Bed Master', 'INSERT', '203.192.205.84', 'Bed 1', '2023-06-30 04:42:53'),
(503, '00002', 'User', 'INSERT', '203.192.205.84', 'Divya S Boin', '2023-06-30 05:04:15'),
(504, '00002', 'User', 'UPDATE', '203.192.205.84', 'Nilam S. Nivale', '2023-06-30 05:06:28'),
(505, '00002', 'User', 'INSERT', '203.192.205.84', 'Harsha Asit Wasnik', '2023-06-30 05:08:16'),
(506, '00002', 'User', 'INSERT', '203.192.205.86', 'Kavita Ashok Bhangale', '2023-07-01 01:06:23'),
(507, '00024', 'Patient Registration', 'INSERT', '203.192.205.86', '  ', '2023-07-01 02:17:07'),
(508, '00024', 'Patient Management', 'UPDATE', '203.192.205.86', ' DKT test ', '2023-07-01 02:18:34'),
(509, '00027', 'Patient Management', 'UPDATE', '203.192.205.86', ' DKT test ', '2023-07-01 02:23:59'),
(510, '00027', 'Patient Registration', 'INSERT', '203.192.205.86', '  ', '2023-07-03 11:21:05'),
(511, '00002', 'User', 'INACTIVE U', '203.192.205.85', '00026', '2023-07-03 03:19:05'),
(512, '00002', 'User', 'INSERT', '203.192.205.86', 'Shital S. Lahane', '2023-07-03 05:10:49'),
(513, '00002', 'Room Master', 'UPDATE', '203.192.205.86', 'Room - 303', '2023-07-04 09:57:57'),
(514, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.86', 'Bed 1', '2023-07-04 09:58:29'),
(515, '00002', 'Room Bed Master', 'INSERT', '203.192.205.86', 'Bed 2', '2023-07-04 09:58:49'),
(516, '00024', 'Patient Registration', 'INSERT', '203.192.205.87', '  ', '2023-07-04 11:03:20'),
(517, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Gurunath Ghotage ', '2023-07-04 11:04:29'),
(518, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Gurunath Ghotage ', '2023-07-04 02:07:02'),
(519, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Gurunath Ghotage ', '2023-07-04 02:19:19'),
(520, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Gurunath Ghotage ', '2023-07-04 02:34:29'),
(521, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Gurunath Ghotage ', '2023-07-04 02:34:47'),
(522, '00024', 'Patient Registration', 'INSERT', '203.192.205.87', '  ', '2023-07-05 11:52:18'),
(523, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Dongre Mangala ', '2023-07-05 11:54:17'),
(524, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' DKT test ', '2023-07-05 11:54:33'),
(525, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Dongre Mangala ', '2023-07-05 11:57:27'),
(526, '00028', 'Patient Registration', 'INSERT', '103.186.133.168', '  ', '2023-07-07 06:09:14'),
(527, '00024', 'Patient Registration', 'INSERT', '203.192.205.85', '  ', '2023-07-09 12:44:32'),
(528, '00024', 'Patient Management', 'UPDATE', '203.192.205.85', ' Mujumdar Shrikant ', '2023-07-09 12:54:08'),
(529, '00002', 'Room Bed Master', 'INSERT', '203.192.205.85', 'Bed 1', '2023-07-11 03:11:36'),
(530, '00002', 'Room Bed Master', 'INSERT', '203.192.205.85', 'Bed 2', '2023-07-11 03:11:51'),
(531, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' DKT test ', '2023-07-12 12:36:41'),
(532, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' TTK ', '2023-07-12 02:14:33'),
(533, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' DKT test ', '2023-07-12 03:02:47'),
(534, '00024', 'Patient Registration', 'INSERT', '203.192.205.85', '  ', '2023-07-12 04:47:57'),
(535, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' DKT test ', '2023-07-13 12:04:17'),
(536, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Kshama Jayant Majumdar ', '2023-07-14 12:05:38'),
(537, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Gurunath Ghotage ', '2023-07-14 12:08:57'),
(538, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Sheela Godbole ', '2023-07-14 12:29:00'),
(539, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Sheela Godbole ', '2023-07-14 12:37:17'),
(540, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Sheela Godbole ', '2023-07-14 01:06:58'),
(541, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Sheela Godbole ', '2023-07-14 01:07:40'),
(542, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' B N Shrivastav ', '2023-07-14 01:12:23');
INSERT INTO `logfile` (`logid`, `user_id`, `module`, `event`, `ipaddress`, `value`, `date_time`) VALUES
(543, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Deokishan Moolchand ', '2023-07-17 03:08:07'),
(544, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' KUSUM BHAVISKAR ', '2023-07-18 02:32:09'),
(545, '00024', 'Patient Registration', 'INSERT', '203.192.205.87', '  ', '2023-07-18 02:37:56'),
(546, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Meena Pai ', '2023-07-18 02:42:42'),
(547, '00024', 'Patient Registration', 'INSERT', '203.192.205.87', '  ', '2023-07-18 02:47:48'),
(548, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Vandana Waikar ', '2023-07-18 02:54:00'),
(549, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Sheela Godbole ', '2023-07-18 04:05:14'),
(550, '00024', 'Patient Registration', 'INSERT', '203.192.205.87', '  ', '2023-07-22 11:22:41'),
(551, '00024', 'Patient Management', 'UPDATE', '203.192.205.87', ' Vaze Keshav ', '2023-07-22 11:28:04'),
(552, '00024', 'Patient Registration', 'INSERT', '203.192.205.87', '  ', '2023-07-22 12:36:14'),
(553, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Sheela Godbole ', '2023-07-24 03:51:49'),
(554, '00027', 'Patient Discharge', 'INSERT', '203.192.205.85', ' Sharadchandra Joshi ', '2023-07-24 04:07:51'),
(555, '00027', 'Patient Discharge', 'INSERT', '203.192.205.85', ' Sharmila Sharadchandra Jo ', '2023-07-24 04:10:28'),
(556, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' TTK ', '2023-07-24 04:44:33'),
(557, '00027', 'Patient Discharge', 'INSERT', '152.57.221.1', ' Sunanda Dattatray Phadke ', '2023-07-24 06:49:58'),
(558, '00002', 'Room Bed Master', 'INSERT', '152.57.221.1', 'Bed 1', '2023-07-24 06:53:56'),
(559, '00002', 'Room Bed Master', 'INSERT', '152.57.221.1', 'Bed 2', '2023-07-24 06:54:10'),
(560, '00002', 'Room Bed Master', 'UPDATE', '152.57.221.1', 'Bed 1', '2023-07-24 07:03:00'),
(561, '00002', 'Room Bed Master', 'INSERT', '152.57.221.1', 'Bed 2', '2023-07-24 07:05:41'),
(562, '00002', 'Room Bed Master', 'INSERT', '152.57.221.1', 'Bed 1', '2023-07-24 07:10:48'),
(563, '00027', 'Patient Discharge', 'INSERT', '152.57.221.1', ' Meena Pai ', '2023-07-24 07:14:47'),
(564, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-07-25 12:11:06'),
(565, '00024', 'Patient Registration', 'INSERT', '203.192.205.84', '  ', '2023-07-25 12:18:14'),
(566, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Sarojini Patel ', '2023-07-25 12:44:54'),
(567, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Madhavi Kulkarni ', '2023-07-25 12:48:58'),
(568, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Madhavi Kulkarni ', '2023-07-25 12:49:25'),
(569, '00028', 'Patient Management', 'UPDATE', '103.186.133.168', ' Madhavi Kulkarni ', '2023-07-25 12:49:43'),
(570, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Kshama Jayant Majumdar ', '2023-07-25 12:53:33'),
(571, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Srilekha Sane ', '2023-07-25 01:00:35'),
(572, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Madhavi Kulkarni ', '2023-07-25 01:15:22'),
(573, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Manda Dattatrya Pawar ', '2023-07-25 01:35:05'),
(574, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Vijaya Vaijapurkar ', '2023-07-25 01:46:15'),
(575, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Aparna Anil Velankar ', '2023-07-25 04:36:49'),
(576, '00024', 'Patient Management', 'UPDATE', '203.192.205.84', ' Velankar Anil ', '2023-07-25 04:40:32'),
(577, '00027', 'Patient Discharge', 'INSERT', '203.192.205.85', ' Ashwini Patil ', '2023-07-26 01:57:08'),
(578, '00027', 'Patient Discharge', 'INSERT', '203.192.205.85', ' Ashwini Patil ', '2023-07-26 01:57:12'),
(579, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' KUSUM BHAVISKAR ', '2023-07-26 04:13:51'),
(580, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Janardhan Sharveghar ', '2023-07-26 05:23:39'),
(581, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Chaya Deshpande ', '2023-07-26 05:46:01'),
(582, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Chaya Deshpande ', '2023-07-26 05:48:59'),
(583, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Mujumdar Shrikant ', '2023-07-26 05:58:08'),
(584, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Mujumdar Shrikant ', '2023-07-26 06:13:21'),
(585, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Deokishan Moolchand ', '2023-07-26 06:17:04'),
(586, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Usha Bhat ', '2023-07-27 05:29:08'),
(587, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Dattatrya Chande ', '2023-07-27 05:51:40'),
(588, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Dongre Mangala ', '2023-07-27 06:08:18'),
(589, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Vandana Waikar ', '2023-07-27 06:24:49'),
(590, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Vaze Keshav ', '2023-07-27 06:43:41'),
(591, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' TTK ', '2023-07-28 02:01:23'),
(592, '00023', 'Patient Management', 'UPDATE', '203.192.205.84', ' Diwakar Joshi ', '2023-07-28 02:22:45'),
(593, '00024', 'Patient Registration', 'INSERT', '203.192.205.83', '  ', '2023-07-30 05:01:52'),
(594, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Pratibha Vichare ', '2023-07-31 02:22:21'),
(595, '00027', 'Patient Management', 'UPDATE', '203.192.205.85', ' Rekha Paralkar ', '2023-07-31 02:22:50'),
(596, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 12:19:29'),
(597, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 12:25:27'),
(598, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 10:25:20'),
(599, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 11:21:31'),
(600, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 11:28:45'),
(601, '00028', 'Member Management', 'UPDATE', '::1', ' TTK ', '2023-08-01 11:33:14'),
(602, '00028', 'Member Management', 'UPDATE', '::1', ' Avinash Kukarni ', '2023-08-01 11:38:02'),
(603, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 11:42:13'),
(604, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 11:43:59'),
(605, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 11:44:34'),
(606, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-01 11:48:47'),
(607, '00028', 'Member Management', 'UPDATE', '::1', ' Avinash Kukarni ', '2023-08-02 09:27:28'),
(608, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-02 07:48:32'),
(609, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-02 10:27:08'),
(610, '00028', 'Member Management', 'UPDATE', '::1', ' Rekha Paralkar ', '2023-08-02 10:28:42'),
(611, '00028', 'Member Management', 'UPDATE', '::1', ' DKT test ', '2023-08-02 10:52:34'),
(612, '00028', 'Member Registration', 'INSERT', '::1', '  ', '2023-08-03 09:33:22'),
(613, '00028', 'Member Management', 'UPDATE', '::1', ' demo purpose ', '2023-08-03 10:16:51'),
(614, '00028', 'Member Management', 'UPDATE', '::1', ' demo purpose ', '2023-08-03 10:18:05'),
(615, '00028', 'Member Management', 'UPDATE', '::1', ' demo purpose ', '2023-08-03 10:30:43'),
(616, '00028', 'Member Management', 'UPDATE', '::1', ' DKT test ', '2023-08-04 06:15:48'),
(617, '00028', 'Member Management', 'UPDATE', '::1', ' DKT test ', '2023-08-04 07:43:17'),
(618, '00028', 'Member Management', 'UPDATE', '::1', ' DKT test ', '2023-08-04 08:09:29'),
(619, '00028', 'Member Management', 'UPDATE', '::1', ' DKT test ', '2023-08-04 08:14:49'),
(620, '00028', 'Member Registration', 'INSERT', '::1', '  ', '2023-08-04 08:36:17'),
(621, '00028', 'Member Management', 'UPDATE', '::1', ' VIdya Kamtikar ', '2023-08-08 02:42:31'),
(622, '00028', 'Member Discharge', 'INSERT', '::1', ' B N Shrivastav ', '2023-08-08 08:56:17'),
(623, '00028', 'Member Discharge', 'INSERT', '::1', ' Rekha Paralkar ', '2023-08-08 08:59:34'),
(624, '00028', 'Member Management', 'UPDATE', '::1', ' Madhavi Kulkarni ', '2023-08-14 09:24:22'),
(625, '00002', 'User Roles', 'INSERT', '::1', 'Laboratory', '2023-09-10 03:26:05'),
(626, '00002', 'Designation', 'INSERT', '::1', 'Laboratory', '2023-09-10 03:26:50'),
(627, '00002', 'User', 'INSERT', '::1', 'lab lab lab', '2023-09-10 03:33:00'),
(628, '00002', 'User Roles', 'INSERT', '::1', 'Physiotherapist', '2023-09-10 03:39:24'),
(629, '00002', 'Designation', 'INSERT', '::1', 'Physiotherapist', '2023-09-10 03:40:00'),
(630, '00002', 'User', 'INSERT', '::1', 'physiotherapist physiotherapist physiotherapist', '2023-09-10 03:44:40'),
(631, '00028', 'Member Management', 'UPDATE', '::1', ' Madhavi Kulkarni ', '2023-09-15 12:16:38'),
(632, '00028', 'Member Management', 'UPDATE', '::1', ' DKT test ', '2023-09-15 01:39:50'),
(633, '00002', 'Company Information', 'INSERT', '::1', 'Assisted Living', '2023-09-17 07:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_category`
--

CREATE TABLE `medicine_category` (
  `cat_id` int(11) NOT NULL,
  `med_category_name` varchar(500) NOT NULL,
  `med_category_desc` text NOT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `medicine_category`
--

INSERT INTO `medicine_category` (`cat_id`, `med_category_name`, `med_category_desc`, `InActive`) VALUES
(1, 'ANTI-ALLERGIC', 'ANTI-ALLERGIC', 0),
(2, 'ANTI-ANXIETY', 'ANTI-ANXIETY', 0),
(4, 'ANTI-ARRHYTHMIA', 'ANTI-ARRHYTHMIA', 0),
(5, 'ANTI-ASTHMATIC', 'ANTI-ASTHMATIC', 0),
(6, 'ANTI-BACTERIAL', 'ANTI-BACTERIAL ', 0),
(7, 'ANTI-CHOLINERGICS', 'ANTI-CHOLINERGICS', 0),
(8, 'ANTI-CHOLINESTERASES', 'ANTI-CHOLINESTERASES', 0),
(9, 'ANTI-HIV', 'ANTI-HIV', 0),
(10, 'ANTI-INFECTIVE', 'ANTI-INFECTIVE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_drug_name`
--

CREATE TABLE `medicine_drug_name` (
  `drug_id` int(11) NOT NULL,
  `med_cat_id` int(11) NOT NULL,
  `cType` int(11) NOT NULL,
  `drug_name` varchar(500) NOT NULL,
  `drug_desc` text NOT NULL,
  `uom` int(11) NOT NULL,
  `re_order_level` float(11,2) NOT NULL,
  `nPrice` float(11,2) NOT NULL,
  `nStock` float(11,2) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `medicine_drug_name`
--

INSERT INTO `medicine_drug_name` (`drug_id`, `med_cat_id`, `cType`, `drug_name`, `drug_desc`, `uom`, `re_order_level`, `nPrice`, `nStock`, `InActive`) VALUES
(4, 1, 51, 'CYPROHEPTADINE', '', 55, 150.00, 60.00, 1500.00, 0),
(3, 2, 52, 'DIPHENHYDRAMINE', '', 55, 100.00, 25.00, 10000.00, 0),
(5, 3, 51, 'PROMETHAZINE', '', 55, 150.00, 50.00, 1500.00, 0),
(6, 4, 51, 'PHENIRAMINE', '', 55, 150.00, 45.00, 150.00, 0),
(7, 5, 51, 'CHLORPHENIRAMINE', '', 55, 15.00, 15.00, 250.00, 0),
(8, 6, 51, 'PYRILAMINE', '', 55, 150.00, 50.00, 150.00, 0),
(9, 5, 51, 'EPINEPHRINE', '', 55, 150.00, 45.00, 54000.00, 0),
(10, 8, 51, 'NITRIC OXIDE', '', 55, 155.00, 50.00, 2500.00, 0),
(11, 1, 51, 'ATROPINE', '', 55, 500.00, 25.00, 150.00, 0),
(12, 5, 51, 'ISOPROTERENOL', '', 55, 500.00, 50.00, 5000.00, 0),
(13, 11, 52, 'MEDICINE', '', 55, 0.00, 0.00, 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_module` varchar(50) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_link` varchar(50) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_module`, `page_name`, `page_link`, `InActive`) VALUES
(1, 'System Pages', 'Access to System Pages', 'pages', 0),
(2, 'System Pages', 'Add Page', 'add_page', 0),
(3, 'System Pages', 'Update Page', 'update_page', 0),
(4, 'System Pages', 'Delete Page', 'delete_page', 0),
(35, 'User Roles', 'Delete User Roles', 'delete_roles', 0),
(34, 'User Roles', 'Update User Roles', 'update_roles', 0),
(33, 'User Roles', 'Add User Roles', 'add_roles', 0),
(32, 'User Roles', 'Access to User Roles', 'roles', 0),
(28, 'Department', 'Access to Department', 'department', 0),
(29, 'Department', 'Add Department', 'add_department', 0),
(30, 'Department', 'Update Department', 'update_department', 0),
(31, 'Department', 'Delete Department', 'delete_department', 0),
(36, 'System User', 'Access to System User', 'view_user', 0),
(37, 'System User', 'Add User', 'add_user', 0),
(38, 'System User', 'Update User', 'update_user', 0),
(39, 'System User', 'Delete User', 'delete_user', 0),
(40, 'Designation', 'Access to Designation', 'designation', 0),
(41, 'Designation', 'Add Designation', 'add_designation', 0),
(42, 'Designation', 'Update Designation', 'update_designation', 0),
(43, 'Designation', 'Delete Designation', 'delete_designation', 0),
(44, 'Room Management', 'Access to Room Management', 'room_management', 0),
(45, 'Room Management', 'Add Room Management', 'add_room_management', 0),
(46, 'Room Management', 'Update Room Management', 'update_room_management', 0),
(47, 'Room Management', 'Delete Room Management', 'delete_room_management', 0),
(48, 'Patient Management', 'Add New Patient', 'add_new_patient', 0),
(49, 'Patient Management', 'Access to Patient Master', 'patient_master', 0),
(50, 'Patient Management', 'Patient Demographic', 'patient_demographic', 0),
(51, 'Patient Management', 'Modify Patient Information', 'modiffy_patient', 0),
(52, 'System Parameters', 'Access to System Parameters', 'parameters', 0),
(53, 'System Parameters', 'Add Parameters', 'add_sys_param', 0),
(54, 'System Parameters', 'Update Parameters', 'update_sys_param', 0),
(55, 'System Parameters', 'Delete Parameters', 'delete_sys_param', 0),
(56, 'Bill Group Name', 'Access to Bill Group Name', 'group_name', 0),
(57, 'Bill Group Name', 'Add Group Name', 'add_group_name', 0),
(58, 'Bill Group Name', 'Update Group Name', 'update_group_name', 0),
(59, 'Bill Group Name', 'Delete Group Name', 'delete_group_name', 0),
(60, 'Particular Bill', 'Access to Particular Bill', 'particular_bill', 0),
(61, 'Particular Bill', 'Add Particular Bill', 'add_particular_bill', 0),
(62, 'Particular Bill', 'Update Particular Bill', 'update_particular_bill', 0),
(63, 'Particular Bill', 'Delete Particular Bill', 'delete_particular_bill', 0),
(64, 'Diagnosis Master', 'Access to Diagnosis Master', 'diagnosis', 0),
(65, 'Diagnosis Master', 'Add Diagnosis Master', 'add_diagnosis', 0),
(66, 'Diagnosis Master', 'Update Diagnosis Master', 'update_diagnosis', 0),
(67, 'Diagnosis Master', 'Delete Diagnosis Master', 'delete_diagnosis', 0),
(68, 'Insurance Company', 'Access to Insurance Company', 'insurance_company', 0),
(69, 'Insurance Company', 'Add Insurance Company', 'add_insurance_company', 0),
(70, 'Insurance Company', 'Update Insurance Company', 'update_insurance_company', 0),
(71, 'Insurance Company', 'Delete Insurance Company', 'delete_insurance_company', 0),
(72, 'Complain Module', 'Access to Complain Module', 'complain', 0),
(73, 'Complain Module', 'Add Complain Module', 'add_complain', 0),
(74, 'Complain Module', 'Update Complain', 'update_complain', 0),
(75, 'Complain Module', 'Delete Complain', 'delete_complain', 0),
(76, 'Medicine Category', 'Access to Medicine Category', 'medicine_category', 0),
(77, 'Medicine Category', 'Add Medicine Category', 'add_medicine_category', 0),
(78, 'Medicine Category', 'Update Medicine Category', 'update_medical_category', 0),
(79, 'Medicine Category', 'Delete Medicine Category', 'delete_medical_category', 0),
(80, 'Drug Name Master', 'Access to Drug Name Master', 'drug_name', 0),
(81, 'Drug Name Master', 'Add Drug Name Master', 'add_drug_name', 0),
(82, 'Drug Name Master', 'Update Drug Name Master', 'update_drug_name', 0),
(83, 'Drug Name Master', 'Delete Drug Name Master', 'delete_drug_name', 0),
(84, 'Billing Module', 'Access to POS', 'pos', 0),
(85, 'Billing Module', 'Access to Billing List', 'billing_history', 0),
(86, 'OR History', 'Access to OR History', 'OR_history', 0),
(87, 'Reports', 'Daily Sales Reports', 'daily_reports', 0),
(88, 'Reports', 'Patient List Report', 'patient_list_report', 0),
(89, 'Doctor Module', 'OPD', 'doctor_opd', 0),
(90, 'Doctor Module', 'IPD', 'ipd_doctor', 0),
(91, 'Patient Management', 'OPD Registration', 'opd_registration', 0),
(92, 'Patient Management', 'OPD Enquiry', 'opd_enquiry', 0),
(93, 'Patient Management', 'IPD Registration', 'ipd_registration', 0),
(94, 'Patient Management', 'IPD Enquiry', 'ipd_enquiry', 0),
(95, 'EMR Sheet', 'OPD EMR', 'opd_emr', 0),
(96, 'EMR Sheet', 'IPD EMR', 'ipd_emr', 0),
(97, 'OPD Reports', 'Patient Diagnosis Reports', 'opd_diagnosis_reports', 0),
(98, 'Reports', 'Individual Patient  Reports', 'patient_visited_report', 0),
(99, 'Room Management', 'Room Enquiry', 'room_enquiry', 0),
(100, 'Nurse Module', 'Patient Medication', 'nurse_medication_reports', 0),
(101, 'Nurse Module', 'Intake/Output Record', 'nurse_intake_output_reports', 0),
(102, 'Nurse Module', 'Nurse Progress Note', 'nurse_progress_note_report', 0),
(103, 'Nurse Module', 'Patient Vital Sign', 'nurse_vital_sign_report', 0),
(104, 'Nurse Module', 'IP Room Transfer', 'nurse_room_transfer_report', 0),
(105, 'Nurse Module', 'Patient History', 'nurse_patientHistory_report', 0),
(106, 'Nurse Module', 'Patient Discharge Summary', 'nurse_discharge_summary_report', 0),
(107, 'Nurse Module', 'Bed Side Procedure', 'nurse_bed_side_procedure_report', 0),
(108, 'Reports', 'Out Patient Reports', 'outpatient_report', 0),
(109, 'Reports', 'Admitted Patient Reports', 'inpatient_report', 0),
(110, 'Reports', 'Discharged Patient', 'discharged_patient_report', 0),
(111, 'Company Information', 'Company Information', 'company_information', 0),
(112, 'Surgical Package', 'Access to Surgical Package', 'surgical_package', 0),
(113, 'Surgical Package', 'Add Surgical Package', 'add_surgical_package', 0),
(114, 'Surgical Package', 'Update Surgical Package', 'update_surgical_package', 0),
(115, 'Surgical Package', 'Delete Surgical Package', 'delete_surgical_package', 0),
(116, 'Billing Module', 'Surgical Quotation Costing', 'surgical_costing', 0),
(117, 'Acknowledge Receipt', 'Access to Acknowledge Receipt', 'declared_receipt', 0),
(118, 'Acknowledge Receipt', 'Delete  Acknowledge Receipt', 'delete_delaredOR', 0),
(119, 'Reports', 'Acknowledge Receipt Reports', 'declared_receipt_report', 0),
(120, 'Nurse Module', 'Nurse Diagnosis', 'nurse_diagnosis_reports', 0),
(121, 'Patient Appointment', 'Access to Appointment', 'appointment', 0),
(122, 'Patient Appointment', 'Add Appointment', 'add_appointment', 0),
(123, 'Patient Appointment', 'Edit Appointment', 'edit_appointment', 0),
(124, 'Patient Appointment', 'Delete Appointment', 'delete_appointment', 0),
(126, 'Patient Appointment', 'Check IN Patient', 'checkIN_appointment', 0),
(127, 'Backup Database', 'Create Backup of System Database', 'backup_database', 0),
(128, 'Nurse Module', 'Access to Nurse Module', 'access_nurse_module', 0),
(129, 'Doctor Module', 'Access to Doctor Module', 'access_doctor_module', 0),
(130, 'EMR Sheet', 'Access to EMR', 'access_emr_module', 0),
(131, 'Administration Module Tab', 'Access to Administration Module', 'access_administration_module', 0),
(132, 'Reports Generation Module Tab', 'Access to Reports Module', 'access_reports_module', 0),
(133, 'Reports', 'Doctor\'s Fee Report', 'doctor_fee_report', 0),
(134, 'Dashboard', 'Access to Doctors Availability', 'access_doctors_avail', 0),
(135, 'spero', 'gjhgjh', 'sper.com', 0),
(136, 'Patient Management', 'IPD Discharged', 'ipd_discharged', 0),
(137, 'Lab Module', 'Access to Lab Module', 'access_lab_module', 0),
(138, 'Lab Module', 'Lab Sample', 'lab_sample', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointment`
--

CREATE TABLE `patient_appointment` (
  `appID` bigint(20) NOT NULL,
  `patient_no` varchar(25) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appHour` tinyint(2) NOT NULL,
  `appMinutes` tinyint(2) NOT NULL,
  `appAMPM` varchar(10) NOT NULL,
  `appointmentTime` time NOT NULL,
  `appointmentReason` tinytext NOT NULL,
  `consultantDoctor` varchar(10) NOT NULL,
  `dateVisit` datetime NOT NULL,
  `appointmentStatus` char(1) NOT NULL,
  `dateEntry` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient_appointment`
--

INSERT INTO `patient_appointment` (`appID`, `patient_no`, `appointmentDate`, `appHour`, `appMinutes`, `appAMPM`, `appointmentTime`, `appointmentReason`, `consultantDoctor`, `dateVisit`, `appointmentStatus`, `dateEntry`) VALUES
(1, 'SSAL000027', '2023-06-02', 4, 16, 'AM', '04:16:00', 'tee', '00023', '2023-05-18 00:00:00', 'D', '2023-05-18 00:00:00'),
(3, 'SSAL000030', '2023-05-25', 1, 0, 'PM', '01:00:00', 'Heart pain', '00023', '0000-00-00 00:00:00', 'A', '2023-05-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient_attachment`
--

CREATE TABLE `patient_attachment` (
  `attach_id` int(11) NOT NULL,
  `patient_no` varchar(25) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `description` varchar(155) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `file_type` varchar(150) NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient_attachment`
--

INSERT INTO `patient_attachment` (`attach_id`, `patient_no`, `date_uploaded`, `uploaded_by`, `description`, `file_name`, `file_type`, `file_size`, `InActive`) VALUES
(1, 'SSAL00005', '2021-10-19 07:56:47', 13, 'abcd test demo1', 'alf_buglist.xlsx', 'application/vnd.ms-excel', '11.64', 0),
(2, 'SSAL00006', '2021-10-20 03:41:45', 13, 'abcd test demo1', 'Patient.php', 'text/x-php', '14.82', 0),
(3, 'SSAL000014', '2021-10-22 12:45:54', 13, 'abcd test demo1', 'Doctor_model1.php', 'text/x-php', '7.08', 1),
(4, 'SSAL000016', '2022-10-31 02:38:42', 13, 'test', 'date.png', 'image/png', '268.38', 1),
(5, 'SSAL000014', '2022-10-31 03:02:05', 13, 'xvdffv', 'KANISHA_FANSE.pdf', 'application/pdf', '192.75', 1),
(6, 'SSAL000017', '2022-10-31 03:54:27', 6, 'xvdffv', 'Handover_Sheet.xlsx', 'application/vnd.ms-excel', '10.09', 0),
(7, 'SSAL000017', '2022-10-31 05:32:53', 13, 'Demo', 'KANISHA_FANSE1.pdf', 'application/pdf', '192.75', 1),
(8, 'SSAL000017', '2022-10-31 05:32:57', 13, 'Demo', 'KANISHA_FANSE2.pdf', 'application/pdf', '192.75', 1),
(9, 'SSAL000017', '2022-10-31 05:33:33', 13, 'Demo', 'KANISHA_FANSE3.pdf', 'application/pdf', '192.75', 1),
(10, 'SSAL000014', '2022-11-08 11:36:22', 2, 'sdasd', 'amb.png', 'image/png', '63.34', 0),
(11, 'SSAL000015', '2023-04-20 10:56:57', 13, 'demo', 'profile.jpeg', 'image/jpeg', '67.06', 0),
(12, 'SSAL000029', '2023-05-23 02:49:18', 28, 'lkl;k', 'hdfc.txt', 'text/plain', '0.01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_chl`
--

CREATE TABLE `patient_chl` (
  `id` int(11) NOT NULL,
  `chl_name` varchar(100) DEFAULT NULL,
  `chl_add` varchar(500) DEFAULT NULL,
  `chl_mobile` varchar(15) DEFAULT NULL,
  `chl_email` varchar(100) DEFAULT NULL,
  `local_guardian_name` varchar(100) DEFAULT NULL,
  `guardian_add` varchar(500) DEFAULT NULL,
  `guardian_mobile` varchar(15) DEFAULT NULL,
  `guardian_email` varchar(15) DEFAULT NULL,
  `preasses_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_chl`
--

INSERT INTO `patient_chl` (`id`, `chl_name`, `chl_add`, `chl_mobile`, `chl_email`, `local_guardian_name`, `guardian_add`, `guardian_mobile`, `guardian_email`, `preasses_id`) VALUES
(1, 'ram', 'p', 'no', 'em@gmail.com', 'loc', 'addr', 'no', 'h@gmail.com', '1'),
(2, 'fd', 'fd', 'fdf', 'ffdfd@gmail.com', 'fdfd', 'fdfd', 'fdf', 'h@gmail.com', '2'),
(3, '', '', '', '', '', '', '', '', '3'),
(4, 'ram1', 'p', 'no', 'em@gmail.com', 'loc', 'addr', 'no', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details_discharge`
--

CREATE TABLE `patient_details_discharge` (
  `discharge_id` bigint(11) NOT NULL,
  `patient_no` varchar(15) NOT NULL,
  `title` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `civil_status` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `relation_with` varchar(25) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `religion` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `province` varchar(90) NOT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `phone_no_office` varchar(25) NOT NULL,
  `mobile_no` varchar(25) DEFAULT NULL,
  `email_address` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `blood_group` int(11) NOT NULL,
  `Insurance_comp` int(11) NOT NULL,
  `insurance_no` varchar(25) NOT NULL,
  `id_identifiers` text NOT NULL,
  `ptn_kco` varchar(200) NOT NULL,
  `ptn_chf_comp` varchar(200) NOT NULL,
  `ptn_fam_his` varchar(200) NOT NULL,
  `ptn_past_his` varchar(200) NOT NULL,
  `ptn_pulse` varchar(200) NOT NULL,
  `ptn_cvs` varchar(200) NOT NULL,
  `ptn_bp` varchar(200) NOT NULL,
  `ptn_cns` varchar(200) NOT NULL,
  `ptn_spo2` varchar(200) NOT NULL,
  `ptn_localex` varchar(200) NOT NULL,
  `ptn_temp` varchar(200) NOT NULL,
  `ptn_um` varchar(200) NOT NULL,
  `ptn_pa` varchar(200) NOT NULL,
  `ptn_rs` varchar(200) NOT NULL,
  `ptn_foodin` varchar(200) NOT NULL,
  `ptn_sugess_medi` varchar(255) DEFAULT NULL,
  `ptn_addtnl_note` varchar(255) NOT NULL,
  `ptn_discharge_report` varchar(255) DEFAULT NULL,
  `rel_add` varchar(5000) DEFAULT NULL,
  `rel_city` varchar(255) DEFAULT NULL,
  `rel_phone` varchar(20) DEFAULT NULL,
  `relation_with2` varchar(255) DEFAULT NULL,
  `rel_add2` varchar(500) DEFAULT NULL,
  `rel_city2` varchar(255) DEFAULT NULL,
  `rel_phone2` varchar(15) DEFAULT NULL,
  `discharged_date` varchar(255) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient_details_discharge`
--

INSERT INTO `patient_details_discharge` (`discharge_id`, `patient_no`, `title`, `name`, `gender`, `civil_status`, `birthday`, `relation_with`, `age`, `religion`, `street`, `province`, `phone_no`, `phone_no_office`, `mobile_no`, `email_address`, `picture`, `blood_group`, `Insurance_comp`, `insurance_no`, `id_identifiers`, `ptn_kco`, `ptn_chf_comp`, `ptn_fam_his`, `ptn_past_his`, `ptn_pulse`, `ptn_cvs`, `ptn_bp`, `ptn_cns`, `ptn_spo2`, `ptn_localex`, `ptn_temp`, `ptn_um`, `ptn_pa`, `ptn_rs`, `ptn_foodin`, `ptn_sugess_medi`, `ptn_addtnl_note`, `ptn_discharge_report`, `rel_add`, `rel_city`, `rel_phone`, `relation_with2`, `rel_add2`, `rel_city2`, `rel_phone2`, `discharged_date`, `InActive`) VALUES
(1, 'SSAL000024', 7, 'demo', 1, 3, '1996-05-24', 'friend', 26, 22, 'pune', 'pune', '7058887396', '7058887396', '7878787878', 'demo@gmail.com', '', 31, 0, '', '', 'asthama', 'heart pain', 'sugar', 'NA', 'pulse', 'cvs', '120', 'cns', '120', 'le', '30', 'um', 'pa', 'rs', 'fi', 'demo', '', NULL, 'gopal nagar nanded', 'nanded', '7620997866', NULL, NULL, NULL, NULL, NULL, 0),
(2, 'SSAL000026', 7, 'spero', 1, 3, '2015-02-03', '', 8, 22, '', '', '', '', '', 'spero999@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(3, 'SSAL000022', 7, 'nagesh dawales', 1, 3, '1996-05-24', 'friend', 26, 22, 'pune', 'pune', '7058887396', '7058887396', '7058887396', 'nagesh@gmail.com', '', 31, 5, '1234567890', 'fdfdfd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'demo', '', NULL, 'gopal nagar nanded', 'nanded', '7620997866', NULL, NULL, NULL, NULL, NULL, 0),
(4, 'SSAL000023', 10, 'vinay shinde', 1, 3, '1996-05-24', 'friend', 27, 22, 'pune', 'pune', '7058887396', '7058887396', '7878787878', 'raj@gmail.com', '', 31, 5, '1234567890', 'ddsd', 'kco', 'cc', 'fh', 'ph', '50', '50', '120', '50', '80', 'le', '33', '120', 'pa', 'rs', 'fi', 'demo,demo1', '', NULL, 'gopal nagar nanded', 'nanded', '7620997866', NULL, NULL, NULL, NULL, NULL, 0),
(5, 'SSAL000036', 7, 'Sharadchandra Joshi', 1, 0, '1952-02-07', '', 71, 0, '', '', '', '', '', 'test6@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '2023-07-15', 0),
(6, 'SSAL000037', 9, 'Sharmila Sharadchandra Jo', 2, 0, '1947-05-24', '', 76, 0, '', '', '', '', '', 'test7@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '1690137000', 0),
(7, 'SSAL000033', 9, 'Sunanda Dattatray Phadke', 2, 74, '1945-01-31', '', 78, 22, 'Nirman House Padmakar Society, Karvenagar', 'Pune', '', '', '', 'sai42709@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '9767725340', '', '', '', '', '1690137000', 0),
(8, 'SSAL000062', 9, 'Meena Pai', 2, 4, '1940-08-17', 'son', 82, 22, 'A-602, Marvel selva ridge estate, Mulshi Rd.,Bhavd', 'PUNE', '', '8108884466', '9920884466', 'vinayak.pai@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 'A-602, Marvel selva ridge estate, Mulshi Rd.,Bhavdhan KH', 'PUNE', '9920884466', '', '', '', '', '1690137000', 0),
(9, 'SSAL000059', 9, 'Ashwini Patil', 2, 0, '2023-06-29', '', 0, 0, '', '', '', '', '', 'admin@averagelibor.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '1690309800', 0),
(10, 'SSAL000059', 9, 'Ashwini Patil', 2, 0, '2023-06-29', '', 0, 0, '', '', '', '', '', 'admin@averagelibor.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '1690309800', 0),
(11, 'SSAL000048', 7, 'B N Shrivastav', 1, 0, '2023-08-08', '', 0, 0, '', '', '', '', '', 'test18@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tab.Niftas  BD,Tab.Syndopa plus  1 TDS,Tab.Cilacar 10mg', '', NULL, '', '', '', '', '', '', '', '1691433000', 0),
(12, 'SSAL000034', 9, 'Rekha Paralkar', 2, 0, '0000-00-00', '', 53, 0, '', '', '', '', '', 'test3@gmail.com', '', 31, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '1691433000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details_iop`
--

CREATE TABLE `patient_details_iop` (
  `id` bigint(11) NOT NULL,
  `IO_ID` varchar(15) NOT NULL,
  `patient_no` varchar(15) NOT NULL,
  `patient_type` varchar(255) NOT NULL,
  `date_visit` date NOT NULL,
  `time_visit` time NOT NULL,
  `doctor_id` varchar(15) NOT NULL,
  `refferal_doctor` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `provisional_diagnosis` text NOT NULL,
  `complaints` text NOT NULL,
  `allergies` text NOT NULL,
  `warnings` text NOT NULL,
  `social_history` text NOT NULL,
  `family_history` text NOT NULL,
  `personal_history` text NOT NULL,
  `past_medical_history` text NOT NULL,
  `pulse_rate` varchar(150) NOT NULL,
  `temperature` varchar(150) NOT NULL,
  `height` varchar(150) NOT NULL,
  `bp` varchar(150) NOT NULL,
  `respiration` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `nStatus` varchar(15) NOT NULL,
  `InActive` int(1) NOT NULL,
  `isPaid` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient_details_iop`
--

INSERT INTO `patient_details_iop` (`id`, `IO_ID`, `patient_no`, `patient_type`, `date_visit`, `time_visit`, `doctor_id`, `refferal_doctor`, `room_id`, `department_id`, `provisional_diagnosis`, `complaints`, `allergies`, `warnings`, `social_history`, `family_history`, `personal_history`, `past_medical_history`, `pulse_rate`, `temperature`, `height`, `bp`, `respiration`, `weight`, `nStatus`, `InActive`, `isPaid`) VALUES
(10, 'IP-SSAL000023', 'SSAL000023', 'Cancer Care', '2023-05-02', '12:33:35', '00023', 0, 2, 0, 'diagnosis', 'complaint', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(17, 'IP-SSAL000030', 'SSAL000032', 'Dementia Care', '2023-06-30', '10:52:39', '00027', 0, 28, 0, 'NIL', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(18, 'IP-SSAL000031', 'SSAL000033', 'Dementia Care', '2023-06-30', '10:56:16', '00027', 0, 30, 0, 'NIL', 'nil', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(19, 'IP-SSAL000032', 'SSAL000034', 'Healthy Elderly Care', '2023-06-30', '11:12:22', '00027', 0, 31, 0, 'Commment', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(20, 'IP-SSAL000033', 'SSAL000035', 'Healthy Elderly Care', '2023-06-30', '11:16:28', '00027', 0, 23, 0, 'Parkinsons', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(21, 'IP-SSAL000034', 'SSAL000036', 'Healthy Elderly Care', '2023-06-30', '11:20:58', '00027', 0, 22, 0, 'Post THR care', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(22, 'IP-SSAL000035', 'SSAL000037', 'Healthy Elderly Care', '2023-06-30', '11:25:41', '00027', 0, 32, 0, 'NIL', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(23, 'IP-SSAL000036', 'SSAL000039', 'Healthy Elderly Care', '2023-06-30', '11:45:37', '00027', 0, 42, 0, 'NIL', 'NIl', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(24, 'IP-SSAL000037', 'SSAL000040', 'Healthy Elderly Care', '2023-06-30', '11:51:04', '00027', 0, 25, 0, 'NIL', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(25, 'IP-SSAL000038', 'SSAL000041', 'Healthy Elderly Care', '2023-06-30', '12:04:51', '00027', 0, 27, 0, 'Post op care', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(26, 'IP-SSAL000039', 'SSAL000038', 'Healthy Elderly Care', '2023-06-30', '02:46:35', '00027', 0, 26, 0, 'NIL', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(27, 'IP-SSAL000040', 'SSAL000042', 'Healthy Elderly Care', '2023-06-30', '03:12:44', '00027', 0, 29, 0, 'NA', 'NA', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(28, 'IP-SSAL000041', 'SSAL000043', 'Healthy Elderly Care', '2023-06-30', '03:55:19', '00027', 0, 33, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(29, 'IP-SSAL000042', 'SSAL000044', 'Healthy Elderly Care', '2023-06-30', '04:10:52', '00027', 0, 13, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(30, 'IP-SSAL000043', 'SSAL000045', 'Healthy Elderly Care', '2023-06-30', '04:16:05', '00027', 0, 34, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(31, 'IP-SSAL000044', 'SSAL000046', 'Terminally Ill', '2023-06-30', '04:20:31', '00027', 0, 16, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(32, 'IP-SSAL000045', 'SSAL000047', 'Healthy Elderly Care', '2023-06-30', '04:24:30', '00027', 0, 15, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(33, 'IP-SSAL000046', 'SSAL000053', 'Healthy Elderly Care', '2023-06-30', '04:44:29', '00027', 0, 36, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(34, 'IP-SSAL000047', 'SSAL000052', 'Healthy Elderly Care', '2023-06-30', '04:46:10', '00027', 0, 9, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(35, 'IP-SSAL000048', 'SSAL000051', 'Healthy Elderly Care', '2023-06-30', '04:47:39', '00027', 0, 6, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(36, 'IP-SSAL000049', 'SSAL000050', 'Healthy Elderly Care', '2023-06-30', '04:48:57', '00027', 0, 8, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(37, 'IP-SSAL000050', 'SSAL000049', 'Healthy Elderly Care', '2023-06-30', '04:50:06', '00027', 0, 7, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(38, 'IP-SSAL000051', 'SSAL000048', 'Post Stroke', '2023-06-30', '04:51:37', '00027', 0, 10, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(39, 'IP-SSAL000052', 'SSAL000055', 'Cancer Care', '2023-07-01', '02:26:50', '00027', 0, 24, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(40, 'IP-SSAL000053', 'SSAL000056', 'Dementia Care', '2023-07-03', '10:01:40', '00028', 0, 21, 0, 'diagnosis', 'complaint', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(41, 'IP-SSAL000054', 'SSAL000054', 'Rehab Care', '2023-07-04', '10:00:20', '00027', 0, 37, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(42, 'IP-SSAL000055', 'SSAL000057', 'Healthy Elderly Care', '2023-07-04', '11:08:25', '00027', 0, 14, 0, 'Hypertension', 'none', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(43, 'IP-SSAL000056', 'SSAL000058', 'Healthy Elderly Care', '2023-07-05', '02:17:04', '00027', 0, 5, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(44, 'IP-SSAL000057', 'SSAL000059', 'Dementia Care', '2023-07-07', '06:11:01', '00023', 0, 35, 0, 'na', 'na', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(45, 'IP-SSAL000058', 'SSAL000060', 'Parkinson’s Care', '2023-07-11', '03:12:54', '00027', 0, 38, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(46, 'IP-SSAL000059', 'SSAL000061', 'Healthy Elderly Care', '2023-07-13', '11:42:06', '00027', 0, 4, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(47, 'IP-SSAL000060', 'SSAL000065', 'Healthy Elderly Care', '2023-07-24', '06:51:19', '00027', 0, 30, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(48, 'IP-SSAL000061', 'SSAL000064', 'Healthy Elderly Care', '2023-07-24', '06:54:59', '00027', 0, 40, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(49, 'IP-SSAL000062', 'SSAL000063', 'Healthy Elderly Care', '2023-07-24', '07:07:40', '00027', 0, 2, 0, 'Vertigo ', 'NA', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(50, 'IP-SSAL000063', 'SSAL000062', 'Healthy Elderly Care', '2023-07-24', '07:11:58', '00027', 0, 43, 0, 'Short stay admission', 'NIL', '', '', '', '', '', '', '', '', '', '', '', '', 'Discharged', 0, 0),
(51, 'IP-SSAL000064', 'SSAL000066', 'Dementia Care', '2023-07-25', '12:15:02', '00027', 0, 22, 0, 'DEMENTIA', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0),
(52, 'IP-SSAL000065', 'SSAL000067', 'Healthy Elderly Care', '2023-07-25', '12:19:35', '00027', 0, 32, 0, 'NA', 'NA', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_family`
--

CREATE TABLE `patient_family` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `sublings` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(100) DEFAULT NULL,
  `spouse_mobile` varchar(15) DEFAULT NULL,
  `family_add` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_family`
--

INSERT INTO `patient_family` (`id`, `preasses_id`, `father`, `mother`, `sublings`, `spouse_name`, `spouse_mobile`, `family_add`) VALUES
(1, '1', 'pandurang', 'mangal', 'sib', 'spous', 'spous cont', 'aa'),
(2, '2', 'fdfd', 'fdfd', 'fdfd', 'fd', 'fd', 'fd'),
(3, '3', '232', '32', '', '', '', ''),
(4, '4', 'pandurang1', 'mangal1', 'sib', 'spous', 'spous cont', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `patient_personal_info`
--

CREATE TABLE `patient_personal_info` (
  `reg_no` bigint(11) NOT NULL,
  `patient_no` varchar(15) NOT NULL,
  `title` int(11) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `middlename` varchar(25) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `upload_aadhar` varchar(255) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `civil_status` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(150) NOT NULL,
  `relative_name` varchar(150) DEFAULT NULL,
  `relation_with` varchar(25) DEFAULT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `age` int(3) NOT NULL,
  `religion` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `subd_brgy` varchar(90) NOT NULL,
  `province` varchar(90) NOT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `phone_no_office` varchar(25) NOT NULL,
  `mobile_no` varchar(25) DEFAULT NULL,
  `email_address` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date_entry` date NOT NULL,
  `blood_group` int(11) NOT NULL,
  `Insurance_comp` int(11) NOT NULL,
  `insurance_no` varchar(25) NOT NULL,
  `tpa_name` varchar(255) DEFAULT NULL,
  `tpa_no` varchar(200) DEFAULT NULL,
  `id_identifiers` text NOT NULL,
  `ptn_asses_form` varchar(255) DEFAULT NULL,
  `ptn_kco` varchar(200) NOT NULL,
  `ptn_chf_comp` varchar(200) NOT NULL,
  `ptn_fam_his` varchar(200) NOT NULL,
  `ptn_past_his` varchar(200) NOT NULL,
  `ptn_pulse` varchar(200) NOT NULL,
  `ptn_cvs` varchar(200) NOT NULL,
  `ptn_bp` varchar(200) NOT NULL,
  `ptn_cns` varchar(200) NOT NULL,
  `ptn_spo2` varchar(200) NOT NULL,
  `ptn_localex` varchar(200) NOT NULL,
  `ptn_temp` varchar(200) NOT NULL,
  `ptn_um` varchar(200) NOT NULL,
  `ptn_pa` varchar(200) NOT NULL,
  `ptn_rs` varchar(200) NOT NULL,
  `ptn_mobi` int(200) NOT NULL,
  `ptn_foodin` varchar(200) NOT NULL,
  `ptn_sugess_medi` varchar(255) DEFAULT NULL,
  `ptn_addtnl_note` varchar(255) NOT NULL,
  `from_hospital_walkin` varchar(255) DEFAULT NULL,
  `discharge_report` varchar(255) DEFAULT NULL,
  `rel_name1` varchar(255) DEFAULT NULL,
  `rel_name2` varchar(255) DEFAULT NULL,
  `rel_add` varchar(5000) DEFAULT NULL,
  `rel_city` varchar(255) DEFAULT NULL,
  `rel_phone` varchar(20) DEFAULT NULL,
  `relation_with2` varchar(200) DEFAULT NULL,
  `rel_add2` varchar(500) DEFAULT NULL,
  `rel_city2` varchar(255) DEFAULT NULL,
  `rel_phone2` varchar(15) DEFAULT NULL,
  `previous_discharge_report` varchar(5000) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient_personal_info`
--

INSERT INTO `patient_personal_info` (`reg_no`, `patient_no`, `title`, `lastname`, `firstname`, `middlename`, `aadhar_no`, `upload_aadhar`, `gender`, `civil_status`, `birthday`, `birthplace`, `relative_name`, `relation_with`, `address1`, `address2`, `age`, `religion`, `street`, `subd_brgy`, `province`, `phone_no`, `phone_no_office`, `mobile_no`, `email_address`, `picture`, `date_entry`, `blood_group`, `Insurance_comp`, `insurance_no`, `tpa_name`, `tpa_no`, `id_identifiers`, `ptn_asses_form`, `ptn_kco`, `ptn_chf_comp`, `ptn_fam_his`, `ptn_past_his`, `ptn_pulse`, `ptn_cvs`, `ptn_bp`, `ptn_cns`, `ptn_spo2`, `ptn_localex`, `ptn_temp`, `ptn_um`, `ptn_pa`, `ptn_rs`, `ptn_mobi`, `ptn_foodin`, `ptn_sugess_medi`, `ptn_addtnl_note`, `from_hospital_walkin`, `discharge_report`, `rel_name1`, `rel_name2`, `rel_add`, `rel_city`, `rel_phone`, `relation_with2`, `rel_add2`, `rel_city2`, `rel_phone2`, `previous_discharge_report`, `InActive`) VALUES
(1, 'SSAL000022', 7, '', '', 'nagesh dawales', NULL, NULL, 1, 3, '1996-05-24', '', NULL, 'friend', '', '', 26, 22, 'pune', '', 'pune', '7058887396', '7058887396', '7058887396', 'nagesh@gmail.com', '', '2023-05-02', 31, 5, '1234567890', NULL, NULL, 'fdfdfd', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'demo', '', 'walk in', 'Process2.pdf', NULL, NULL, 'gopal nagar nanded', 'nanded', '7620997866', NULL, NULL, NULL, NULL, NULL, 1),
(3, 'SSAL000024', 7, '', '', 'demo', NULL, NULL, 1, 3, '1996-05-24', '', NULL, 'friend', '', '', 26, 22, 'pune', '', 'pune', '7058887396', '7058887396', '7878787878', 'demo@gmail.com', '', '2023-05-10', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'demo', '', 'walk in', '', NULL, NULL, 'gopal nagar nanded', 'nanded', '7620997866', NULL, NULL, NULL, NULL, NULL, 1),
(20, 'SSAL000037', 9, '', '', 'Sharmila Sharadchandra Jo', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 77, 0, '', '', '', '', '', '', 'test7@gmail.com', '', '2023-05-04', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 1),
(19, 'SSAL000036', 7, '', '', 'Sharadchandra Joshi', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 85, 0, '', '', '', '', '', '', 'test6@gmail.com', '', '2023-05-04', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'Hospital post hipp replacement', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 1),
(5, 'SSAL000023', 10, '', '', 'vinay shinde', NULL, NULL, 1, 3, '1996-05-24', '', NULL, 'friend', '', '', 26, 22, 'pune', '', 'pune', '7058887396', '7058887396', '7878787878', 'raj@gmail.com', '', '2023-05-02', 31, 5, '1234567890', NULL, NULL, 'ddsd', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'demo,demo1', '', 'walk in', '', NULL, NULL, 'gopal nagar nanded', 'nanded', '7620997866', NULL, NULL, NULL, NULL, NULL, 1),
(17, 'SSAL000034', 9, '', '', 'Rekha Paralkar', '1234', NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 85, 0, '', '', '', '', '', '', 'test3@gmail.com', '', '2023-06-30', 31, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 1),
(18, 'SSAL000035', 9, '', '', 'Madhavi Kulkarni', '', NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 73, 0, 'pune', '', '', '', '', '', 'test5@gmail.com', '', '2023-01-06', 31, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 't.syndopa plus,t.qutan 2.5,t. donamen,t.stamlo 5mg,t.ecosprin 75/20,t.nexpro 40,t. restyl 0.5,syp. zincovit,syp. calcimax,syp. duphalac', '', 'Walkin', '', '', '', '', '', '', '', '', '', '', '', 0),
(16, 'SSAL000033', 9, '', '', 'Sunanda Dattatray Phadke', NULL, NULL, 2, 74, '0000-00-00', '', NULL, '', '', '', 86, 22, 'Nirman House Padmakar Society, Karvenagar', '', 'Pune', '', '', '', 'sai42709@gmail.com', '', '2023-03-01', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'Walkin', '', NULL, NULL, '', '', '9767725340', '', '', '', '', NULL, 1),
(15, 'SSAL000032', 9, '', '', 'Kshama Jayant Majumdar', NULL, NULL, 2, 74, '0000-00-00', '', NULL, 'Shirish', '', '', 86, 22, '62, Shailesh Society, Ganesh Nagar', '', 'Pune', '', '', '', 'test@spero.com', '', '2023-06-22', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Syp.Geriforte 5ml OD,Tab.Cipcal 500mg 1/2 OD,Tab.Combiflam SOS', '', 'Walkin', '', NULL, NULL, '', '', '9822498167', '', '', '', '', NULL, 0),
(21, 'SSAL000038', 7, '', '', 'Pradip Jog', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 75, 0, '', '', '', '', '', '', 'test8@gmail.com', '', '2023-01-07', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(22, 'SSAL000039', 9, '', '', 'Vijaya Vaijapurkar', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 81, 0, '', '', '', '', '', '', 'test9@gmail.com', '', '2023-05-29', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 't. stamlo 5mg,t.cardace 5mg,t. livipil 500mg,t.zitamet 20/500,', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(23, 'SSAL000040', 9, '', '', 'Sarojini Patel', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 96, 0, '', '', '', '', '', '', 'test10@gmail.com', '', '2023-01-03', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T. Cilakar 10 mg,Neurobion fort,Nebistar 2.5mg,Thyronoram 12.5 mg,Crocin 650 mg,Brufen,T. Shelcal 500 mg,Sy. Adulasa,Itone Eye drop,Levin Inhaler,', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(24, 'SSAL000041', 9, '', '', 'Manda Dattatrya Pawar', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 79, 0, '', '', '', '', '', '', 'test11@gmail.com', '', '2023-04-24', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 't.neomercazole 5mg,glycomet sr 500 mg,t.cardace,t.stamlo 5 mg,t. orofer xt,t. pan', '', 'Hospital post OP', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(25, 'SSAL000042', 9, '', '', 'Srilekha Sane', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 83, 0, '', '', '', '', '', '', 'test12@gmail.com', '', '2023-01-16', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 't. bio d3,t.telma 40 mg,t.ecosprin 75/20,t.sompraz-d,t. stugeron 10 mg,t. stalopam 0.5 mg', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(26, 'SSAL000043', 7, '', '', 'Diwakar Joshi', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 87, 0, '', '', '', '', '', '', 'test13@gmail.com', '', '2023-05-17', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T.levipil-500mg,t.fabuset-40,T.neurobion fort,T.benalgis,T.Prostina,T,Ecosprin AV75 MG,T.Revetol', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(27, 'SSAL000044', 7, '', '', 'Dattatrya Chande', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 86, 0, '', '', '', '', '', '', 'test14@gmail.com', '', '2023-05-17', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- erita LN 40mg(od),T- thyronoram 50mg (od),T- rosedays (od),T- calcitab (od),T-  nevup (od),T- LNBI CDC  10MG (od)', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(28, 'SSAL000045', 9, '', '', 'Chaya Deshpande', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 78, 0, '', '', '', '', '', '', 'test15@gmail.com', '', '2023-06-16', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- telsar beta 25mg (bd),T- prazopress XL 5mg (bd),T- Pioglit 15mg (od),T- Nexito 20mg (od),T- tonact ASP 75mg(od),CAP- bio-D3 (od),T- galvas 50/500mg(od)', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(29, 'SSAL000046', 7, '', '', 'Mohan Gulrajani', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 87, 0, '', '', '', '', '', '', 'test16@gmail.com', '', '2023-05-08', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'Ustav Homes', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(30, 'SSAL000047', 7, '', '', 'Deokishan Moolchand', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 81, 0, '', '', '', '', '', '', 'test17@gmail.com', '', '2023-06-24', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Tab.Esogress D  OD,Tab.Donep 5mg BD,Tab.Domstal 10mg SOS,Tab.Admentas 5mg BD,Tab.Restyl 0.25mg (1)HS,t.niftas,', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(31, 'SSAL000048', 7, '', '', 'B N Shrivastav', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 76, 0, '', '', '', '', '', '', 'test18@gmail.com', '', '2023-05-02', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Tab.Niftas  BD,Tab.Syndopa plus  1 TDS,Tab.Cilacar 10mg', '', 'Chellaram Hospital', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 1),
(32, 'SSAL000049', 9, '', '', 'Pratibha Vichare', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 64, 0, '', '', '', '', '', '', 'test19@gmail.com', '', '2023-04-08', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(33, 'SSAL000050', 9, '', '', 'Sheela Godbole', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 86, 0, '', '', '', '', '', '', 'test20@gmail.com', '', '2023-06-07', 31, 0, '', NULL, NULL, '', NULL, 'Hypertension, Dementia, Onset of Alzhimer', '', 'NOT SIGNIFICANT', 'Dementia, Hypertension, Onset of alzhimer  \r\nSurgical history not significant', '82 b/min', 'S1,S2 Heard', '150/70 mmhg', 'Oriented to time,place and event', '95%', '', '96', 'NORMAL', '', '', 0, 'Renal Diet due to Dehydration and ARF', 'Tab.Nikoran 5mg TDS,Tab.Restyl 0.25mg 1/2 HS,Cap.Clopitab A OD,Tab.Dytor  OD,Cap.Veloz D  OD,Tab.Losar OD,Tab.Donamin OD,Tab.Supracal 1/2 OD,Cap.A to Z Gold  OD,Syp.Kesol 5ml TDS (SOS),Syp.Duphalac SOS,Tab.Orofer XT OD', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(34, 'SSAL000051', 9, '', '', 'Usha Bhat', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 85, 0, '', '', '', '', '', '', 'test21@gmail.com', '', '2023-03-16', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- dytor 5mg (od),T- storvas cv 10mg (od),T- cardace 5mg (od),T- AMLOPIN 5MG (OD),T- urotone 25mg (bd),T- supracal prot (od),T- multivite gold (od),T- pan-D (od),T- rivaban 20mg (od),', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(35, 'SSAL000052', 7, '', '', 'Janardhan Sharveghar', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 79, 0, '', '', '', '', '', '', 'test22@gmail.com', '', '2023-05-05', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T-telmikind,T- pregaba 75mg,T- ecosprin AV 75mg', '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(36, 'SSAL000053', 7, '', '', 'Avinash Kukarni', '', NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 70, 0, '', '', '', '', '', '', 'test23@gmail.com', '', '2023-03-31', 31, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'Walkin', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(37, 'SSAL000054', 7, '', '', 'Prabhakar Waikar', NULL, NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 76, 0, '', '', '', '', '', '', 'test24@gmail.com', '', '2023-04-04', 31, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'Walkin', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(38, 'SSAL000055', 7, '', '', 'DKT test', '12323', 'discharge_report_(22).pdf', 1, 4, '0000-00-00', '', NULL, '', '', '', 78, 0, '', '', '', '', '', '', 'test25@gmail.com', '', '2023-07-01', 31, 0, '', '', '', '', NULL, 'Cancer', '', '', '', '80', '', '120/80', '', '98', '', '96', '', '', '', 0, '', 'Dolo 650,Doxy 1,parachuta,Pan D', '', 'Walkin', '', 'balaji pandurang muttepawar', 'rel name 2', 'balajimuttepawar7058@gmail.com', '', '', '', '', '', '', '', 0),
(39, 'SSAL000056', 7, '', '', 'TTK', '', NULL, 1, 0, '0000-00-00', '', NULL, '', '', '', 53, 0, '', '', '', '', '', '', 'test67@gmail.com', '', '2023-07-03', 31, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'crocin,Evion (20mg),,,Syndopa  250mg', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(40, 'SSAL000057', 7, '', '', 'Gurunath Ghotage', NULL, NULL, 1, 3, '1923-07-03', '', NULL, 'DAUGHTER IN LAW', '', '', 100, 0, 'H-1022,AATHSHRI PEBBLE II , BAVDHAM, PUNE 411021', '', 'PUNE', '', '9819917779', '', 'nutanprakashghotge@gmail.com', '', '2023-07-04', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Tab.Enam 5mg  OD,Tab.Becozinc  OD,Tab.Ecosprin 75mg OD,Tab.Cipcal 500mg OD', '', '', '', NULL, NULL, 'Nutan p Ghotge, H-1002, Atharshri pebble II , Bavdhan, pune,411021', 'pune', '9819917779', '', '', '', '', NULL, 0),
(41, 'SSAL000058', 9, '', '', 'Dongre Mangala', NULL, NULL, 2, 74, '0000-00-00', '', NULL, 'son', '', '', 95, 22, 'Athashri, G 1 -905, Bavdhan ', '', 'pune', '', '9869252063', '', 'sunildongre.091160@gmail.com', '', '2023-07-04', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- symphytum off 30mg (bd),T- arnica M 200mg (bd),T-quicfarc (od),T- proxym ER (od),T- bonestar K2 (od),calcinase nasal spray (od),T- stoplos A plus ( once a week),T- zolfresh 5mg (od)', '', 'Walk in', '', NULL, NULL, 'Athashri, G 1 -905, Bavdhan ', 'pune', '', '', '', '', '', NULL, 0),
(42, 'SSAL000059', 9, '', '', 'Ashwini Patil', NULL, NULL, 2, 0, '0000-00-00', '', NULL, '', '', '', 53, 0, '', '', '', '', '', '', 'admin@averagelibor.com', '', '2023-07-07', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'na', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 1),
(43, 'SSAL000060', 7, '', '', 'Mujumdar Shrikant', NULL, NULL, 1, 0, '1947-02-20', '', NULL, 'Amruta Kulkarni', '', '', 76, 22, 'Flat no. B2/207, Pebbles I  Socity, Patil nager, N', '', 'PUNE', '', '9557498884', '', 'amruta1966@rediffmail.com', '', '2023-07-07', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- syndopa plus (bd),sodamint (bd),t. autrin (od),t.oleanz (od)', '', 'walk in', '', NULL, NULL, 'Flat no. B2/207, Pebbles I  Socity, Patil nager, Near DSK Ranwara, Bandhan ,Pune 411021', 'pune', '9557498884', '', '', '', '', NULL, 0),
(44, 'SSAL000061', 9, '', '', 'KUSUM BHAVISKAR', NULL, NULL, 2, 4, '1933-12-22', '', NULL, 'Nephew', '', '', 89, 22, 'c/o Lt. Gen Satish Nawathe, 201, Ankoorshree c.h.s', '', 'PUNE', '', '9422023930', '', 'satishnawathe@yahoo.co.in', '', '2023-04-01', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- amtas 5mg,T-shelcal 500mg', '', 'walk in', '', NULL, NULL, 'c/o Lt. Gen Satish Nawathe, 201, Ankoorshree c.h.s., lane 3, Happy colony, Karve rd., Kothrud,', 'pune', '9422023930', '', '', '', '', NULL, 0),
(45, 'SSAL000062', 9, '', '', 'Meena Pai', NULL, NULL, 2, 4, '1940-08-17', '', NULL, 'son', '', '', 83, 22, 'A-602, Marvel selva ridge estate, Mulshi Rd.,Bhavd', '', 'PUNE', '', '8108884466', '9920884466', 'vinayak.pai@gmail.com', '', '2023-06-15', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'walk in', '', NULL, NULL, 'A-602, Marvel selva ridge estate, Mulshi Rd.,Bhavdhan KH', 'PUNE', '9920884466', '', '', '', '', NULL, 1),
(46, 'SSAL000063', 9, '', '', 'Vandana Waikar', NULL, NULL, 2, 4, '1949-09-13', '', NULL, 'DAUGHTER ', '', '', 74, 22, 'c-13, vijay complex, shastri nagar, kothrud', '', 'PUNE', '', '9822882154', '', 'varshakul@gmail.com', '', '2023-04-04', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- CTD 6.25MG (od),T- stamlo 5mg (od),T- ramistar 2.5mg (od),T- tripaleacal forte (od),T- vertin 16mg(od),T- MCBM 69mg (od),T- bilovas (od),T- foracort 200mg,SYP- notropil (bd)', '', 'walk in', '', NULL, NULL, 'c-13, vijay complex, shastri nagar, kothrud', 'pune', '9822882154', '', '', '', '', NULL, 0),
(47, 'SSAL000064', 7, '', '', 'Vaze Keshav', NULL, NULL, 1, 4, '0000-00-00', '', NULL, '', '', '', 88, 22, '', '', '', '', '', '', 'test65@gmail.com', '', '2023-07-18', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'T- levothyroxine 50mg (od),T- glimepride 1mg (od),T-  metformin 500mg (bd),T- galvas met 50/500mg (od),T- senna-docusal (od),T- b.comlex (od),T- vit-E (od),dorzolamide HCI eye drop(bd),latanoprost phthalmic drop (od),clobetasol propionatr crem (od)', '', 'walk in', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(48, 'SSAL000065', 9, '', '', 'Usha Ranade', NULL, NULL, 2, 74, '1945-10-29', '', NULL, '', '', '', 78, 22, '', '', '', '', '', '', 'ranadesand@gmail.com', '', '2023-07-22', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'walk in', '', NULL, NULL, '', '', '', '', '', '', '', NULL, 0),
(49, 'SSAL000066', 7, '', '', 'Velankar Anil', NULL, NULL, 1, 4, '1940-01-01', '', NULL, 'DAUGHTER ', '', '', 79, 22, '22, PUSHKAR, B.W.PATHARE MARG, DADAR', '', 'MUMBAI', '', '9930601938', '', 'test68@gmail.com', '', '2023-07-24', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'walk in', '', NULL, NULL, '22, PUSHKAR, B.W.PATHARE MARG, DADAR', 'MUMBAI', '9930601938', '', '', '', '', NULL, 0),
(50, 'SSAL000067', 9, '', '', 'Aparna Anil Velankar', NULL, NULL, 2, 4, '1940-01-01', '', NULL, 'DAUGHTER ', '', '', 75, 22, '22 pushkar, b.w.pathare marg., Dadar', '', 'MUMBAI', '', '9930601938', '', 'state56@gmail.com', '', '2023-07-24', 0, 0, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'walk in', '', NULL, NULL, '22 pushkar, b.w.pathare marg., Dadar', 'MUMBAI', '9930601938', '', '', '', '', NULL, 0),
(51, 'SSAL000068', 9, '', '', 'VIdya Kamtikar', '', NULL, 2, 4, '1940-01-01', '', NULL, '', '', '', 70, 0, '', '', '', '', '', '', 'state63@gmail.com', '', '2023-07-30', 0, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'del,crocine', '', 'walk in', '', '', '', '', '', '', '', '', '', '', '', 0),
(52, 'SSAL000069', 7, '', '', 'demo purpose', '', '', 1, 3, '0000-00-00', '', NULL, '', '', '', 53, 0, '', '', '', '', '', '', 'demopur@gmail.com', '', '2023-08-03', 31, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 'profile.jpeg', '', '', '', '', '', '', '', '', '', 'sun2.jpg,sun3.jpg', 0),
(53, 'SSAL000070', 7, '', '', 'demopp', '', '', 1, 3, '2005-08-04', '', NULL, '', '', '', 17, 0, '', '', '', '', '', '', 'demopp@gmail.com', '', '2023-08-04', 31, 0, '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL, '', 'hosp', 'sun.jpg', '', '', '', '', '', '', '', '', '', 'discharge_report_(22).pdf,download.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_preassessment`
--

CREATE TABLE `patient_preassessment` (
  `preasses_id` int(11) NOT NULL,
  `preasses_name` varchar(100) NOT NULL,
  `preasses_gender` varchar(10) NOT NULL,
  `preasses_age` varchar(3) NOT NULL,
  `preasses_religion` varchar(50) NOT NULL,
  `preasses_marital_status` varchar(50) NOT NULL,
  `preasses_add` varchar(500) NOT NULL,
  `preasses_mobile` varchar(15) NOT NULL,
  `preasses_email` varchar(100) NOT NULL,
  `preasses_aadhar` varchar(20) NOT NULL,
  `head` varchar(255) NOT NULL,
  `neck` varchar(255) NOT NULL,
  `ears` varchar(255) NOT NULL,
  `hearing` varchar(255) NOT NULL,
  `hearing_aid` varchar(5) NOT NULL,
  `nose` varchar(255) NOT NULL,
  `throat` varchar(255) NOT NULL,
  `eye` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `spectacles` varchar(255) NOT NULL,
  `cataract` varchar(255) NOT NULL,
  `glaucoma` varchar(255) NOT NULL,
  `oral_exam` varchar(255) NOT NULL,
  `tumour` varchar(255) NOT NULL,
  `dental_exam` varchar(255) NOT NULL,
  `dentures` varchar(255) NOT NULL,
  `tongue` varchar(255) NOT NULL,
  `skin` varchar(255) NOT NULL,
  `potenchial` varchar(255) NOT NULL,
  `bruises` varchar(255) NOT NULL,
  `rashes` varchar(255) NOT NULL,
  `bed_sore` varchar(255) NOT NULL,
  `pedal_oedema` varchar(255) NOT NULL,
  `dvt` varchar(255) NOT NULL,
  `varicose_veins` varchar(255) NOT NULL,
  `foot_exam` varchar(255) NOT NULL,
  `diet` varchar(255) NOT NULL,
  `habits` varchar(255) NOT NULL,
  `exercise` varchar(255) NOT NULL,
  `physiotherapy_service` varchar(5) NOT NULL,
  `temp` varchar(5) NOT NULL,
  `pulse` varchar(5) NOT NULL,
  `bp` varchar(5) NOT NULL,
  `rr` varchar(10) NOT NULL,
  `spo2` varchar(10) NOT NULL,
  `rs` varchar(255) NOT NULL,
  `cardiovascular_sys` varchar(255) NOT NULL,
  `gastrointestinal_sys` varchar(255) NOT NULL,
  `genito_urinary_sys` varchar(255) NOT NULL,
  `neurological_sys` varchar(255) NOT NULL,
  `musculoskeletal_sys` varchar(255) NOT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `any_other` varchar(255) DEFAULT NULL,
  `total_no_of_error` varchar(255) DEFAULT NULL,
  `clock_score` varchar(10) DEFAULT NULL,
  `clock_remark` varchar(255) DEFAULT NULL,
  `geriatric_score` varchar(10) DEFAULT NULL,
  `geriatric_remark` varchar(255) DEFAULT NULL,
  `time_up_go_score` varchar(10) DEFAULT NULL,
  `chair_stand_score` varchar(10) DEFAULT NULL,
  `last_taken_medicine_date` varchar(100) DEFAULT NULL,
  `date_entry` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_preassessment`
--

INSERT INTO `patient_preassessment` (`preasses_id`, `preasses_name`, `preasses_gender`, `preasses_age`, `preasses_religion`, `preasses_marital_status`, `preasses_add`, `preasses_mobile`, `preasses_email`, `preasses_aadhar`, `head`, `neck`, `ears`, `hearing`, `hearing_aid`, `nose`, `throat`, `eye`, `vision`, `spectacles`, `cataract`, `glaucoma`, `oral_exam`, `tumour`, `dental_exam`, `dentures`, `tongue`, `skin`, `potenchial`, `bruises`, `rashes`, `bed_sore`, `pedal_oedema`, `dvt`, `varicose_veins`, `foot_exam`, `diet`, `habits`, `exercise`, `physiotherapy_service`, `temp`, `pulse`, `bp`, `rr`, `spo2`, `rs`, `cardiovascular_sys`, `gastrointestinal_sys`, `genito_urinary_sys`, `neurological_sys`, `musculoskeletal_sys`, `drug_name`, `food`, `any_other`, `total_no_of_error`, `clock_score`, `clock_remark`, `geriatric_score`, `geriatric_remark`, `time_up_go_score`, `chair_stand_score`, `last_taken_medicine_date`, `date_entry`, `updated_date`, `InActive`) VALUES
(1, 'demo', '', '27', '', '', 'pune', '7058887396', 'demo@gmail.com', '1234567890', 'head', 'ssa', 'assa', 'sa', 'No', 'dsds', 'dsds', 'dsd', 'dsd', 'No', 'Right', 'No', 'sdds', 'ds', 'ds', 'Yes', 'sds', 'dss', 'dsds', 'ds', 'ds', 'f', 'df', 'd', 'dffd', 'gf', 'ds', 'demo', 'dsds', 'Yes', 'temp', 'pulse', 'bp', 'rr', 'ds', 'rs p', 'sds', 'dsds', 'sdd', 'sds', 'dsd', 'drug', 'food', 'ssa', 'sd', 'ds', 'ds', 'ds', 'ds', 'time score', 'stand scor', '2023-09-11', '2014-01-01', NULL, 0),
(2, 'demo1', 'Male', '27', 'Hindu', 'Single', 'pune1', '7890898989', 'demo1@gmail.com', '123456789', 'fdfd', 'fd', 'assa', 'sa', 'Yes', 'dsds', 'dsds', 'dsd', 'dsd', 'Yes', 'Right', 'Yes', 'sdds', 'ds', 'ds', 'Yes', 'sds', 'dss', 'dsds', 'ds', 'ds', 'f', 'df', 'd', 'dffd', 'gf', 'ds', 'dfd', 'dsds', 'Yes', 'd', 'fd', 'fd', 'fd', 'ddf', 'fd', 'fd', 'fd', 'fd', 'fdfd', 'fd', 'fdfd', 'fd', 'ssa', '322', '32', 'ds', '322', 'ds', 'time score', '23', '2023-09-13', '2023-09-13', NULL, 0),
(3, 'demo2', '', '', 'Hindu', 'Divorced', 'pune1', '7890898989', 'demo2@gmail.com', '23332', 'fdfd', 'ssa', 'assa', 'sa', 'Yes', 'dsds', 'dsds', 'dsd', 'dsd', 'Yes', 'Right', 'Yes', 'sdds', 'ds', 'ds', 'Yes', 'sds', '', '', 'ds', 'ds', '', '', '', '', '', '', '', '', 'Yes', 'd', 'fd', '', '', '', '', '', '', '', '', '', 'we', 'fd', 'w', '', '', '', '', '', 'time score', '23', '', '2023-09-13', NULL, 0),
(4, 'ffd', '', '27', 'Hindu', 'Married', 'pune1', '7890898989', 'dffd@gmail.com', '23332', 'fdfd', 'ssa', 'assa', 'sa', 'Yes', 'dsds', 'dsds', 'dsd', 'dsd', 'Yes', 'Right', 'Yes', 'sdds', 'ds', 'ds', 'Yes', 'sds', 'dss', 'dsds', 'ds', 'ds', 'f', 'df', 'd', 'dffd', 'gf', 'ds', 'dfd', 'dsds', 'Yes', 'd', 'fd', 'fd', 'fd', 'ds', 'dfd', 'sd', '', '', '', '', 'fdfd', 'fd', 'ssa', '', '', '', '', '', '', '', '', '2023-09-14', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_psychological_cond`
--

CREATE TABLE `patient_psychological_cond` (
  `id` int(11) NOT NULL,
  `preasses_id` int(11) NOT NULL,
  `aggression` varchar(100) NOT NULL,
  `violence` varchar(100) DEFAULT NULL,
  `bed_restrain` varchar(100) DEFAULT NULL,
  `wandering` varchar(100) DEFAULT NULL,
  `sleep` varchar(100) DEFAULT NULL,
  `giver_care` varchar(100) DEFAULT NULL,
  `diagnostic_test` varchar(255) DEFAULT NULL,
  `typical_day_appl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_psychological_cond`
--

INSERT INTO `patient_psychological_cond` (`id`, `preasses_id`, `aggression`, `violence`, `bed_restrain`, `wandering`, `sleep`, `giver_care`, `diagnostic_test`, `typical_day_appl`) VALUES
(1, 1, 'Occasionally', 'Verbally Abusive', 'Required Temporarily', 'Night Time', 'Required sedation', 'Occasionally', 'ds', 'sd'),
(2, 2, 'NA', 'No', 'No', 'No', 'Able to sleep', 'Occasionally', 'ds', 'sd'),
(3, 3, 'NA', 'No', 'No', 'No', 'Able to sleep', 'NA', '', ''),
(4, 4, 'NA', 'No', 'No', 'No', 'Able to sleep', 'NA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_type`
--

CREATE TABLE `patient_type` (
  `patient_type_id` int(20) NOT NULL,
  `patient_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_type`
--

INSERT INTO `patient_type` (`patient_type_id`, `patient_type`) VALUES
(1, 'Terminally Ill'),
(2, 'Post Stroke'),
(3, 'Healthy Elderly Care'),
(4, 'Cancer Care'),
(7, 'Post TKR - ***Only if able to sit/stand onwards 4th Day'),
(8, 'Post Covid Care'),
(9, 'Dementia Care'),
(10, 'Parkinson’s Care'),
(11, 'Palliative Care'),
(12, 'Rehab Care');

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_barthel_index`
--

CREATE TABLE `preassessment_barthel_index` (
  `barthel_id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `bowels_score` varchar(10) DEFAULT NULL,
  `bladder_score` varchar(10) DEFAULT NULL,
  `toilet_score` varchar(10) DEFAULT NULL,
  `bathing_score` varchar(10) DEFAULT NULL,
  `grooming_score` varchar(10) DEFAULT NULL,
  `dressing_score` varchar(10) DEFAULT NULL,
  `feeding_score` varchar(10) DEFAULT NULL,
  `transfer_score` varchar(10) DEFAULT NULL,
  `mobility_score` varchar(10) DEFAULT NULL,
  `stairs_score` varchar(10) DEFAULT NULL,
  `total_barthel_score` varchar(10) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preassessment_barthel_index`
--

INSERT INTO `preassessment_barthel_index` (`barthel_id`, `preasses_id`, `bowels_score`, `bladder_score`, `toilet_score`, `bathing_score`, `grooming_score`, `dressing_score`, `feeding_score`, `transfer_score`, `mobility_score`, `stairs_score`, `total_barthel_score`, `InActive`) VALUES
(1, '1', '2', '3', '2', '2', '2', '2', '2', '2', '2', '2', '21', 0),
(2, '3', '9', '4', '5', '8', '9', '8', '8', '9', '1', '1', '90', 0),
(3, '4', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_fall_risk_questions`
--

CREATE TABLE `preassessment_fall_risk_questions` (
  `fall_risk_id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `questions` varchar(5000) NOT NULL,
  `answer` varchar(5000) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preassessment_fall_risk_questions`
--

INSERT INTO `preassessment_fall_risk_questions` (`fall_risk_id`, `preasses_id`, `questions`, `answer`, `InActive`) VALUES
(1, '1', 'you have fallen in the past year ?', 'yes', 0),
(2, '1', 'Do you use or have been advised to use a stick or walker to move around safely ?', 'yes', 0),
(3, '1', 'Do you feel unsteady while you are walking', 'yes', 0),
(4, '1', 'Do you steady yourself by holding onto furniture while walking at home?', 'yes', 0),
(5, '1', 'You are worried about falling?', 'yes', 0),
(6, '1', 'Do You need to push with your hands to stand up from a chair?', 'yes', 0),
(7, '1', 'Do You have some trouble to stepping up onto a curb?', 'yes', 0),
(8, '1', 'Do you often have to rush to the toilet?', 'yes', 0),
(9, '1', 'Have lost some feeling in your feet?', 'yes', 0),
(10, '1', 'Do you take medicine that sometimes make you feel light- headed or more tired than usual?', 'yes', 0),
(11, '1', 'Do you take medicine to help you sleep or improve your mood?', 'yes', 0),
(12, '1', 'I often feel sad or depressed', 'yes', 0),
(13, '1', 'Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling', 'yes', 0),
(14, '3', 'you have fallen in the past year?', 'no', 0),
(15, '3', 'Do you use or have been advised to use a stick or walker to move around safely?', 'no', 0),
(16, '3', 'Do you feel unsteady while you are walking', 'no', 0),
(17, '3', 'Do you steady yourself by holding onto furniture while walking at home?', 'no', 0),
(18, '3', 'You are worried about falling?', 'no', 0),
(19, '3', 'Do You need to push with your hands to stand up from a chair?', 'no', 0),
(20, '3', 'Do You have some trouble to stepping up onto a curb?', 'no', 0),
(21, '3', 'Do you often have to rush to the toilet?', 'no', 0),
(22, '3', 'Have lost some feeling in your feet?', 'no', 0),
(23, '3', 'Do you take medicine that sometimes make you feel light- headed or more tired than usual?', 'no', 0),
(24, '3', 'Do you take medicine to help you sleep or improve your mood?', '', 0),
(25, '3', 'I often feel sad or depressed', 'no', 0),
(26, '3', 'Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling', 'no', 0),
(27, '4', 'you have fallen in the past year?', '', 0),
(28, '4', 'Do you use or have been advised to use a stick or walker to move around safely?', '', 0),
(29, '4', 'Do you feel unsteady while you are walking', '', 0),
(30, '4', 'Do you steady yourself by holding onto furniture while walking at home?', '', 0),
(31, '4', 'You are worried about falling?', '', 0),
(32, '4', 'Do You need to push with your hands to stand up from a chair?', '', 0),
(33, '4', 'Do You have some trouble to stepping up onto a curb?', '', 0),
(34, '4', 'Do you often have to rush to the toilet?', '', 0),
(35, '4', 'Have lost some feeling in your feet?', '', 0),
(36, '4', 'Do you take medicine that sometimes make you feel light- headed or more tired than usual?', '', 0),
(37, '4', 'Do you take medicine to help you sleep or improve your mood?', '', 0),
(38, '4', 'I often feel sad or depressed', '', 0),
(39, '4', 'Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_immunization_his`
--

CREATE TABLE `preassessment_immunization_his` (
  `id` int(11) NOT NULL,
  `vac_type` varchar(255) DEFAULT NULL,
  `vac_name` varchar(255) DEFAULT NULL,
  `given_date` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `preasses_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preassessment_immunization_his`
--

INSERT INTO `preassessment_immunization_his` (`id`, `vac_type`, `vac_name`, `given_date`, `due_date`, `preasses_id`) VALUES
(1, 'Tetanus', 'ten_type1', '2023-08-01', '2023-08-02', '1'),
(2, 'Influenza', 'Influenza_type', '2023-08-03', '2023-08-04', '1'),
(3, 'Pneumococcal', 'Pneumococcal_type', '2023-08-05', '2023-08-06', '1'),
(4, 'Typhoid', 'Typhoid_type', '', '2023-08-08', '1'),
(5, 'Tetanus', 'ten_type1', '2023-09-13', '2023-09-13', '3'),
(6, 'Influenza', 'ten_type2', '2023-09-13', '2023-09-13', '3'),
(7, 'Pneumococcal', 'ten_typ3', '2023-09-13', '2023-09-13', '3'),
(8, 'Typhoid', 'ten_type4', '', '', '3'),
(9, 'Tetanus', 'ten_type1', '', '', '4'),
(10, 'Influenza', 'ten_type2', '', '', '4'),
(11, 'Pneumococcal', 'ten_type4', '', '', '4'),
(12, 'Typhoid', 'ten_type3', '', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_medicines`
--

CREATE TABLE `preassessment_medicines` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `medicine` varchar(255) DEFAULT NULL,
  `dose` varchar(255) DEFAULT NULL,
  `frequency` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preassessment_medicines`
--

INSERT INTO `preassessment_medicines` (`id`, `preasses_id`, `medicine`, `dose`, `frequency`, `duration`) VALUES
(3, '1', 'delpar1', 'm', '1', '1'),
(4, '1', 'cipla', 'm,a', '2', '2'),
(5, '2', 'delpar1', 'm,a', '2', '2'),
(6, '2', 'delpar2', 'm', '2', '2'),
(7, '2', 'delpar4', 'm,a,n', '1', '1'),
(8, '3', 'wew', 'ew', 'ew', 'ew'),
(9, '3', 'ww', 'ew', 'ew', 'ew');

-- --------------------------------------------------------

--
-- Table structure for table `price_history`
--

CREATE TABLE `price_history` (
  `price_history_id` int(11) NOT NULL,
  `nRef_ID` int(11) NOT NULL,
  `price` float(11,2) NOT NULL,
  `updatedBy` varchar(11) NOT NULL,
  `dDate` datetime NOT NULL,
  `action` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `price_history`
--

INSERT INTO `price_history` (`price_history_id`, `nRef_ID`, `price`, `updatedBy`, `dDate`, `action`, `InActive`) VALUES
(28, 38, 800.00, '00001', '2014-07-03 02:18:12', '', 0),
(27, 37, 200.00, '00001', '2014-07-03 02:17:59', '', 0),
(26, 36, 80.00, '00001', '2014-07-03 02:16:54', '', 0),
(25, 35, 145.00, '00001', '2014-07-03 02:16:44', '', 0),
(24, 34, 550.00, '00001', '2014-07-03 02:16:32', '', 0),
(23, 33, 660.00, '00001', '2014-07-03 02:16:24', '', 0),
(22, 32, 825.00, '00001', '2014-07-03 02:16:02', '', 0),
(21, 31, 150.00, '00001', '2014-07-03 02:15:17', '', 0),
(20, 30, 100.00, '00001', '2014-07-03 02:14:45', '', 0),
(19, 7, 165.00, '00001', '2014-06-24 02:27:55', '', 0),
(18, 16, 120.00, '00001', '2014-06-24 02:26:29', '', 0),
(17, 16, 100.00, '00001', '2014-06-24 02:17:39', '', 0),
(16, 29, 25.00, '00001', '2014-06-24 02:17:10', '', 0),
(29, 39, 550.00, '00001', '2014-07-03 02:18:23', '', 0),
(30, 40, 2000.00, '00001', '2014-07-03 02:18:52', '', 0),
(31, 41, 1500.00, '00001', '2014-07-03 02:19:02', '', 0),
(32, 42, 165.00, '00001', '2014-07-03 02:19:34', '', 0),
(33, 43, 145.00, '00001', '2014-07-03 02:19:45', '', 0),
(34, 44, 220.00, '00001', '2014-07-03 02:19:54', '', 0),
(35, 45, 220.00, '00001', '2014-07-03 02:20:03', '', 0),
(36, 46, 165.00, '00001', '2014-07-03 02:20:13', '', 0),
(37, 47, 220.00, '00001', '2014-07-03 02:20:23', '', 0),
(38, 48, 55.00, '00001', '2014-07-03 02:20:32', '', 0),
(39, 49, 295.00, '00001', '2014-07-03 02:20:43', '', 0),
(40, 50, 165.00, '00001', '2014-07-03 02:20:53', '', 0),
(41, 51, 500.00, '00001', '2014-07-03 02:21:31', '', 0),
(42, 52, 300.00, '00001', '2014-07-03 02:21:39', '', 0),
(43, 53, 1500.00, '00001', '2014-07-03 02:21:50', '', 0),
(44, 54, 3000.00, '00001', '2014-07-03 02:22:04', '', 0),
(45, 55, 300.00, '00001', '2014-07-03 02:22:12', '', 0),
(46, 56, 1500.00, '00001', '2014-07-03 02:22:21', '', 0),
(47, 57, 100.00, '00001', '2014-07-03 02:22:31', '', 0),
(48, 58, 1500.00, '00001', '2014-07-03 02:22:40', '', 0),
(49, 59, 700.00, '00001', '2014-07-03 02:23:33', '', 0),
(50, 60, 1000.00, '00001', '2014-07-03 02:23:42', '', 0),
(51, 61, 45.00, '00001', '2014-07-03 02:24:17', '', 0),
(52, 62, 35.00, '00001', '2014-07-03 02:24:30', '', 0),
(53, 63, 165.00, '00001', '2014-07-03 02:24:38', '', 0),
(54, 64, 330.00, '00001', '2014-07-03 02:24:48', '', 0),
(55, 65, 25.00, '00001', '2014-07-03 02:24:59', '', 0),
(56, 66, 715.00, '00001', '2014-07-03 02:25:07', '', 0),
(57, 67, 990.00, '00001', '2014-07-03 02:25:18', '', 0),
(58, 68, 255.00, '00001', '2014-07-03 02:25:28', '', 0),
(59, 69, 220.00, '00001', '2014-07-03 02:25:59', '', 0),
(60, 70, 825.00, '00001', '2014-07-03 02:26:10', '', 0),
(61, 71, 330.00, '00001', '2014-07-03 02:26:21', '', 0),
(62, 72, 660.00, '00001', '2014-07-03 02:26:31', '', 0),
(63, 73, 330.00, '00001', '2014-07-03 02:26:46', '', 0),
(64, 74, 330.00, '00001', '2014-07-03 02:26:55', '', 0),
(65, 75, 1430.00, '00001', '2014-07-03 02:27:07', '', 0),
(66, 76, 500.00, '00001', '2014-07-03 02:28:00', '', 0),
(67, 77, 100.00, '00001', '2014-07-03 02:28:12', '', 0),
(68, 78, 200.00, '00001', '2014-07-03 02:28:23', '', 0),
(69, 79, 100.00, '00001', '2014-07-03 02:28:33', '', 0),
(70, 80, 150.00, '00001', '2014-07-03 02:28:47', '', 0),
(71, 81, 650.00, '00001', '2014-07-03 02:29:19', '', 0),
(72, 82, 650.00, '00001', '2014-07-03 02:29:31', '', 0),
(73, 83, 610.00, '00001', '2014-07-03 02:29:40', '', 0),
(74, 84, 55.00, '00001', '2014-07-03 02:29:51', '', 0),
(75, 85, 880.00, '00001', '2014-07-03 02:30:00', '', 0),
(76, 86, 825.00, '00001', '2014-07-03 02:30:12', '', 0),
(77, 87, 660.00, '00001', '2014-07-03 02:30:56', '', 0),
(78, 88, 2000.00, '00001', '2014-07-03 02:31:08', '', 0),
(79, 89, 880.00, '00001', '2014-07-03 02:31:20', '', 0),
(80, 90, 1300.00, '00001', '2014-07-03 02:31:31', '', 0),
(81, 91, 600.00, '00001', '2014-07-03 02:31:46', '', 0),
(82, 92, 600.00, '00001', '2014-07-03 02:31:56', '', 0),
(83, 93, 1000.00, '00001', '2014-07-03 02:32:05', '', 0),
(84, 34, 1500.00, '00001', '2014-07-04 03:45:25', '', 0),
(85, 35, 500.00, '00001', '2014-07-23 09:39:07', '', 0),
(86, 94, 2500.00, '00001', '2014-07-23 01:21:55', '', 0),
(87, 95, 2500.00, '00001', '2014-07-23 01:22:16', '', 0),
(88, 96, 3000.00, '00001', '2014-07-23 01:22:30', '', 0),
(89, 97, 6000.00, '00001', '2014-07-23 01:22:44', '', 0),
(90, 98, 3000.00, '00001', '2014-07-23 01:22:55', '', 0),
(91, 99, 6000.00, '00001', '2014-07-23 01:23:05', '', 0),
(92, 100, 1000.00, '00001', '2014-07-23 01:23:36', '', 0),
(93, 101, 1500.00, '00001', '2014-07-23 01:23:49', '', 0),
(94, 102, 3000.00, '00001', '2014-07-23 01:23:58', '', 0),
(95, 103, 6000.00, '00001', '2014-07-23 01:24:08', '', 0),
(96, 104, 10000.00, '00001', '2014-08-12 03:00:53', '', 0),
(97, 105, 100.00, '00001', '2014-08-12 03:01:10', '', 0),
(98, 106, 100.00, '00001', '2014-08-12 03:01:23', '', 0),
(99, 107, 100.00, '00001', '2014-08-12 03:01:31', '', 0),
(100, 108, 100.00, '00001', '2014-08-12 03:01:40', '', 0),
(101, 109, 120.00, '00001', '2014-08-12 03:01:56', '', 0),
(102, 13, 500.00, '00002', '2021-09-17 04:01:27', '', 0),
(103, 12, 500.00, '00002', '2021-09-17 04:01:46', '', 0),
(104, 16, 500.00, '00002', '2021-09-17 04:02:43', '', 0),
(105, 17, 500.00, '00002', '2021-09-17 04:02:57', '', 0),
(106, 31, 500.00, '00002', '2021-09-17 04:03:11', '', 0),
(107, 18, 500.00, '00002', '2021-09-17 04:03:32', '', 0),
(108, 36, 500.00, '00002', '2021-09-17 04:03:48', '', 0),
(109, 19, 300.00, '00002', '2021-09-17 04:04:16', '', 0),
(110, 20, 300.00, '00002', '2021-09-17 04:04:39', '', 0),
(111, 19, 300.00, '00002', '2021-09-17 04:04:51', '', 0),
(112, 21, 500.00, '00002', '2021-09-17 04:05:05', '', 0),
(113, 1, 1000.00, '00002', '2021-09-17 04:31:53', '', 0),
(114, 2, 1000.00, '00002', '2021-09-17 04:32:08', '', 0),
(115, 3, 1000.00, '00002', '2021-09-17 04:32:22', '', 0),
(116, 4, 1000.00, '00002', '2021-09-17 04:32:36', '', 0),
(117, 5, 500.00, '00002', '2021-09-17 04:32:56', '', 0),
(118, 6, 500.00, '00002', '2021-09-17 04:33:14', '', 0),
(119, 7, 1000.00, '00002', '2021-09-17 04:33:31', '', 0),
(120, 8, 1000.00, '00002', '2021-09-17 04:33:46', '', 0),
(121, 9, 1000.00, '00002', '2021-09-17 04:34:02', '', 0),
(122, 1, 500.00, '00002', '2021-10-13 06:45:06', '', 0),
(123, 2, 500.00, '00002', '2021-10-13 06:45:29', '', 0),
(124, 3, 500.00, '00002', '2021-10-13 06:46:38', '', 0),
(125, 4, 500.00, '00002', '2021-10-13 06:47:20', '', 0),
(126, 5, 500.00, '00002', '2021-10-13 06:47:51', '', 0),
(127, 6, 500.00, '00002', '2021-10-13 06:48:25', '', 0),
(128, 7, 500.00, '00002', '2021-10-13 06:49:03', '', 0),
(129, 8, 500.00, '00002', '2021-10-13 06:49:47', '', 0),
(130, 9, 500.00, '00002', '2021-10-13 06:50:24', '', 0),
(131, 10, 500.00, '00002', '2021-10-13 06:51:17', '', 0),
(132, 11, 500.00, '00002', '2021-10-13 06:51:33', '', 0),
(133, 12, 500.00, '00002', '2021-10-13 06:52:05', '', 0),
(134, 13, 500.00, '00002', '2021-10-13 06:52:45', '', 0),
(135, 14, 500.00, '00002', '2021-10-13 06:53:07', '', 0),
(136, 15, 500.00, '00002', '2021-10-13 06:53:25', '', 0),
(137, 16, 500.00, '00002', '2021-10-13 06:53:47', '', 0),
(138, 17, 500.00, '00002', '2021-10-13 06:54:04', '', 0),
(139, 18, 500.00, '00002', '2021-10-13 06:54:30', '', 0),
(140, 19, 500.00, '00002', '2021-10-13 06:54:47', '', 0),
(141, 20, 500.00, '00002', '2021-10-13 06:55:10', '', 0),
(142, 21, 500.00, '00002', '2021-10-13 06:55:36', '', 0),
(143, 22, 500.00, '00002', '2021-10-13 06:55:57', '', 0),
(144, 23, 500.00, '00002', '2021-10-13 06:56:18', '', 0),
(145, 24, 500.00, '00002', '2021-10-13 06:56:41', '', 0),
(146, 25, 500.00, '00002', '2021-10-13 06:56:56', '', 0),
(147, 26, 500.00, '00002', '2021-10-13 06:57:21', '', 0),
(148, 27, 500.00, '00002', '2021-10-13 06:57:58', '', 0),
(149, 28, 500.00, '00002', '2021-10-13 06:58:20', '', 0),
(150, 29, 500.00, '00002', '2021-10-13 06:59:26', '', 0),
(151, 30, 500.00, '00002', '2021-10-13 06:59:44', '', 0),
(152, 31, 500.00, '00002', '2021-10-13 07:00:03', '', 0),
(153, 32, 500.00, '00002', '2021-10-13 07:00:21', '', 0),
(154, 33, 500.00, '00002', '2021-10-13 07:00:43', '', 0),
(155, 34, 500.00, '00002', '2021-10-13 07:01:00', '', 0),
(156, 35, 500.00, '00002', '2021-10-13 07:01:18', '', 0),
(157, 36, 500.00, '00002', '2021-10-13 07:01:38', '', 0),
(158, 37, 500.00, '00002', '2021-10-13 07:01:58', '', 0),
(159, 38, 500.00, '00002', '2021-10-13 07:02:23', '', 0),
(160, 39, 500.00, '00002', '2021-10-13 07:02:38', '', 0),
(161, 40, 500.00, '00002', '2021-10-13 07:08:57', '', 0),
(162, 41, 500.00, '00002', '2021-10-13 07:09:13', '', 0),
(163, 42, 500.00, '00002', '2021-10-13 07:09:35', '', 0),
(164, 43, 500.00, '00002', '2021-10-13 07:09:59', '', 0),
(165, 44, 500.00, '00002', '2021-10-13 07:10:28', '', 0),
(166, 45, 500.00, '00002', '2021-10-13 07:10:49', '', 0),
(167, 46, 500.00, '00002', '2021-10-13 07:11:25', '', 0),
(168, 47, 500.00, '00002', '2021-10-13 07:11:45', '', 0),
(169, 48, 500.00, '00002', '2021-10-13 07:12:32', '', 0),
(170, 49, 500.00, '00002', '2021-10-13 07:12:48', '', 0),
(171, 50, 500.00, '00002', '2021-10-13 07:13:12', '', 0),
(172, 51, 500.00, '00002', '2021-10-13 07:13:30', '', 0),
(173, 52, 500.00, '00002', '2021-10-13 07:13:45', '', 0),
(174, 53, 500.00, '00002', '2021-10-13 07:14:48', '', 0),
(175, 1, 1000.00, '00002', '2021-10-21 11:34:36', '', 0),
(176, 2, 1000.00, '00002', '2021-10-21 11:34:51', '', 0),
(177, 3, 1000.00, '00002', '2021-10-21 11:35:08', '', 0),
(178, 4, 500.00, '00002', '2021-10-21 11:35:36', '', 0),
(179, 5, 500.00, '00002', '2021-10-21 11:35:50', '', 0),
(180, 6, 500.00, '00002', '2021-10-21 11:36:03', '', 0),
(181, 7, 500.00, '00002', '2021-10-21 11:36:17', '', 0),
(182, 8, 500.00, '00002', '2021-10-21 11:37:30', '', 0),
(183, 9, 500.00, '00002', '2021-10-21 11:37:48', '', 0),
(184, 10, 500.00, '00002', '2021-10-21 11:38:05', '', 0),
(185, 11, 1000.00, '00002', '2021-10-21 11:38:41', '', 0),
(186, 12, 500.00, '00002', '2021-10-21 11:39:06', '', 0),
(187, 13, 1000.00, '00002', '2021-10-21 11:40:20', '', 0),
(188, 14, 500.00, '00002', '2021-10-21 11:40:40', '', 0),
(189, 15, 500.00, '00002', '2021-10-21 11:41:08', '', 0),
(190, 16, 0.00, '00002', '2021-10-21 11:42:00', '', 0),
(191, 54, 1000.00, '00002', '2023-04-17 10:06:35', '', 0),
(192, 17, 1000.00, '00002', '2023-06-30 12:16:03', '', 0),
(193, 18, 1000.00, '00002', '2023-06-30 12:16:49', '', 0),
(194, 19, 1000.00, '00002', '2023-06-30 12:17:13', '', 0),
(195, 20, 1000.00, '00002', '2023-06-30 12:22:15', '', 0),
(196, 21, 1000.00, '00002', '2023-06-30 12:25:00', '', 0),
(197, 22, 1000.00, '00002', '2023-06-30 12:31:07', '', 0),
(198, 23, 1000.00, '00002', '2023-06-30 12:31:35', '', 0),
(199, 24, 1000.00, '00002', '2023-06-30 12:32:15', '', 0),
(200, 25, 1000.00, '00002', '2023-06-30 12:32:44', '', 0),
(201, 17, 1000.00, '00002', '2023-06-30 12:33:00', '', 0),
(202, 26, 1000.00, '00002', '2023-06-30 12:33:28', '', 0),
(203, 27, 1000.00, '00002', '2023-06-30 12:35:16', '', 0),
(204, 28, 1000.00, '00002', '2023-06-30 12:35:35', '', 0),
(205, 29, 1000.00, '00002', '2023-06-30 12:40:12', '', 0),
(206, 30, 1000.00, '00002', '2023-06-30 12:40:42', '', 0),
(207, 31, 1000.00, '00002', '2023-06-30 12:41:09', '', 0),
(208, 32, 1000.00, '00002', '2023-06-30 12:41:59', '', 0),
(209, 33, 1000.00, '00002', '2023-06-30 12:43:14', '', 0),
(210, 12, 500.00, '00002', '2023-06-30 12:46:40', '', 0),
(211, 34, 1000.00, '00002', '2023-06-30 12:47:15', '', 0),
(212, 35, 1000.00, '00002', '2023-06-30 12:47:36', '', 0),
(213, 17, 1000.00, '00002', '2023-06-30 02:23:14', '', 0),
(214, 23, 1000.00, '00002', '2023-06-30 02:36:41', '', 0),
(215, 23, 1000.00, '00002', '2023-06-30 02:40:46', '', 0),
(216, 11, 1000.00, '00002', '2023-06-30 03:27:33', '', 0),
(217, 36, 1000.00, '00002', '2023-06-30 03:30:27', '', 0),
(218, 15, 1000.00, '00002', '2023-06-30 04:19:03', '', 0),
(219, 37, 1000.00, '00002', '2023-06-30 04:42:24', '', 0),
(220, 2, 1000.00, '00002', '2023-07-04 09:57:57', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_beds`
--

CREATE TABLE `room_beds` (
  `room_bed_id` int(11) NOT NULL,
  `room_master_id` int(11) NOT NULL,
  `bed_name` varchar(25) NOT NULL,
  `nStatus` varchar(15) NOT NULL,
  `patient_no` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_beds`
--

INSERT INTO `room_beds` (`room_bed_id`, `room_master_id`, `bed_name`, `nStatus`, `patient_no`, `InActive`) VALUES
(1, 1, 'Bed 1', 'Vacant', '', 0),
(2, 2, 'Bed 1', 'Occupied', 'IP-SSAL000062', 0),
(3, 3, 'Bed 1', 'Vacant', '', 0),
(4, 4, 'Bed 1', 'Occupied', 'IP-SSAL000059', 0),
(5, 5, 'Bed 1', 'Occupied', 'IP-SSAL000056', 0),
(6, 6, 'Bed 1', 'Occupied', 'IP-SSAL000048', 0),
(7, 7, 'Bed 1', 'Occupied', 'IP-SSAL000050', 0),
(8, 8, 'Bed 1', 'Occupied', 'IP-SSAL000049', 0),
(9, 9, 'Bed 1', 'Occupied', 'IP-SSAL000047', 0),
(10, 10, 'Bed 1', 'Vacant', '', 0),
(11, 11, '1', 'Vacant', '', 0),
(12, 12, 'Bed 2', 'Vacant', '', 0),
(13, 12, 'Bed 1', 'Occupied', 'IP-SSAL000042', 0),
(14, 13, 'Bed 1', 'Occupied', 'IP-SSAL000055', 0),
(15, 14, '1', 'Occupied', 'IP-SSAL000045', 0),
(16, 15, '1', 'Occupied', 'IP-SSAL000044', 0),
(17, 16, '1', 'Vacant', '', 0),
(18, 1, '1', 'Vacant', '', 0),
(19, 12, '1', 'Vacant', '', 0),
(40, 29, 'Bed 1', 'Occupied', 'IP-SSAL000061', 0),
(20, 17, 'Bed 1', 'Vacant', '', 0),
(21, 18, 'Bed 1', 'Occupied', 'IP-SSAL000053', 0),
(22, 19, 'Bed 1', 'Occupied', 'IP-SSAL000064', 0),
(23, 20, 'Bed 1', 'Occupied', 'IP-SSAL000033', 0),
(24, 21, 'Bed 1', 'Occupied', 'IP-SSAL000052', 0),
(25, 22, 'Bed 1', 'Occupied', 'IP-SSAL000037', 0),
(26, 23, 'Bed 1', 'Occupied', 'IP-SSAL000039', 0),
(27, 24, 'Bed 1', 'Occupied', 'IP-SSAL000038', 0),
(28, 24, 'bed 2', 'Occupied', 'IP-SSAL000030', 0),
(29, 25, 'Bed 1', 'Occupied', 'IP-SSAL000040', 0),
(30, 25, 'Bed 2', 'Occupied', 'IP-SSAL000060', 0),
(31, 26, 'Bed 1', 'Vacant', '', 0),
(32, 19, 'Bed 2', 'Occupied', 'IP-SSAL000065', 0),
(33, 30, 'Bed 1', 'Occupied', 'IP-SSAL000041', 0),
(34, 34, 'Bed 1', 'Occupied', 'IP-SSAL000043', 0),
(35, 32, 'Bed 1', 'Vacant', '', 0),
(36, 37, 'Bed 1', 'Occupied', 'IP-SSAL000046', 0),
(37, 2, 'Bed 2', 'Occupied', 'IP-SSAL000054', 0),
(38, 35, 'Bed 1', 'Occupied', 'IP-SSAL000058', 0),
(39, 35, 'Bed 2', 'Vacant', '', 0),
(41, 29, 'Bed 2', 'Vacant', '', 0),
(42, 18, 'Bed 2', 'Occupied', 'IP-SSAL000036', 0),
(43, 28, 'Bed 1', 'Vacant', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`category_id`, `category_name`, `category_desc`, `InActive`) VALUES
(1, 'Private Room', '1 bed', 0),
(2, 'Semi-private Room', '2 beds', 0),
(3, 'Suite', '2 Single Beds', 0),
(4, 'Office', 'Office', 0),
(5, 'suite2', '1 bed', 0),
(6, 'Test', 'Test', 1),
(7, 'Test', 'Test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_master`
--

CREATE TABLE `room_master` (
  `room_master_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `floor` int(11) NOT NULL,
  `room_rates` float(11,2) NOT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_master`
--

INSERT INTO `room_master` (`room_master_id`, `category_id`, `room_name`, `floor`, `room_rates`, `InActive`) VALUES
(1, 1, 'Room - 301', 3, 1000.00, 0),
(2, 1, 'Room - 303', 3, 1000.00, 0),
(3, 1, 'Room - 311', 3, 1000.00, 1),
(4, 2, 'Room - 304', 3, 500.00, 0),
(5, 2, 'Room - 305', 3, 500.00, 0),
(6, 2, 'Room - 306', 3, 500.00, 0),
(7, 2, 'Room - 307', 3, 500.00, 0),
(8, 2, 'Room - 308', 3, 500.00, 0),
(9, 2, 'Room - 309', 3, 500.00, 0),
(10, 2, 'Room - 310', 3, 500.00, 0),
(11, 1, 'Room - 404', 4, 1000.00, 0),
(12, 2, 'Room - 408', 4, 500.00, 0),
(13, 1, 'Room - 407', 4, 1000.00, 0),
(14, 2, 'Room - 406', 4, 500.00, 0),
(15, 3, 'Room - 401', 4, 1000.00, 0),
(16, 4, 'Room - 405', 4, 0.00, 1),
(17, 3, '201', 2, 1000.00, 0),
(18, 1, '202', 2, 1000.00, 0),
(19, 3, '203', 2, 1000.00, 0),
(20, 1, '204', 2, 1000.00, 0),
(21, 2, '205', 2, 1000.00, 0),
(22, 1, '206', 2, 1000.00, 0),
(23, 2, '207', 2, 1000.00, 0),
(24, 2, '208', 2, 1000.00, 0),
(25, 2, '209', 2, 1000.00, 0),
(26, 1, '210', 2, 1000.00, 0),
(27, 3, '401', 4, 1000.00, 0),
(28, 1, '402', 4, 1000.00, 0),
(29, 3, '403', 4, 1000.00, 0),
(30, 1, '404', 4, 1000.00, 0),
(31, 2, '405', 4, 1000.00, 0),
(32, 1, '406', 4, 1000.00, 0),
(33, 2, '407', 4, 1000.00, 0),
(34, 2, '409', 4, 1000.00, 0),
(35, 1, '410', 4, 1000.00, 0),
(36, 2, '404', 4, 1000.00, 0),
(37, 1, '302', 3, 1000.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `surgical_package`
--

CREATE TABLE `surgical_package` (
  `surgery_id` int(11) NOT NULL,
  `surgery_name` varchar(150) NOT NULL,
  `surgery_desc` text NOT NULL,
  `total_costs` float(11,2) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `surgical_package`
--

INSERT INTO `surgical_package` (`surgery_id`, `surgery_name`, `surgery_desc`, `total_costs`, `InActive`) VALUES
(3, 'Flexible Cystoscopy', 'Flexible Cystoscopy', 9100.00, 0),
(4, 'Sample Surgery', 'Sample Surgery', 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `surgical_package_t`
--

CREATE TABLE `surgical_package_t` (
  `m_id` int(11) NOT NULL,
  `surgery_id` int(11) NOT NULL,
  `surgery_item` varchar(150) NOT NULL,
  `cDesc` text NOT NULL,
  `costs` float(11,2) NOT NULL,
  `InActive` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `surgical_package_t`
--

INSERT INTO `surgical_package_t` (`m_id`, `surgery_id`, `surgery_item`, `cDesc`, `costs`, `InActive`, `date_created`) VALUES
(14, 3, '97', 'scar', 6000.00, 0, '2014-07-30 05:56:29'),
(13, 3, '76', 'Intra Articular Injections', 500.00, 0, '2014-07-30 05:56:12'),
(11, 3, '30', 'dsad', 100.00, 0, '2014-07-30 05:54:12'),
(12, 3, '94', 'Muscle Biopsy', 2500.00, 0, '2014-07-30 05:54:34'),
(10, 3, '12', 'Fdfsdf', 2200.00, 1, '2014-07-30 05:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `system_option`
--

CREATE TABLE `system_option` (
  `option_id` int(11) NOT NULL,
  `cCode` varchar(25) NOT NULL,
  `cValue` int(11) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `system_option`
--

INSERT INTO `system_option` (`option_id`, `cCode`, `cValue`, `InActive`) VALUES
(1, 'employee_no', 37, 0),
(2, 'patient_no', 70, 0),
(3, 'INPATIENTNO', 65, 0),
(4, 'OUTPATIENTNO', 26, 0),
(5, 'invoice_no', 26, 0),
(6, 'receipt_no', 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_parameters`
--

CREATE TABLE `system_parameters` (
  `param_id` bigint(11) NOT NULL,
  `cCode` varchar(50) NOT NULL,
  `cValue` varchar(50) NOT NULL,
  `cDesc` varchar(150) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `system_parameters`
--

INSERT INTO `system_parameters` (`param_id`, `cCode`, `cValue`, `cDesc`, `InActive`) VALUES
(1, 'gender', 'Male', '', 0),
(2, 'gender', 'Female', '', 0),
(3, 'civil_status', 'Single', '', 0),
(4, 'civil_status', 'Married', '', 0),
(5, 'civil_status', 'Legal Seperated', '', 0),
(6, 'civil_status', 'Divorced', '', 0),
(7, 'title_name', 'Mr.', '', 0),
(8, 'title_name', 'Ms.', '', 0),
(9, 'title_name', 'Mrs.', '', 0),
(10, 'title_name', 'Dr.', '', 0),
(11, 'religion', 'Roman Catholic', '', 0),
(12, 'religion', 'Muslim', '', 0),
(13, 'religion', 'Iglesia ni Cristo', '', 0),
(14, 'religion', 'Church of God', '', 0),
(15, 'religion', 'Evangelical', '', 0),
(16, 'religion', 'Born Again', '', 0),
(17, 'religion', 'Evangelical', '', 0),
(18, 'religion', 'El Shaddai', '', 0),
(19, 'religion', 'Church of the Nazarene', '', 0),
(20, 'religion', 'Seventh-Day Adventists', '', 0),
(21, 'religion', 'Chinese', '', 0),
(22, 'religion', 'Hindu', '', 0),
(23, 'religion', 'Judaism', '', 0),
(24, 'religion', 'Ang Dating Daan', '', 0),
(25, 'religion', 'Jehovah\'s Witnesses', '', 0),
(26, 'religion', 'Unitarian', '', 0),
(27, 'religion', 'Assemblies of God (Ilocos Norte)', '', 0),
(28, 'religion', 'Aglipayan ', '', 0),
(29, 'blood_type', 'O+', '', 0),
(30, 'blood_type', 'O-', '', 0),
(31, 'blood_type', 'A+', '', 0),
(32, 'blood_type', 'A-', '', 0),
(33, 'blood_type', 'B+', '', 0),
(34, 'blood_type', 'B-', '', 0),
(35, 'blood_type', 'AB+', '', 0),
(36, 'blood_type', 'AB-', '', 0),
(37, 'title_name', 'Dra.', 'Doctora', 1),
(45, 'gender', 'asd', '', 1),
(44, 'gender', 'x2', 'xxx2', 1),
(51, 'type_medicine', 'Generic', 'Generic', 0),
(52, 'type_medicine', 'Branded', 'Branded', 0),
(53, 'medicine_uom', 'Tablet', 'Tablet', 0),
(54, 'medicine_uom', 'Bottle', 'Bottle', 0),
(55, 'medicine_uom', 'Each', 'Each', 0),
(56, 'payment_type', 'CASH', 'CASH', 0),
(57, 'payment_type', 'CREDIT CARD', 'CREDIT CARD', 0),
(58, 'payment_type', 'INSURANCE COMPANY', 'INSURANCE COMPANY', 0),
(60, 'condition_upon_discharge', 'Improved', 'Improved', 0),
(61, 'condition_upon_discharge', 'Recovered', 'Recovered', 0),
(62, 'condition_upon_discharge', 'Expired', '', 0),
(63, 'condition_upon_discharge', 'Transferred', '', 0),
(64, 'reason_for_discount', 'Student', 'Student', 0),
(65, 'reason_for_discount', 'Senior Citizen', 'Senior Citizen', 0),
(66, 'reason_for_discount', 'Sample Reason here', 'Sample Reason here', 0),
(67, 'reason_for_discount', 'Person with Disablities', 'Person with Disablities', 0),
(68, 'reason_for_discount', 'Management Decision', 'Management Decision', 0),
(69, 'reason_for_discount', 'Below Poverty Line', 'Below Poverty Line', 0),
(70, 'reason_for_discount', 'Employee', 'Employee', 0),
(71, 'reason_for_discount', 'Member', 'Member', 0),
(72, 'gender', 'Any Other', '', 0),
(73, 'condition_upon_discharge', 'Recovering', 'Under state of recovery', 0),
(74, 'civil_status', 'Widow', '', 0),
(75, 'civil_status', 'Widower', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treating_doctor`
--

CREATE TABLE `treating_doctor` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) DEFAULT NULL,
  `appointment_poa` varchar(255) DEFAULT NULL,
  `poa_name` varchar(100) DEFAULT NULL,
  `poa_mobile` varchar(15) DEFAULT NULL,
  `poa_email` varchar(100) DEFAULT NULL,
  `poa_add` varchar(500) DEFAULT NULL,
  `tdoctor_name` varchar(100) DEFAULT NULL,
  `tdoctor_mobile` varchar(15) DEFAULT NULL,
  `tdoctor_email` varchar(100) DEFAULT NULL,
  `hospital_name` varchar(100) DEFAULT NULL,
  `diagnosis` varchar(255) DEFAULT NULL,
  `present_complaints` varchar(255) DEFAULT NULL,
  `past_history` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treating_doctor`
--

INSERT INTO `treating_doctor` (`id`, `preasses_id`, `appointment_poa`, `poa_name`, `poa_mobile`, `poa_email`, `poa_add`, `tdoctor_name`, `tdoctor_mobile`, `tdoctor_email`, `hospital_name`, `diagnosis`, `present_complaints`, `past_history`) VALUES
(1, '1', 'Yes', 'POA', 'c', 'cx@gmail.com', NULL, 'sasa', 'sa', 'ds@gmail.com', 'hn', 'dia', 'pc', 'ph'),
(2, '2', 'Yes', 'dfd', 'dfd', 'dfd@gmail.com', NULL, 'sds', 'ds', 'ds@gmail.com', 'hn', 'dia', 'pc', 'ph'),
(3, '3', 'Yes', '', '', '', NULL, '', '', '', '', '', '', ''),
(4, '4', 'Yes', 'dfd', 'c', 'cx@gmail.com', NULL, 'sasa', 'sa', 'ds@gmail.com', 'hn', 'dia', 'pc', 'ph');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `department` int(11) NOT NULL,
  `designation` int(11) NOT NULL,
  `user_role` int(11) NOT NULL,
  `cType` varchar(25) NOT NULL,
  `title` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `age` int(2) NOT NULL,
  `street` varchar(50) NOT NULL,
  `subd_brgy` varchar(50) NOT NULL,
  `province` char(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `gender` int(1) NOT NULL,
  `civil_status` int(1) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `email_address` varchar(75) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `doctorIsIn` varchar(10) NOT NULL,
  `doctorLastIn` varchar(25) NOT NULL,
  `doctorLastOut` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `department`, `designation`, `user_role`, `cType`, `title`, `lastname`, `firstname`, `middlename`, `age`, `street`, `subd_brgy`, `province`, `phone_no`, `mobile_no`, `gender`, `civil_status`, `birthday`, `birthplace`, `email_address`, `username`, `password`, `picture`, `doctorIsIn`, `doctorLastIn`, `doctorLastOut`, `InActive`) VALUES
(5, '00002', 1, 1, 1, '', 7, 'Ramos', 'Mark', 'S', 38, '', '', '', '', '', 1, 4, '1978-03-16', 'Cavite', 'sert@serttech.com', 'ioioio', '101a6ec9f938885df0a44f20458d2eb4', '', '0', '', '', 0),
(26, '00023', 0, 4, 5, '', 10, 'Benake', 'Dipali', 'S.', 40, '', '', '', '', '', 2, 4, '1983-02-15', '', 'shivrudra@sperohealthcare.in', '00023', 'b11694dde7e8d764e4df6296192dceae', '', '', '', '', 0),
(27, '00024', 0, 2, 3, '', 10, 'Upadhye', 'Ajeya', 'V', 62, '', '', '', '', '', 1, 4, '1961-04-02', '', 'ajeyaupadhye@sperohealthcare.in', '00024', '192e05df53d8c509c70d965f160b2764', '', '', '', '', 0),
(28, '00025', 0, 5, 7, '', 8, 'Kamble', 'Ragini', 'M', 53, '', '', '', '', '', 2, 4, '0000-00-00', '', 'doctoraastha@sperohealthcare.in', '00025', 'd18365f4422dbb44c340aedd47bdb977', '', '', '', '', 0),
(29, '00026', 0, 5, 7, '', 8, 'Nivale', 'Nilam', 'S.', 31, '', '', '', '', '', 2, 4, '1992-06-04', '', 'hhc.managerspero@gmail.com', '00026', '0b0c3ddb9f9a02d136e81f56578ce0f6', '', '', '', '', 1),
(30, '00027', 0, 4, 5, '', 10, 'Choudhary', 'Neha', 'S.', 25, '', '', '', '', '', 2, 4, '1997-12-10', '', 'test@spero.com', '00027', '437dfd4f6ece12c68811f5834f4e66da', '', '', '', '', 0),
(31, '00028', 0, 4, 5, '', 10, 'Muttepawar', 'balaji', 'pandurang', 26, '320', 'khau gali wadgoan pune', 'pune', '7058887396', '7058887396', 1, 3, '1996-05-23', 'somthana', 'balaji@gmail.com', '00028', '44c5b1fa6d03919fe56a8a42466de5b8', '', '', '', '', 0),
(32, '00029', 0, 2, 3, '', 7, 'polshetwar', 'rajesh', 'ram', 0, 'fndfnsfns', 'khau gali wadgoan pune', '', 'sdgdgfdkjgdkfjg', 'gjdhgkjdhgjkhd', 1, 3, '2023-05-16', 'pune', 'rajesh@gmail.com', '00029', '372792e64b3dba136d148b7f09802353', '', '', '', '', 0),
(33, '00030', 0, 5, 7, '', 9, 'momin', 'ashfiya', 'ashish', 26, '322', 'khau gali wadgoan pune', 'pune', '7058887396', '7878787878', 2, 4, '1996-05-24', 'pune', 'ashfiya@gmail.com', '00030', 'abb8bd4ecaf31f0b0ea130b1a2f69029', '', '', '', '', 0),
(34, '00031', 0, 4, 5, '', 10, 'demo', 'demo', 'demo', 24, '', '', '', '', '', 1, 4, '1999-06-24', 'nanded', 'demo@gmail.com', '00031', '9cfb5f23ee109818209226896f626430', '', '', '', '', 0),
(35, '00032', 0, 5, 7, '', 8, 'Boin', 'Divya', 'S', 22, '', '', '', '', '', 2, 0, '2000-12-22', '', 'divya.spero@gmail.com', '00032', '265e55767506f36fe931af28952b1c85', '', '', '', '', 0),
(36, '00033', 0, 5, 7, '', 9, 'Wasnik', 'Harsha', 'Asit', 38, '', '', '', '', '', 2, 0, '1985-02-21', '', 'test18@gmail.com', '00033', '636016caaea9a54468d437ea7d49b75a', '', '', '', '', 0),
(37, '00034', 0, 2, 3, '', 8, 'Bhangale', 'Kavita', 'Ashok', 43, '', '', '', '', '', 2, 0, '1979-10-12', '', 'kavita@sperohealthcare.in', '00034', '37ac3d27a7879bfd31724688e2aa15c3', '', '', '', '', 0),
(38, '00035', 0, 5, 7, '', 8, 'Lahane', 'Shital', 'S.', 23, '', '', '', '', '', 2, 0, '1999-07-12', '', 'shitall.spero@gmail.com', '00035', 'ba5df677787384c5e55ee2ae04d4b84a', '', '', '', '', 0),
(39, '00036', 0, 11, 10, '', 9, 'lab', 'lab', 'lab', 20, '', '', '', '', '', 2, 4, '2003-03-10', 'nanded', 'lab@gmail.com', '00036', 'd418d0a470a233802f83829763a3eb4f', '', '', '', '', 0),
(40, '00037', 0, 12, 11, '', 7, 'physiotherapist', 'physiotherapist', 'physiotherapist', 27, '', '', '', '', '', 1, 4, '1996-05-24', 'nanded', 'physiotherapist@gmail.com', '00037', '033b151e8d017a2129ec401f7eb078b3', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `module` varchar(50) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_description` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `module`, `role_name`, `role_description`, `InActive`) VALUES
(1, '0', 'Super Admin', 'Full Access of the entire system', 0),
(2, 'administrator', 'Administrator and CEO', 'Minimal supervision', 0),
(3, '0', 'Coordinator', 'Help Desk Officer', 0),
(5, 'doctor', 'Doctor', 'Doctor', 0),
(6, 'billing', 'Billing / Cashier', 'Billing / Cashier', 0),
(7, '0', 'Nurse Roles', 'Nurse Roles', 0),
(8, '0', 'hfhf', 'jgjg', 1),
(9, '0', 'IT DEPARTMENT', 'IT ADMIN', 0),
(10, '', 'Laboratory', 'Laboratory', 0),
(11, '', 'Physiotherapist', 'Physiotherapist', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles_pages`
--

CREATE TABLE `user_roles_pages` (
  `rollpages_id` bigint(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_roles_pages`
--

INSERT INTO `user_roles_pages` (`rollpages_id`, `role_id`, `page_id`) VALUES
(9259, 1, 34),
(9258, 1, 35),
(9257, 1, 33),
(9256, 1, 32),
(8892, 3, 50),
(4864, 2, 61),
(9255, 1, 38),
(9254, 1, 39),
(9253, 1, 37),
(9252, 1, 36),
(9251, 1, 54),
(9250, 1, 55),
(9249, 1, 53),
(9248, 1, 52),
(9247, 1, 3),
(9246, 1, 4),
(9245, 1, 2),
(9244, 1, 1),
(9243, 1, 114),
(9242, 1, 115),
(9241, 1, 113),
(9240, 1, 112),
(9239, 1, 46),
(9238, 1, 99),
(9237, 1, 47),
(9236, 1, 45),
(9235, 1, 44),
(9234, 1, 132),
(9233, 1, 88),
(9232, 1, 108),
(9231, 1, 98),
(9230, 1, 133),
(8891, 3, 91),
(8890, 3, 92),
(9229, 1, 110),
(9228, 1, 87),
(9227, 1, 109),
(9226, 1, 119),
(9225, 1, 50),
(8889, 3, 51),
(9224, 1, 91),
(9223, 1, 92),
(9222, 1, 51),
(9221, 1, 93),
(4863, 2, 60),
(4862, 2, 31),
(4861, 2, 28),
(4860, 2, 57),
(9220, 1, 94),
(9219, 1, 48),
(9218, 1, 49),
(9217, 1, 123),
(9216, 1, 124),
(9215, 1, 126),
(9214, 1, 122),
(9213, 1, 121),
(9212, 1, 62),
(9211, 1, 63),
(9210, 1, 61),
(9209, 1, 60),
(9208, 1, 97),
(9207, 1, 103),
(9206, 1, 100),
(9205, 1, 105),
(9204, 1, 106),
(9203, 1, 102),
(9202, 1, 120),
(9201, 1, 104),
(9200, 1, 101),
(9199, 1, 107),
(9198, 1, 128),
(9197, 1, 78),
(9196, 1, 79),
(9195, 1, 77),
(9194, 1, 76),
(9193, 1, 70),
(9192, 1, 71),
(9191, 1, 69),
(9190, 1, 68),
(9189, 1, 95),
(9188, 1, 96),
(9187, 1, 130),
(9186, 1, 82),
(9185, 1, 83),
(9184, 1, 81),
(9183, 1, 80),
(9182, 1, 89),
(9181, 1, 90),
(9180, 1, 129),
(9179, 1, 66),
(9178, 1, 67),
(9177, 1, 65),
(9176, 1, 64),
(9175, 1, 42),
(8888, 3, 93),
(8887, 3, 94),
(8886, 3, 48),
(8885, 3, 49),
(9174, 1, 43),
(4859, 2, 56),
(8880, 7, 102),
(8879, 7, 120),
(8878, 7, 104),
(8877, 7, 101),
(8876, 7, 107),
(9173, 1, 41),
(9172, 1, 40),
(9171, 1, 30),
(9170, 1, 31),
(9169, 1, 29),
(9168, 1, 28),
(9167, 1, 74),
(9166, 1, 75),
(9165, 1, 73),
(9164, 1, 72),
(9163, 1, 111),
(9162, 1, 116),
(9161, 1, 84),
(8875, 7, 128),
(9160, 1, 85),
(4858, 2, 125),
(4857, 2, 124),
(4869, 2, 4),
(4868, 2, 2),
(4867, 2, 1),
(4866, 2, 63),
(4865, 2, 62),
(4856, 2, 123),
(4855, 2, 122),
(4854, 2, 121),
(4853, 2, 118),
(4852, 2, 117),
(9159, 1, 58),
(9158, 1, 59),
(9157, 1, 57),
(9156, 1, 56),
(9155, 1, 127),
(9154, 1, 131),
(8881, 7, 106),
(8882, 7, 105),
(8883, 7, 100),
(8884, 7, 103),
(8934, 5, 89),
(8933, 5, 90),
(8932, 5, 129),
(9153, 1, 118),
(9152, 1, 117),
(9260, 5, 49),
(9261, 5, 48),
(9262, 5, 91),
(9263, 5, 92),
(9264, 5, 93),
(9265, 5, 94),
(9266, 7, 135),
(9267, 5, 136),
(9268, 7, 94),
(9269, 3, 136),
(9270, 10, 137),
(9271, 10, 138);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_group_name`
--
ALTER TABLE `bill_group_name`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `bill_particular`
--
ALTER TABLE `bill_particular`
  ADD PRIMARY KEY (`particular_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `declaredor`
--
ALTER TABLE `declaredor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`diagnosis_id`);

--
-- Indexes for table `doctors_fee`
--
ALTER TABLE `doctors_fee`
  ADD PRIMARY KEY (`doctorfeeID`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`floor_id`);

--
-- Indexes for table `insurance_comp`
--
ALTER TABLE `insurance_comp`
  ADD PRIMARY KEY (`in_com_id`);

--
-- Indexes for table `iop_bed_side_procedure`
--
ALTER TABLE `iop_bed_side_procedure`
  ADD PRIMARY KEY (`bed_pro_id`);

--
-- Indexes for table `iop_billing`
--
ALTER TABLE `iop_billing`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `iop_billing_t`
--
ALTER TABLE `iop_billing_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iop_complaints`
--
ALTER TABLE `iop_complaints`
  ADD PRIMARY KEY (`iop_comp_id`);

--
-- Indexes for table `iop_diagnosis`
--
ALTER TABLE `iop_diagnosis`
  ADD PRIMARY KEY (`iop_diag_id`);

--
-- Indexes for table `iop_discharge_summary`
--
ALTER TABLE `iop_discharge_summary`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `iop_drug_chart`
--
ALTER TABLE `iop_drug_chart`
  ADD PRIMARY KEY (`drug_chart_id`);

--
-- Indexes for table `iop_individual_care_plan`
--
ALTER TABLE `iop_individual_care_plan`
  ADD PRIMARY KEY (`ind_care_plan_id`);

--
-- Indexes for table `iop_intake_record`
--
ALTER TABLE `iop_intake_record`
  ADD PRIMARY KEY (`intake_id`);

--
-- Indexes for table `iop_laboratory`
--
ALTER TABLE `iop_laboratory`
  ADD PRIMARY KEY (`io_lab_id`);

--
-- Indexes for table `iop_medication`
--
ALTER TABLE `iop_medication`
  ADD PRIMARY KEY (`iop_med_id`);

--
-- Indexes for table `iop_medicine`
--
ALTER TABLE `iop_medicine`
  ADD PRIMARY KEY (`iop_med_id`);

--
-- Indexes for table `iop_nurse_medicine`
--
ALTER TABLE `iop_nurse_medicine`
  ADD PRIMARY KEY (`iop_nurse_med_id`);

--
-- Indexes for table `iop_nurse_notes`
--
ALTER TABLE `iop_nurse_notes`
  ADD PRIMARY KEY (`nurse_notes_id`);

--
-- Indexes for table `iop_operation_theater`
--
ALTER TABLE `iop_operation_theater`
  ADD PRIMARY KEY (`operation_id`);

--
-- Indexes for table `iop_output_record`
--
ALTER TABLE `iop_output_record`
  ADD PRIMARY KEY (`output_id`);

--
-- Indexes for table `iop_progress_note`
--
ALTER TABLE `iop_progress_note`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `iop_receipt`
--
ALTER TABLE `iop_receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `iop_room_transfer`
--
ALTER TABLE `iop_room_transfer`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `iop_sent_mail`
--
ALTER TABLE `iop_sent_mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `iop_vital_parameters`
--
ALTER TABLE `iop_vital_parameters`
  ADD PRIMARY KEY (`vital_id`);

--
-- Indexes for table `logfile`
--
ALTER TABLE `logfile`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `medicine_category`
--
ALTER TABLE `medicine_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `medicine_drug_name`
--
ALTER TABLE `medicine_drug_name`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `patient_attachment`
--
ALTER TABLE `patient_attachment`
  ADD PRIMARY KEY (`attach_id`);

--
-- Indexes for table `patient_chl`
--
ALTER TABLE `patient_chl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details_discharge`
--
ALTER TABLE `patient_details_discharge`
  ADD PRIMARY KEY (`discharge_id`);

--
-- Indexes for table `patient_details_iop`
--
ALTER TABLE `patient_details_iop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_family`
--
ALTER TABLE `patient_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_personal_info`
--
ALTER TABLE `patient_personal_info`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `patient_preassessment`
--
ALTER TABLE `patient_preassessment`
  ADD PRIMARY KEY (`preasses_id`);

--
-- Indexes for table `patient_psychological_cond`
--
ALTER TABLE `patient_psychological_cond`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_type`
--
ALTER TABLE `patient_type`
  ADD PRIMARY KEY (`patient_type_id`);

--
-- Indexes for table `preassessment_barthel_index`
--
ALTER TABLE `preassessment_barthel_index`
  ADD PRIMARY KEY (`barthel_id`);

--
-- Indexes for table `preassessment_fall_risk_questions`
--
ALTER TABLE `preassessment_fall_risk_questions`
  ADD PRIMARY KEY (`fall_risk_id`);

--
-- Indexes for table `preassessment_immunization_his`
--
ALTER TABLE `preassessment_immunization_his`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preassessment_medicines`
--
ALTER TABLE `preassessment_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_history`
--
ALTER TABLE `price_history`
  ADD PRIMARY KEY (`price_history_id`);

--
-- Indexes for table `room_beds`
--
ALTER TABLE `room_beds`
  ADD PRIMARY KEY (`room_bed_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `room_master`
--
ALTER TABLE `room_master`
  ADD PRIMARY KEY (`room_master_id`);

--
-- Indexes for table `surgical_package`
--
ALTER TABLE `surgical_package`
  ADD PRIMARY KEY (`surgery_id`);

--
-- Indexes for table `surgical_package_t`
--
ALTER TABLE `surgical_package_t`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `system_option`
--
ALTER TABLE `system_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `system_parameters`
--
ALTER TABLE `system_parameters`
  ADD PRIMARY KEY (`param_id`);

--
-- Indexes for table `treating_doctor`
--
ALTER TABLE `treating_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_roles_pages`
--
ALTER TABLE `user_roles_pages`
  ADD PRIMARY KEY (`rollpages_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_group_name`
--
ALTER TABLE `bill_group_name`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bill_particular`
--
ALTER TABLE `bill_particular`
  MODIFY `particular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `comp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `declaredor`
--
ALTER TABLE `declaredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `doctors_fee`
--
ALTER TABLE `doctors_fee`
  MODIFY `doctorfeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `floor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_comp`
--
ALTER TABLE `insurance_comp`
  MODIFY `in_com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iop_bed_side_procedure`
--
ALTER TABLE `iop_bed_side_procedure`
  MODIFY `bed_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iop_billing`
--
ALTER TABLE `iop_billing`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_billing_t`
--
ALTER TABLE `iop_billing_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_complaints`
--
ALTER TABLE `iop_complaints`
  MODIFY `iop_comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `iop_diagnosis`
--
ALTER TABLE `iop_diagnosis`
  MODIFY `iop_diag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `iop_discharge_summary`
--
ALTER TABLE `iop_discharge_summary`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `iop_drug_chart`
--
ALTER TABLE `iop_drug_chart`
  MODIFY `drug_chart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iop_individual_care_plan`
--
ALTER TABLE `iop_individual_care_plan`
  MODIFY `ind_care_plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `iop_intake_record`
--
ALTER TABLE `iop_intake_record`
  MODIFY `intake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1449;

--
-- AUTO_INCREMENT for table `iop_laboratory`
--
ALTER TABLE `iop_laboratory`
  MODIFY `io_lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `iop_medication`
--
ALTER TABLE `iop_medication`
  MODIFY `iop_med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `iop_medicine`
--
ALTER TABLE `iop_medicine`
  MODIFY `iop_med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `iop_nurse_medicine`
--
ALTER TABLE `iop_nurse_medicine`
  MODIFY `iop_nurse_med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

--
-- AUTO_INCREMENT for table `iop_nurse_notes`
--
ALTER TABLE `iop_nurse_notes`
  MODIFY `nurse_notes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `iop_operation_theater`
--
ALTER TABLE `iop_operation_theater`
  MODIFY `operation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_output_record`
--
ALTER TABLE `iop_output_record`
  MODIFY `output_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1366;

--
-- AUTO_INCREMENT for table `iop_progress_note`
--
ALTER TABLE `iop_progress_note`
  MODIFY `progress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iop_receipt`
--
ALTER TABLE `iop_receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_room_transfer`
--
ALTER TABLE `iop_room_transfer`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `iop_sent_mail`
--
ALTER TABLE `iop_sent_mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_vital_parameters`
--
ALTER TABLE `iop_vital_parameters`
  MODIFY `vital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1359;

--
-- AUTO_INCREMENT for table `logfile`
--
ALTER TABLE `logfile`
  MODIFY `logid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=634;

--
-- AUTO_INCREMENT for table `medicine_category`
--
ALTER TABLE `medicine_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicine_drug_name`
--
ALTER TABLE `medicine_drug_name`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  MODIFY `appID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_attachment`
--
ALTER TABLE `patient_attachment`
  MODIFY `attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient_chl`
--
ALTER TABLE `patient_chl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_details_discharge`
--
ALTER TABLE `patient_details_discharge`
  MODIFY `discharge_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient_details_iop`
--
ALTER TABLE `patient_details_iop`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `patient_family`
--
ALTER TABLE `patient_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_personal_info`
--
ALTER TABLE `patient_personal_info`
  MODIFY `reg_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `patient_preassessment`
--
ALTER TABLE `patient_preassessment`
  MODIFY `preasses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_psychological_cond`
--
ALTER TABLE `patient_psychological_cond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_type`
--
ALTER TABLE `patient_type`
  MODIFY `patient_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `preassessment_barthel_index`
--
ALTER TABLE `preassessment_barthel_index`
  MODIFY `barthel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preassessment_fall_risk_questions`
--
ALTER TABLE `preassessment_fall_risk_questions`
  MODIFY `fall_risk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `preassessment_immunization_his`
--
ALTER TABLE `preassessment_immunization_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `preassessment_medicines`
--
ALTER TABLE `preassessment_medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `price_history`
--
ALTER TABLE `price_history`
  MODIFY `price_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `room_beds`
--
ALTER TABLE `room_beds`
  MODIFY `room_bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_master`
--
ALTER TABLE `room_master`
  MODIFY `room_master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `surgical_package`
--
ALTER TABLE `surgical_package`
  MODIFY `surgery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surgical_package_t`
--
ALTER TABLE `surgical_package_t`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_option`
--
ALTER TABLE `system_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system_parameters`
--
ALTER TABLE `system_parameters`
  MODIFY `param_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `treating_doctor`
--
ALTER TABLE `treating_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_roles_pages`
--
ALTER TABLE `user_roles_pages`
  MODIFY `rollpages_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9272;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
