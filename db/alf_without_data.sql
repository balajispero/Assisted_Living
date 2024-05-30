-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 09:27 AM
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
-- Database: `alf`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_group_name`
--

CREATE TABLE `bill_group_name` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_desc` text NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill_group_name`
--

INSERT INTO `bill_group_name` (`group_id`, `group_name`, `group_desc`, `organization`, `InActive`) VALUES
(1, 'MRI', 'MRI', 'aastha', 0),
(2, 'CT SCAN', 'CT Scan', 'aastha', 0),
(3, 'X-RAY', 'X-Ray', 'aastha', 0),
(4, 'ECG', 'ECG', 'aastha', 0),
(5, 'USG', 'USG', 'aastha', 0),
(6, 'IT', 'IT', 'aastha', 0),
(7, 'LAB', 'LAB', 'aastha', 0);

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill_particular`
--

INSERT INTO `bill_particular` (`particular_id`, `group_id`, `particular_name`, `particular_desc`, `charge_amount`, `organization`, `InActive`) VALUES
(1, 1, 'MRI BRAIN AND SPINE', 'MRI Brain and Spine', 500.00, 'aastha', 0),
(2, 1, 'MRI BRAIN', 'MRI Brain', 500.00, 'aastha', 0),
(3, 1, 'MRI BRAIN WITH CONTRAST', 'MRI Brain with Contrast', 500.00, 'aastha', 0),
(4, 1, 'MRI ENTIRE SPINE', 'MRI Entire Spine', 500.00, 'aastha', 0),
(5, 1, 'MRI ENTIRE SPINE WITH CONTRAST', 'MRI Entire Spine with Contrast', 500.00, 'aastha', 0),
(6, 1, 'MRI CERVICAL SPINE', 'MRI Cervical Spine', 500.00, 'aastha', 0),
(7, 1, 'MRI BREAST (BOTH)', 'MRI Breast (Both)', 500.00, 'aastha', 0),
(8, 1, 'MRI CERVICAL (C) SPINE WITH CONTRAST', 'MRI Cervical (C) Spine with Contrast', 500.00, 'aastha', 0),
(9, 1, 'MRI ABDOMEN AND PELVIS', 'MRI Abdomen and Pelvis', 500.00, 'aastha', 0),
(10, 1, 'MRI EXTREMITIES', 'MRI Extremities', 500.00, 'aastha', 0),
(11, 1, 'MRI EXTREMITIES WITH CONTRAST', 'MRI Extremities with Contrast', 500.00, 'aastha', 0),
(12, 1, 'MRI WHOLE BODY', 'MRI Whole Body', 500.00, 'aastha', 0),
(13, 3, 'ABDOMINAL X-RAY', 'Abdominal X-ray', 500.00, 'aastha', 0),
(14, 3, 'BARIUM X-RAY', 'Barium X-ray', 500.00, 'aastha', 0),
(15, 3, 'BONE X-RAY', 'Bone X-ray', 500.00, 'aastha', 0),
(16, 3, 'CHEST X-RAY', 'Chest X-ray', 500.00, 'aastha', 0),
(17, 3, 'DENTAL X-RAY', 'Dental X-ray', 500.00, 'aastha', 0),
(18, 3, 'EXTREMITY X-RAY', 'Extremity X-ray', 500.00, 'aastha', 0),
(19, 3, 'HAND X-RAY', 'Hand X-ray', 500.00, 'aastha', 0),
(20, 3, 'JOINT X-RAY', 'Joint X-ray', 500.00, 'aastha', 0),
(21, 3, 'LUMBOSACRAL SPINE X-RAY', 'Lumbosacral Spine X-ray', 500.00, 'aastha', 0),
(22, 3, 'NECK  X-RAY', 'Neck  X-ray', 500.00, 'aastha', 0),
(23, 3, 'PELVIS X-RAY', 'Pelvis X-ray', 500.00, 'aastha', 0),
(24, 3, 'SINUS X-RAY', 'Sinus X-ray', 500.00, 'aastha', 0),
(25, 3, 'SKULL X-RAY', 'Skull X-ray', 500.00, 'aastha', 0),
(26, 3, 'THORACIC SPINE X-RAY', 'Thoracic Spine X-ray', 500.00, 'aastha', 0),
(27, 3, 'UPPER GI AND SMALL BOWEL SERIES X-RAY', 'Upper GI and Small Bowel Series X-ray', 500.00, 'aastha', 0),
(28, 3, 'X-RAY OF THE SKELETON', 'X-ray of the Skeleton', 500.00, 'aastha', 0),
(29, 2, 'CT ANGIOGRAPHY', 'CT Angiography', 500.00, 'aastha', 0),
(30, 2, 'CT ABDOMEN SACN', 'CT Abdomen Sacn', 500.00, 'aastha', 0),
(31, 2, 'CT BONE SCAN', 'CT Bone Scan', 500.00, 'aastha', 0),
(32, 2, 'CT HEAD', 'CT Head', 500.00, 'aastha', 0),
(33, 2, 'CT SCAN CHEST/LUNGS', 'CT Scan Chest/Lungs', 500.00, 'aastha', 0),
(34, 2, 'CT CARDIAC', 'CT Cardiac', 500.00, 'aastha', 0),
(35, 2, 'CT NECK', 'CT Neck', 500.00, 'aastha', 0),
(36, 2, 'CT PELVIS SCAN', 'CT Pelvis Scan', 500.00, 'aastha', 0),
(37, 2, 'CT SCAN KIDNEY', 'CT Scan Kidney', 500.00, 'aastha', 0),
(38, 2, 'CT SCAN OF SPINE', 'CT Scan of Spine', 500.00, 'aastha', 0),
(39, 2, 'CT BRAIN', 'CT Brain', 500.00, 'aastha', 0),
(40, 5, 'US GUIDED BREAST BIOPSY', 'US Guided Breast Biopsy', 500.00, 'aastha', 0),
(41, 5, 'US UTERUS', 'US Uterus', 500.00, 'aastha', 0),
(42, 5, 'US OBSTETRIC', 'US Obstetric', 500.00, 'aastha', 0),
(43, 5, 'US ABDOMEN', 'US Abdomen', 500.00, 'aastha', 0),
(44, 5, 'US ABDOMEN(CHILDREN)', 'US Abdomen(Children)', 500.00, 'aastha', 0),
(45, 5, 'US BREAST', 'US Breast', 500.00, 'aastha', 0),
(46, 5, 'US CAROTID', 'US Carotid', 500.00, 'aastha', 0),
(47, 5, 'US GENERAL', 'US General', 500.00, 'aastha', 0),
(48, 5, 'US MUSCULOSKELETAL', 'US Musculoskeletal', 500.00, 'aastha', 0),
(49, 5, 'US PELVIS', 'US Pelvis', 500.00, 'aastha', 0),
(50, 5, 'US PROSTATE', 'US Prostate', 500.00, 'aastha', 0),
(51, 5, 'US SCROTUM', 'US Scrotum', 500.00, 'aastha', 0),
(52, 5, 'US THYROID', 'US Thyroid', 500.00, 'aastha', 0),
(53, 5, 'US VENOUS(EXTREMITIES)', 'US Venous(Extremities)', 500.00, 'aastha', 0),
(54, 2, 'BALAJI', 'nhj', 1000.00, 'aastha', 0),
(55, 8, 'MRI BRAIN AND SPINE', 'MRI Brain and Spine', 500.00, 'ALF Khopoli', 0);

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
  `logo` varchar(900) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`comp_id`, `company_name`, `company_address`, `company_contactNo`, `TIN`, `logo`, `organization`, `InActive`) VALUES
(1, 'Assisted Living', '1547B, Off, Lokmanya Bal Gangadhar Tilak Rd, opp. Vitthal Mandir, Ramashram Society, Rukmini Sadan Society, Navi Peth, Sadashiv Peth, Pune, Maharashtra 411030', ' 076204 00100', 'NA', 'logo.jpg', 'aastha', 0),
(2, 'Assisted Living', '1547B, Off, Lokmanya Bal Gangadhar Tilak Rd, opp. Vitthal Mandir, Ramashram Society, Rukmini Sadan Society, Navi Peth, Sadashiv Peth, Pune, Maharashtra 411030', ' 076204 00100', 'NA', 'logo.jpg', 'ALF Khopoli', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `complain_name` varchar(999) NOT NULL,
  `complain_desc` text NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `complain_name`, `complain_desc`, `organization`, `InActive`) VALUES
(3, 'ABDOMINAL AND PELVIC PAIN', 'Abdominal and pelvic pain', 'aastha', 0),
(4, 'ABNORMAL UTERINE BLEEDING', 'Abnormal uterine bleeding ', 'aastha', 0),
(5, 'ANXIETY, DEPRESSION', 'Anxiety, depression', 'aastha', 0),
(6, 'BACK PAIN', 'Back pain', 'aastha', 0),
(7, 'CHEST PAIN', 'Chest pain ', 'aastha', 0),
(8, 'COUGH', 'Cough', 'aastha', 0),
(9, 'COUGH, DYSPNEA (INFANT, NEWBORN)', 'Cough, dyspnea (infant, newborn) ', 'aastha', 0),
(10, 'CRYING INFANT (INCONSOLABLE)', 'Crying infant (Inconsolable) ', 'aastha', 0),
(11, 'DELIRIUM', 'Delirium', 'aastha', 0),
(12, 'DEMENTIA, MEMORY LOSS', 'Dementia, memory loss', 'aastha', 0),
(13, 'DIARRHEA', 'Diarrhea', 'aastha', 0),
(14, 'DYSPHAGIA', 'Dysphagia', 'aastha', 0),
(15, 'DYSPNEA, TACHYPNEA', 'Dyspnea, tachypnea ', 'aastha', 0),
(16, 'EAR PAIN, OTALGIA', 'Ear pain, otalgia ', 'aastha', 0),
(17, 'EDEMA, LEG', 'Edema, leg ', 'aastha', 0),
(18, 'FACIAL FLUSHING', 'Facial flushing ', 'aastha', 0),
(19, 'FACIAL PAIN', 'Facial pain', 'aastha', 0),
(20, 'FEVER (ACUTE, UNCERTAIN SOURCE)', 'Fever (acute, uncertain source) ', 'aastha', 0),
(21, 'FLANK PAIN', 'Flank pain ', 'aastha', 0),
(22, 'GENITAL SKIN LESION, GENITAL ULCER', 'Genital skin lesion, genital ulcer', 'aastha', 0),
(23, 'HEADACHE', 'Headache', 'aastha', 0),
(24, 'HEARING LOSS (DEAFNESS)', 'Hearing loss (deafness) ', 'aastha', 0),
(25, 'HEMATURIA', 'Hematuria', 'aastha', 0),
(26, 'HYPOTENSION, SHOCK', 'Hypotension, shock', 'aastha', 0),
(27, 'LEG PAIN, BONE PAIN, EXTREMITY PAIN', 'Leg pain, bone pain, extremity pain', 'aastha', 0),
(28, 'LIMP IN CHILD', 'Limp in child ', 'aastha', 0),
(29, 'LYMPHADENOPATHY', 'Lymphadenopathy', 'aastha', 0),
(30, 'MENTAL STATUS, ACUTE CHANGE (COMA,  LETHARGY)', 'Mental status, acute change (coma,  lethargy) ', 'aastha', 0),
(31, 'MUSCLE CRAMPS', 'Muscle cramps', 'aastha', 0),
(32, 'MYALGIAS, ARTHRALGIAS (GENERALIZED)', 'Myalgias, arthralgias (generalized)', 'aastha', 0),
(33, 'NAUSEA, VOMITING', 'Nausea, vomiting ', 'aastha', 0),
(34, 'NUMBNESS, SENSORY LOSS', 'Numbness, sensory loss ', 'aastha', 0),
(35, 'PRURITUS', 'Pruritus', 'aastha', 0),
(36, 'RASH, GENERALIZED', 'Rash, generalized', 'aastha', 0),
(37, 'RED EYE', 'Red eye ', 'aastha', 0),
(38, 'SCROTAL PAIN', 'Scrotal pain ', 'aastha', 0),
(39, 'SEIZURE', 'Seizure', 'aastha', 0),
(40, 'SHOULDER PAIN', 'Shoulder pain ', 'aastha', 0),
(41, 'SINUS TACHYCARDIA', 'Sinus tachycardia', 'aastha', 0),
(42, 'SYNCOPE', 'Syncope', 'aastha', 0),
(43, 'TINNITUS', 'Tinnitus', 'aastha', 0),
(44, 'TREMOR', 'Tremor', 'aastha', 0),
(45, 'URINARY SYMPTOMS (DYSURIA,  FREQUENCY, URGENCY)', 'Urinary symptoms (dysuria,  frequency, urgency) ', 'aastha', 0),
(46, 'VERTIGO', 'Vertigo', 'aastha', 0),
(47, 'WEAKNESS, FATIGUE, MALAISE, VAGUE  SYMPTOMS', 'Weakness, fatigue, malaise, vague  symptoms ', 'aastha', 0),
(48, 'WEIGHT LOSS', 'Weight loss ', 'aastha', 0),
(49, 'OTHER', 'other', 'aastha', 0);

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation`, `description`, `organization`, `InActive`) VALUES
(1, 'System Administrator', 'System Administrator', 'aastha', 0),
(2, 'Coordinator', 'Coordinator', 'aastha', 0),
(4, 'Doctor', 'Doctor', 'aastha', 0),
(5, 'Nurse', 'Nurse', 'aastha', 0),
(6, 'Pharmacist', 'Pharmacist', 'aastha', 0),
(7, 'Pathologist', 'Pathologist', 'aastha', 0),
(8, 'CASHIER', 'CASHIER', 'aastha', 0),
(10, 'IT', 'IT', 'aastha', 0),
(11, 'Laboratory', 'Laboratory', 'aastha', 0),
(12, 'Physiotherapist', 'Physiotherapist', 'aastha', 0),
(13, 'Preassessment', 'Preassessment', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `diagnosis_id` int(11) NOT NULL,
  `diagnosis_name` varchar(500) NOT NULL,
  `diagnosis_desc` text NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagnosis_id`, `diagnosis_name`, `diagnosis_desc`, `organization`, `InActive`) VALUES
(1, 'ABNORMAL HEART RHYTHMS', 'Abnormal Heart Rhythms', 'aastha', 0),
(7, 'ASCITIES', 'Ascities', 'aastha', 0),
(6, 'APPENDICITIES', 'Appendicities', 'aastha', 0),
(8, 'ASTHMA', 'Asthma', 'aastha', 0),
(9, 'ASTIGMATISM', 'astigmatism', 'aastha', 0),
(11, 'DIARRHEA', 'diarrhea', 'aastha', 0),
(12, 'ACUTE PANCREATITIS', 'Acute pancreatitis', 'aastha', 0),
(13, 'ACUTE ENTRITIS', 'acute Entritis', 'aastha', 0),
(14, 'ARTHRITIS', 'arthritis', 'aastha', 0),
(15, 'AUTOIMMUNE DISEASES', 'autoimmune diseases', 'aastha', 0),
(16, 'BRAIN CANCER', 'brain cancer', 'aastha', 0),
(17, 'BREAST CANCER', 'breast cancer', 'aastha', 0),
(18, 'CANDIDIASIS', 'candidiasis', 'aastha', 0),
(20, 'COLD SORES', 'cold sores', 'aastha', 0),
(21, 'COLON CANCER', 'colon cancer', 'aastha', 0),
(22, 'CONSTIPATION', 'constipation', 'aastha', 0),
(23, 'FIBROMYALGIA', 'fibromyalgia', 'aastha', 0),
(25, 'FOOD POISONING', 'food poisoning', 'aastha', 0),
(26, 'GALLSTONES', 'Gallstones', 'aastha', 0),
(27, 'ALZHEIMER\'S DISEASE', 'alzheimer’s disease', 'aastha', 0),
(28, 'THYROID DISORDERS', 'thyroid disorders', 'aastha', 0),
(29, 'DEMENTIA', 'dementia', 'aastha', 0),
(30, 'STROKE', 'stroke', 'aastha', 0),
(31, 'HYPERTENSION', 'hypertension', 'aastha', 0),
(32, 'SLEEP DISORDERS', 'sleep disorders', 'aastha', 0),
(33, 'SEXUALLY TRANSMITTED DISEASES', 'sexually transmitted diseases', 'aastha', 0),
(34, 'SARS', 'SARS', 'aastha', 0),
(35, 'RAYNAUD\'S PHENOMENON', 'Raynaud\'s Phenomenon', 'aastha', 0),
(36, 'PROSTATE DISORDERS', 'prostate disorders', 'aastha', 0),
(37, 'PROSTATE CANCER', 'prostate cancer', 'aastha', 0),
(38, 'PREMENSTRUAL SYNDROME (PMS)', 'premenstrual syndrome (PMS)', 'aastha', 0),
(39, 'DIABETES', 'diabetes', 'aastha', 0),
(40, 'PERTUSSIS', 'pertussis', 'aastha', 0),
(41, 'PELVIC INFLAMMATORY DISEASE', 'pelvic inflammatory disease', 'aastha', 0),
(42, 'PARKINSON\'S DISEASE', 'Parkinson\'s disease', 'aastha', 0),
(45, 'OVARIAN CANCER', 'ovarian cancer', 'aastha', 0),
(46, 'OTITIS MEDIA (MIDDLE EAR INFECTION)', 'otitis media (middle ear infection)', 'aastha', 0),
(47, 'OSTEOPOROSIS', 'osteoporosis', 'aastha', 0),
(49, 'NON-HODGKIN\'S LYMPHOMA', 'Non-Hodgkin\'s lymphoma', 'aastha', 0),
(50, 'NARCOLEPSY', 'narcolepsy', 'aastha', 0),
(51, 'MUSCULAR DYSTROPHY', 'muscular dystrophy', 'aastha', 0),
(52, 'MULTIPLE SCLEROSIS', 'multiple sclerosis', 'aastha', 0),
(53, 'LUNG CANCER', 'lung cancer', 'aastha', 0),
(54, 'LIVER DISEASE', 'liver disease', 'aastha', 0),
(55, 'LIVER CANCER', 'liver cancer', 'aastha', 0),
(56, 'LEUKEMIA', 'leukemia', 'aastha', 0),
(58, 'KIDNEY DISEASE', 'kidney disease', 'aastha', 0),
(59, 'INSOMNIA', 'insomnia', 'aastha', 0),
(60, 'HODGKIN\'S DISEASE', 'Hodgkin\'s disease', 'aastha', 0),
(61, 'HIV', 'HIV', 'aastha', 0),
(63, 'HERPES', 'herpes', 'aastha', 0),
(64, 'HEPATITIS', 'hepatitis', 'aastha', 0),
(65, 'HEMOCHROMATOSIS', 'hemochromatosis', 'aastha', 0),
(69, 'OTHER', 'other', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis1`
--

CREATE TABLE `diagnosis1` (
  `diagnosis_id` int(11) NOT NULL,
  `diagnosis_name` varchar(500) NOT NULL,
  `diagnosis_desc` text NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `diagnosis1`
--

INSERT INTO `diagnosis1` (`diagnosis_id`, `diagnosis_name`, `diagnosis_desc`, `InActive`) VALUES
(1, 'ABNORMAL HEART RHYTHMS', 'Abnormal Heart Rhythms', 0),
(7, 'ASCITIES', 'Ascities', 0),
(68, 'EYE DISORDERS', 'eye disorders', 0),
(6, 'APPENDICITIES', 'Appendicities', 0),
(8, 'ASTHMA', 'Asthma', 0),
(9, 'ASTIGMATISM', 'astigmatism', 0),
(10, 'CAVITY', 'cavity', 0),
(11, 'DIARRHEA', 'diarrhea', 0),
(12, 'ACUTE PANCREATITIS', 'Acute pancreatitis', 0),
(13, 'ACUTE ENTRITIS', 'acute Entritis', 0),
(14, 'ARTHRITIS', 'arthritis', 0),
(15, 'AUTOIMMUNE DISEASES', 'autoimmune diseases', 0),
(16, 'BRAIN CANCER', 'brain cancer', 0),
(17, 'BREAST CANCER', 'breast cancer', 0),
(18, 'CANDIDIASIS', 'candidiasis', 0),
(19, 'CHRONIC ILLNESS', 'chronic illness', 0),
(20, 'COLD SORES', 'cold sores', 0),
(21, 'COLON CANCER', 'colon cancer', 0),
(22, 'CONSTIPATION', 'constipation', 0),
(23, 'FIBROMYALGIA', 'fibromyalgia', 0),
(24, 'FLU', 'flu', 0),
(25, 'FOOD POISONING', 'food poisoning', 0),
(26, 'GALLSTONES', 'Gallstones', 0),
(27, 'WHOOPING COUGH', 'whooping cough', 0),
(28, 'THYROID DISORDERS', 'thyroid disorders', 0),
(29, 'THRUSH', 'thrush', 0),
(30, 'STROKE', 'stroke', 0),
(31, 'SMOKING', 'smoking', 0),
(32, 'SLEEP DISORDERS', 'sleep disorders', 0),
(33, 'SEXUALLY TRANSMITTED DISEASES', 'sexually transmitted diseases', 0),
(34, 'SARS', 'SARS', 0),
(35, 'RAYNAUD\'S PHENOMENON', 'Raynaud\'s Phenomenon', 0),
(36, 'PROSTATE DISORDERS', 'prostate disorders', 0),
(37, 'PROSTATE CANCER', 'prostate cancer', 0),
(38, 'PREMENSTRUAL SYNDROME (PMS)', 'premenstrual syndrome (PMS)', 0),
(39, 'PREGNANCY', 'pregnancy', 0),
(40, 'PERTUSSIS', 'pertussis', 0),
(41, 'PELVIC INFLAMMATORY DISEASE', 'pelvic inflammatory disease', 0),
(42, 'PARKINSON\'S DISEASE', 'Parkinson\'s disease', 0),
(43, 'PAIN', 'pain', 0),
(44, 'OVERWEIGHT', 'overweight', 0),
(45, 'OVARIAN CANCER', 'ovarian cancer', 0),
(46, 'OTITIS MEDIA (MIDDLE EAR INFECTION)', 'otitis media (middle ear infection)', 0),
(47, 'OSTEOPOROSIS', 'osteoporosis', 0),
(48, 'OBESITY', 'obesity', 0),
(49, 'NON-HODGKIN\'S LYMPHOMA', 'Non-Hodgkin\'s lymphoma', 0),
(50, 'NARCOLEPSY', 'narcolepsy', 0),
(51, 'MUSCULAR DYSTROPHY', 'muscular dystrophy', 0),
(52, 'MULTIPLE SCLEROSIS', 'multiple sclerosis', 0),
(53, 'LUNG CANCER', 'lung cancer', 0),
(54, 'LIVER DISEASE', 'liver disease', 0),
(55, 'LIVER CANCER', 'liver cancer', 0),
(56, 'LEUKEMIA', 'leukemia', 0),
(57, 'LACTOSE INTOLERANCE', 'lactose intolerance', 0),
(58, 'KIDNEY DISEASE', 'kidney disease', 0),
(59, 'INSOMNIA', 'insomnia', 0),
(60, 'HODGKIN\'S DISEASE', 'Hodgkin\'s disease', 0),
(61, 'HIV', 'HIV', 0),
(62, 'HIGH CHOLESTEROL', 'high cholesterol', 0),
(63, 'HERPES', 'herpes', 0),
(64, 'HEPATITIS', 'hepatitis', 0),
(65, 'HEMOCHROMATOSIS', 'hemochromatosis', 0),
(66, 'HEART DISEASE', 'heart disease', 0),
(67, 'HEADACHE', 'headache', 0),
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
  `floor_no` varchar(50) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`floor_id`, `floor_name`, `floor_description`, `floor_no`, `organization`, `InActive`) VALUES
(1, 'Ground Floor', 'Ground Floor', '1', 'aastha', 0),
(2, '2nd Floor', '2nd Floor', '2', 'aastha', 0),
(3, '3rd Floor', '3rd Floor', '3', 'aastha', 0),
(4, '4th Floor', '4th Floor', '4', 'aastha', 0),
(5, '5th Floor', '5th Floor', '5', 'aastha', 0),
(6, '6th Floor', '6th Floor', '6', 'aastha', 0);

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `insurance_comp`
--

INSERT INTO `insurance_comp` (`in_com_id`, `company_name`, `company_address`, `phone_no`, `fax_no`, `email_address`, `contact_person`, `contact_no_person`, `contact_email`, `notes`, `organization`, `InActive`) VALUES
(5, 'Phil Health', '#0001 Street Salcedo Makati City', '02 456 8595', '', 'contactme@yahoo.com', 'Bobby Mendoza', '091234676454', 'bobby@yahoo.com', 'remarks of insurance company', 'aastha', 0),
(6, 'Bajaj Aliyanz Insurance', 'Bajaj Allianz House, Airport Road, Yerawada, Pune-411006', '+91 75072 45858', '', 'seniorcitizen@bajajallianz.co.in', 'NA', '9152007550', 'seniorcitizen@bajajallianz.co.in', '', 'aastha', 0),
(7, 'Star Health and Allied Insurance Co Ltd', '1, New Tank Street, Valluvarkottam High Road, Nungambakkam, Chennai – 600034', '044 6900 6900', '', 'info@starhealth.in', 'NA', '044 6900 6900', 'info@starhealth.in', '', 'aastha', 0),
(8, 'HDFC ERGO', '1st Floor, HDFC House, Backbay Reclamation, H. T. Parekh Marg,\r\nChurchgate, Mumbai - 400020\r\nHCS - N', '02262346234', '', 'medical.services@allianz.com', 'NA', '02262346234', 'medical.services@allianz.com', '', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_orders`
--

CREATE TABLE `invoice_orders` (
  `invoice_id` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `iop_no` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `bill_start_date` date NOT NULL,
  `bill_end_date` date NOT NULL,
  `bill_section` varchar(100) NOT NULL,
  `ptn_name` varchar(255) DEFAULT NULL,
  `ptn_mobile_no` varchar(20) DEFAULT NULL,
  `ptn_email_id` varchar(255) DEFAULT NULL,
  `bill_total_amount` varchar(255) DEFAULT NULL,
  `nStatus` varchar(20) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_orders_items`
--

CREATE TABLE `invoice_orders_items` (
  `invoice_item_id` int(11) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(500) DEFAULT NULL,
  `test_date` date NOT NULL,
  `item_final_amount` varchar(255) NOT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(200) DEFAULT NULL,
  `review` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_laboratory`
--

CREATE TABLE `iop_laboratory` (
  `io_lab_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `patient_no` varchar(100) DEFAULT NULL,
  `added_by` varchar(100) DEFAULT NULL,
  `dDate` date NOT NULL,
  `dDateTime` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `laboratory_id` varchar(255) DEFAULT NULL,
  `findings` text NOT NULL,
  `result` text NOT NULL,
  `doctor` varchar(11) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `lab_test_name` varchar(255) DEFAULT NULL,
  `lab_test_reports` text DEFAULT NULL,
  `added_date_by_lab` datetime DEFAULT NULL,
  `added_by_lab` varchar(255) DEFAULT NULL,
  `updated_date_by_lab` datetime DEFAULT NULL,
  `updated_by_lab` varchar(255) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `cPreparedBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `mor_nurse` varchar(255) DEFAULT NULL,
  `afternoon_nurse` varchar(255) DEFAULT NULL,
  `night_nurse` varchar(255) DEFAULT NULL,
  `mor_dose_added_dtime` varchar(255) DEFAULT NULL,
  `afternoon_dose_added_dtime` varchar(255) DEFAULT NULL,
  `night_dose_added_dtime` varchar(255) DEFAULT NULL,
  `mor_dose_updated_dtime` varchar(255) DEFAULT NULL,
  `afternoon_dose_updated_dtime` varchar(255) DEFAULT NULL,
  `night_dose_updated_dtime` varchar(255) DEFAULT NULL,
  `updated_date` varchar(255) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL,
  `cPreparedBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_patient_incharge_his`
--

CREATE TABLE `iop_patient_incharge_his` (
  `id` int(11) NOT NULL,
  `iop_no` varchar(100) NOT NULL,
  `patient_no` varchar(100) NOT NULL,
  `incharge_doctor` varchar(100) NOT NULL,
  `assigned_date` datetime NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL,
  `organization` varchar(255) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iop_sent_mail`
--

CREATE TABLE `iop_sent_mail` (
  `mail_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `mail_to` varchar(255) NOT NULL,
  `rel_email2` varchar(255) DEFAULT NULL,
  `mail_cc` varchar(500) DEFAULT NULL,
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
  `organization` varchar(100) DEFAULT NULL,
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
  `bsl_type` varchar(100) DEFAULT NULL,
  `bsl` varchar(255) DEFAULT NULL,
  `weight` varchar(25) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `cPreparedBy` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_name_with_charges`
--

CREATE TABLE `lab_test_name_with_charges` (
  `id` int(11) NOT NULL,
  `test_name` varchar(49) DEFAULT NULL,
  `charges` varchar(12) DEFAULT NULL,
  `instructions` varchar(63) DEFAULT NULL,
  `specimen` varchar(18) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lab_test_name_with_charges`
--

INSERT INTO `lab_test_name_with_charges` (`id`, `test_name`, `charges`, `instructions`, `specimen`, `organization`, `InActive`) VALUES
(1, 'Hemogram', '200', '', 'Blood', 'aastha', 0),
(2, 'Hemogram and MP', '280', '', 'Blood', 'aastha', 0),
(3, 'ESR', '80', '', 'Blood', 'aastha', 0),
(4, 'Blood Group', '100', '', 'Blood', 'aastha', 0),
(5, 'Rapid MP', '400', '', 'Blood', 'aastha', 0),
(6, 'Absolute Eosinophilic Count (AEC)', '100', '', 'Blood', 'aastha', 0),
(7, 'Urine Routine', '100', '', 'Urine', 'aastha', 0),
(8, 'Urine BS-BP', '50', '', 'Urine', 'aastha', 0),
(9, 'Stool (R)', '100', '', 'Stool', 'aastha', 0),
(10, 'Stool ( O/B)', '70', '', 'Stool', 'aastha', 0),
(11, 'Semen Analysis', '300', 'Fresh Sample', 'Semen ', 'aastha', 0),
(12, 'Platelet Count', '100', '', 'Blood', 'aastha', 0),
(13, 'Reticulocyte Count', '150', '', 'Blood', 'aastha', 0),
(14, 'Sickling Test', '150', '', 'Blood', 'aastha', 0),
(15, 'BT CT', '100', 'For Walk-in patients only', 'Blood', 'aastha', 0),
(16, 'PBS for MP', '100', '', 'Blood', 'aastha', 0),
(17, 'WBC Count', '100', '', 'Blood', 'aastha', 0),
(18, 'Fluid examination (Pleural, Ascitic, CSF)', '550', '', 'Body Fluids', 'aastha', 0),
(19, 'each', '', '', '', 'aastha', 0),
(20, 'B J Protein', '220', '', 'Urine', 'aastha', 0),
(21, 'D Dimer', '1000', '', 'Blood', 'aastha', 0),
(22, 'PBS', '100', '', 'Blood', 'aastha', 0),
(23, 'Hemoglobin', '100', '', 'Blood', 'aastha', 0),
(24, 'Prothrombin Time', '300', '', 'Blood', 'aastha', 0),
(25, 'PTTK/APTT', '300', '', 'Blood', 'aastha', 0),
(26, 'LE cell', '400', '', 'Blood', 'aastha', 0),
(27, 'Coombs Test (Direct/indirect) each', '200', '', 'Blood', 'aastha', 0),
(28, 'Indirect Coombs test OR RH antibody', '500', '', 'Blood', 'aastha', 0),
(29, 'Titre', '', '', 'Blood', 'aastha', 0),
(30, 'HB Electrophoresis', '1400', 'Clinical history and P. B. S. is required', 'Blood', 'aastha', 0),
(31, 'Serum Iron TIBC', '550', '', 'Blood', 'aastha', 0),
(32, 'ferritin', '650', '', 'Blood', 'aastha', 0),
(33, 'Vit B12', '750', '', 'Blood', 'aastha', 0),
(34, 'Folic Acid', '750', '', 'Blood', 'aastha', 0),
(35, 'Vitamin D3', '1750', '', 'Blood', 'aastha', 0),
(36, 'Brucella IgG (Rs. 850) , IgM (Rs. 900)', '1850', '', 'Blood', 'aastha', 0),
(37, 'Urine PH', '50', '', 'Urine', 'aastha', 0),
(38, 'Fluid ADA', '600', '', 'Body fluids', 'aastha', 0),
(39, 'Sputum for AFB', '150', '', 'Sputum', 'aastha', 0),
(40, 'Sputum Routine (Gram and ZN)', '250', '', 'Sputum', 'aastha', 0),
(41, 'Urine Micro albumin', '450', '', 'Urine', 'aastha', 0),
(42, 'Gram Stain', '120', '', 'As per requisition', 'aastha', 0),
(43, 'BSL/F/R/PP(EACH)', '60', '10-12 hrs Fasting', 'Blood', 'aastha', 0),
(44, 'BSL/F/R/PP(EACH) WITH URINE', '120', '', 'Blood and Urine', 'aastha', 0),
(45, 'Urea', '120', '', 'Blood', 'aastha', 0),
(46, 'Creat', '120', '', 'Blood', 'aastha', 0),
(47, 'Uric-Acid', '120', '', 'Blood', 'aastha', 0),
(48, 'SGOT', '120', '', 'Blood', 'aastha', 0),
(49, 'SGPT', '120', '', 'Blood', 'aastha', 0),
(50, 'ALKP', '120', '', 'Blood', 'aastha', 0),
(51, 'Bilirubin', '150', '', 'Blood', 'aastha', 0),
(52, 'Total Protein', '120', '', 'Blood', 'aastha', 0),
(53, 'Cholesterol', '120', '', 'Blood', 'aastha', 0),
(54, 'Triglyceride', '130', '12-14 hrs Fasting', 'Blood', 'aastha', 0),
(55, 'HDL. Cholesterol', '130', '12-14 hrs Fasting', 'Blood', 'aastha', 0),
(56, 'Calcium', '150', '', 'Blood', 'aastha', 0),
(57, 'Phosphorus', '120', '', 'Blood', 'aastha', 0),
(58, 'HBA1C', '500', '', 'Blood', 'aastha', 0),
(59, '24 hrs. creatinine clearance', '350', '', 'Blood', 'aastha', 0),
(60, 'CPK total', '430', '', 'Blood', 'aastha', 0),
(61, 'CPK MB', '500', '', 'Blood', 'aastha', 0),
(62, 'LDH', '450', '', 'Blood', 'aastha', 0),
(63, 'Amylase', '450', '', 'Blood', 'aastha', 0),
(64, 'lypase', '500', '', 'Blood', 'aastha', 0),
(65, 'Serum electrolytes', '400', '', 'Blood', 'aastha', 0),
(66, 'Homocysteine', '1200', '', 'Blood', 'aastha', 0),
(67, 'Kidney Function test', '360', '', 'Blood ', 'aastha', 0),
(68, '24 hrs Urinary Protein', '350', '', 'Urine', 'aastha', 0),
(69, 'Bicarbonate', '250', '', 'Blood ', 'aastha', 0),
(70, 'Chloride', '150', '', 'Blood ', 'aastha', 0),
(71, 'G6PD (Qualitative)', '400', '', 'Blood ', 'aastha', 0),
(72, 'GGT', '250', '', 'Blood ', 'aastha', 0),
(73, 'Glucose tolerance test', '280', '10-12 hrs fasting. ', 'Blood ', 'aastha', 0),
(74, 'Ionic Calcium', '450', '', 'Blood ', 'aastha', 0),
(75, 'LFT', '600', '', 'Blood ', 'aastha', 0),
(76, 'Lipid Profile', '600', '12-14 hrs fasting. ', 'Blood ', 'aastha', 0),
(77, 'LDL Cholesterol', '450', '12-14 hrs fasting. ', 'Blood ', 'aastha', 0),
(78, 'Mg', '350', '', 'Blood ', 'aastha', 0),
(79, 'Potassium', '150', '', 'Blood ', 'aastha', 0),
(80, 'sodium', '150', '', 'Blood ', 'aastha', 0),
(81, 'Spot Urine, Albumin Creatinine ratio', '500', '', 'Urine', 'aastha', 0),
(82, 'Urinary Albumin Creatinine Ratio', '500', '', 'Urine', 'aastha', 0),
(83, ' Spot urinary Creatinine', '200', '', 'Urine', 'aastha', 0),
(84, 'HIV Tri-dot', '400', '', 'Blood', 'aastha', 0),
(85, 'HBSAG', '250', '', 'Blood', 'aastha', 0),
(86, 'VDRL', '170', '', 'Blood', 'aastha', 0),
(87, 'ASO Titer', '250', '', 'Blood', 'aastha', 0),
(88, 'RA Factor', '250', '', 'Blood', 'aastha', 0),
(89, 'CRP', '400', '', 'Blood', 'aastha', 0),
(90, 'Trop I', '1200', '', 'Blood', 'aastha', 0),
(91, 'Dengue (IgG, IgM)', '600', '', 'Blood', 'aastha', 0),
(92, 'Dengue (NS1)', '600', '', 'Blood', 'aastha', 0),
(93, 'Chikungunya IgM', '900', '', 'Blood', 'aastha', 0),
(94, 'UPT', '110', '', 'Urine', 'aastha', 0),
(95, 'Leptospira (IgG)', '1000', '', 'Blood', 'aastha', 0),
(96, 'Leptospira (IgM)', '900', '', 'Blood', 'aastha', 0),
(97, 'Trop T', '1100', '', 'Blood', 'aastha', 0),
(98, 'Widal', '150', '', 'Blood', 'aastha', 0),
(99, ' HCV', '450', '', 'Blood', 'aastha', 0),
(100, 'Rickettsia', '450', '', 'Blood', 'aastha', 0),
(101, 'Urine Culture', '600', '', 'Urine', 'aastha', 0),
(102, 'Pus Culture', '750', '', 'Pus', 'aastha', 0),
(103, 'Sputum Culture', '750', '', 'Sputum', 'aastha', 0),
(104, 'Blood Culture (child)', '750', '', 'Blood', 'aastha', 0),
(105, 'Blood Culture (adult- 1 bottle)', '900', '', 'Blood', 'aastha', 0),
(106, '  Blood Culture (adult- 3 bottle)', '1800', '', 'Blood', 'aastha', 0),
(107, 'Blood culture (Adult - 2 bottle)', '1200', '', 'Blood', 'aastha', 0),
(108, 'AFB Culture only', '1500', '', 'As per requisition', 'aastha', 0),
(109, 'AFB culture - 4 drugs', '1700', '', 'As per requisition', 'aastha', 0),
(110, 'AFB culture- 9 Drugs', '6200', '', 'As per requisition', 'aastha', 0),
(111, 'Sterile body fluid CS', '800', '', 'Body Fluids', 'aastha', 0),
(112, 'Fungal culture', '1400', '', 'As per requisition', 'aastha', 0),
(113, 'Swab Calture', '650', '', 'As per requisition', 'aastha', 0),
(114, 'TORCH 5', '2500', '', 'Blood', 'aastha', 0),
(115, 'TORCH 10', '5500', '', 'Blood', 'aastha', 0),
(116, 'TORCH 8', '4000', '', 'Blood', 'aastha', 0),
(117, 'Toxo IgG IgM each', '500    each ', '', 'Blood', 'aastha', 0),
(118, 'Rubella IgG, IgM each', '550', '', 'Blood', 'aastha', 0),
(119, 'CMV IgG IgM each', '550', '', 'Blood', 'aastha', 0),
(120, 'HSV I and II (IgG, IgM) each', '600', '', 'Blood', 'aastha', 0),
(121, 'LH FSH Prolactin', '1250', '', 'Blood', 'aastha', 0),
(122, 'Progesterone', '500', '', 'Blood', 'aastha', 0),
(123, 'Lupus anticoagulant screen', '900', '', 'Blood', 'aastha', 0),
(124, 'Anti-cardiolipin antibodies (IgM, IgG,IgA) each 8', '1500', '', 'Blood', 'aastha', 0),
(125, 'Anti-phospholipid antibodies IgG, IgM Each  1100', '2000', '', 'Blood', 'aastha', 0),
(126, 'Triple test', '2000', 'L.M.P.,Date of Birth, Weight, Pelvic USG recent report required', 'Blood', 'aastha', 0),
(127, 'Anti-Sperm Antibodies each (Whole Blood/semen 950', '1800', '', 'Blood/SEMEN', 'aastha', 0),
(128, ' ANA', '700', '', 'Blood', 'aastha', 0),
(129, ' ANA Blot Assay ', '3850', '', 'Blood', 'aastha', 0),
(130, ' ds DNA', '800', '', 'Blood', 'aastha', 0),
(131, ' AMH', '1900', '', 'Blood', 'aastha', 0),
(132, 'Alpha Feto Protein  (Liver)', '750', '', 'Blood', 'aastha', 0),
(133, 'Beta HCG', '750', ' Provide L.M.P. history', 'Blood', 'aastha', 0),
(134, 'CA 19.9 (Colorectal)', '1000', '', 'Blood', 'aastha', 0),
(135, 'CA 15.3 (Breast)', '1100', '', 'Blood', 'aastha', 0),
(136, 'CA 125 (ovarian Cancer)', '900', '', 'Blood', 'aastha', 0),
(137, 'F t3, F T4, TSH', '800', '', 'Blood', 'aastha', 0),
(138, 'T3, T4, TSH', '650', '', 'Blood', 'aastha', 0),
(139, 'TSH', '300', '', 'Blood', 'aastha', 0),
(140, 'T3', '200', '', 'Blood', 'aastha', 0),
(141, 'T4', '200', '', 'Blood', 'aastha', 0),
(142, 'F T3, T4 (each 300)', '300 each', '', 'Blood', 'aastha', 0),
(143, 'Free T4 TSH (each 300)', '300 each', '', 'Blood', 'aastha', 0),
(144, 'Thyroid antibodies (anti Microsomal', '1400', '', 'Blood', 'aastha', 0),
(145, 'and thyroglobulin) in all', '', '', 'Blood', 'aastha', 0),
(146, 'Testosterone', '550', '', 'Blood', 'aastha', 0),
(147, 'LH FSH Prolactin', '1250', '', 'Blood', 'aastha', 0),
(148, 'progesterone', '500', '', 'Blood', 'aastha', 0),
(149, 'Prolactin', '400', '', 'Blood', 'aastha', 0),
(150, 'E 2 Estradiol', '600', '', 'Blood', 'aastha', 0),
(151, 'E3 un Conjugated Estradiol', '700', '', 'Blood', 'aastha', 0),
(152, 'PSA', '800', '', 'Blood', 'aastha', 0),
(153, 'Insulin F /PP each', '600', 'Insulin F(10-12 hrs fasting )', 'Blood', 'aastha', 0),
(154, 'CEA colon', '750', '', 'Blood', 'aastha', 0),
(155, 'LH', '400', '', 'Blood', 'aastha', 0),
(156, 'FSH', '450', '', 'Blood', 'aastha', 0),
(157, 'TB PCR', '3200', '', 'Blood', 'aastha', 0),
(158, 'CD 4 CD8', '2000', '', 'Blood', 'aastha', 0),
(159, 'Western Blot (for HIV 1 and 2)', '2500', '', 'Blood', 'aastha', 0),
(160, 'HIV Viral Load', '5000', '', 'Blood', 'aastha', 0),
(161, 'CD4', '1200', '', 'Blood', 'aastha', 0),
(162, 'HIV  monitor', '6500', '', 'Blood', 'aastha', 0),
(163, 'Monteux', '150', '', 'Blood', 'aastha', 0),
(164, 'Antibodies to Hepatitis A virus (IgG,IgM) each', '800', '', 'Blood', 'aastha', 0),
(165, 'Antibodies to Hepatitis B core antigen', '800', '', 'Blood', 'aastha', 0),
(166, 'Hepatitis B Envelop antigen', '750', '', 'Blood', 'aastha', 0),
(167, 'Total Antibodies to HBe antigen', '750', '', 'Blood', 'aastha', 0),
(168, 'Total antibodies to HBs antigen', '750', '', 'Blood', 'aastha', 0),
(169, 'Total Antibodies to Hepatitis C virus', '950', '', 'Blood', 'aastha', 0),
(170, 'Hepatitis E Virus IGG, IGM each', 'Each 1150', '', 'Blood', 'aastha', 0),
(171, 'FNAC with Procedure', '1300', '', '', 'aastha', 0),
(172, 'Small Biopsy', '1000', '', '', 'aastha', 0),
(173, 'Medium biopsy', '1800', '', '', 'aastha', 0),
(174, 'Large biopsy', '2400', '', '', 'aastha', 0),
(175, 'PAP smear 2 slides', '500', '', '', 'aastha', 0),
(176, 'Bone Marrow Examination', '3000', '', '', 'aastha', 0),
(177, 'Bone Marrow reporting', '1000', '', '', 'aastha', 0),
(178, 'Cytology report', '300', '', '', 'aastha', 0),
(179, 'NT-ProBNP', '2500', '', '', 'aastha', 0);

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
(596, '00027', 'Patient Discharge', 'INSERT', '203.192.205.87', ' Avinash Kukarni ', '2023-08-02 04:51:59'),
(597, '00027', 'Patient Discharge', 'INSERT', '203.192.205.87', ' Manda Dattatrya Pawar ', '2023-08-02 04:53:06'),
(598, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' VIdya Kamtikar ', '2023-08-08 02:34:22'),
(599, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' VIdya Kamtikar ', '2023-08-08 02:44:26'),
(600, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' VIdya Kamtikar ', '2023-08-08 02:44:52'),
(601, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' VIdya Kamtikar ', '2023-08-08 02:46:05'),
(602, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' VIdya Kamtikar ', '2023-08-08 02:53:10'),
(603, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' VIdya Kamtikar ', '2023-08-08 03:00:54'),
(604, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' VIdya Kamtikar ', '2023-08-08 03:01:57'),
(605, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' TTK ', '2023-08-08 03:02:57'),
(606, '00024', 'Member Registration', 'INSERT', '203.192.205.84', '  ', '2023-08-08 03:46:43'),
(607, '00002', 'Room Bed Master', 'INSERT', '203.192.205.87', 'Bed 2', '2023-08-08 03:53:46'),
(608, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' VIdya Kamtikar ', '2023-08-08 04:06:24'),
(609, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' MOHINI PURUSHOTTAM KALE ', '2023-08-08 05:00:17'),
(610, '00028', 'Member Registration', 'INSERT', '152.57.222.199', '  ', '2023-08-08 09:17:51'),
(611, '00028', 'Member Discharge', 'INSERT', '152.57.222.199', ' ddd ', '2023-08-08 09:26:58'),
(612, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' Usha Ranade ', '2023-08-09 11:01:20'),
(613, '00024', 'Member Registration', 'INSERT', '203.192.205.84', '  ', '2023-08-09 12:29:10'),
(614, '00024', 'Member Management', 'UPDATE', '203.192.205.84', ' testing ', '2023-08-09 12:30:02'),
(615, '00024', 'Member Registration', 'INSERT', '203.192.205.81', '  ', '2023-08-10 02:19:09'),
(616, '00024', 'Member Management', 'UPDATE', '203.192.205.81', ' Swati Pradhan ', '2023-08-10 02:22:25'),
(617, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Velankar Anil ', '2023-08-11 03:42:20'),
(618, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Swati Pradhan ', '2023-08-11 03:55:14'),
(619, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Aparna Anil Velankar ', '2023-08-11 04:41:35'),
(620, '00024', 'Member Registration', 'INSERT', '203.192.205.85', '  ', '2023-08-12 03:02:32'),
(621, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Sheela Godbole ', '2023-08-12 03:15:49'),
(622, '00024', 'Member Registration', 'INSERT', '203.192.205.85', '  ', '2023-08-12 03:25:47'),
(623, '00024', 'Member Registration', 'INSERT', '203.192.205.85', '  ', '2023-08-12 03:30:20'),
(624, '00002', 'Room Bed Master', 'INSERT', '203.192.205.87', '2', '2023-08-12 03:36:20'),
(625, '00002', 'Room Master', 'UPDATE', '203.192.205.87', 'Room - 303', '2023-08-12 03:39:58'),
(626, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' MOHINI PURUSHOTTAM KALE ', '2023-08-14 12:38:27'),
(627, '00024', 'Member Registration', 'INSERT', '203.192.205.81', '  ', '2023-08-14 01:11:21'),
(628, '00002', 'Room Bed Master', 'INSERT', '203.192.205.87', 'Bed 2', '2023-08-14 01:50:26'),
(629, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Bhalchandra Sathe ', '2023-08-14 02:12:49'),
(630, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Vaze Krishna ', '2023-08-14 02:50:27'),
(631, '00002', 'Room Bed Master', 'INSERT', '203.192.205.87', '2', '2023-08-16 12:12:55'),
(632, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' Swati Pradhan ', '2023-08-17 12:31:07'),
(633, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' Vandana Waikar ', '2023-08-17 12:34:42'),
(634, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' B N Shrivastav ', '2023-08-21 02:48:36'),
(635, '00024', 'Member Registration', 'INSERT', '203.192.205.84', '  ', '2023-08-22 10:56:31'),
(636, '00002', 'Room Master', 'UPDATE', '203.192.205.87', 'Room - 310', '2023-08-22 11:15:21'),
(637, '00002', 'Room Bed Master', 'UPDATE', '203.192.205.87', 'Bed 1', '2023-08-22 11:16:10'),
(638, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Vaze Krishna ', '2023-08-22 04:46:49'),
(639, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' RITA SHIVANI ', '2023-08-22 05:14:41'),
(640, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' SAVITRI SURI ', '2023-08-23 04:02:52'),
(641, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Vaze Krishna ', '2023-08-24 04:19:42'),
(642, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Pradip Jog ', '2023-08-25 03:32:47'),
(643, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Vaze Krishna ', '2023-08-26 03:41:09'),
(644, '00024', 'Member Registration', 'INSERT', '203.192.205.84', '  ', '2023-08-26 05:13:26'),
(645, '00024', 'Member Registration', 'INSERT', '203.192.205.84', '  ', '2023-08-26 05:20:30'),
(646, '00027', 'Member Management', 'UPDATE', '203.192.205.87', ' Pradip Jog ', '2023-08-30 03:46:24'),
(647, '00002', 'Room Bed Master', 'INSERT', '203.192.205.87', 'Bed 2', '2023-08-31 12:24:32'),
(648, '00027', 'Member Discharge', 'INSERT', '203.192.205.87', ' Gurunath Ghotage ', '2023-09-02 12:04:54'),
(649, '00002', 'Member Registration', 'INSERT', '203.192.205.84', '  ', '2023-09-04 09:48:11'),
(650, '00027', 'Member Management', 'UPDATE', '203.192.205.84', ' Malini Kashikar ', '2023-09-04 12:18:16'),
(651, '00027', 'Member Management', 'UPDATE', '203.192.205.84', ' Malini Kashikar ', '2023-09-04 12:31:48'),
(652, '00027', 'Member Management', 'UPDATE', '203.192.205.84', ' Jayant Gujarati ', '2023-09-04 04:22:05'),
(653, '00027', 'Member Management', 'UPDATE', '203.192.205.84', ' GURARATHI JAYASHREE ', '2023-09-04 05:37:28'),
(654, '00027', 'Member Discharge', 'INSERT', '203.192.205.86', ' Mujumdar Shrikant ', '2023-09-11 12:03:21'),
(655, '00002', 'Member Registration', 'INSERT', '203.192.205.86', '  ', '2023-09-13 01:04:14'),
(656, '00027', 'Member Discharge', 'INSERT', '203.192.205.86', ' Bhalchandra Sathe ', '2023-09-13 04:14:45'),
(657, '00027', 'Member Management', 'UPDATE', '203.192.205.86', ' Prabhakar P Joshi ', '2023-09-13 04:51:31'),
(658, '00027', 'Member Management', 'UPDATE', '203.192.205.86', ' Prabhakar P Joshi ', '2023-09-13 05:22:58'),
(659, '00002', 'User Roles', 'INSERT', '103.186.133.168', 'Laboratory', '2023-09-14 10:22:21'),
(660, '00002', 'User Roles', 'INSERT', '103.186.133.168', 'Physiotherapist', '2023-09-14 10:23:10'),
(661, '00002', 'Designation', 'INSERT', '103.186.133.168', 'Laboratory', '2023-09-14 10:25:17'),
(662, '00002', 'Designation', 'INSERT', '103.186.133.168', 'Physiotherapist', '2023-09-14 10:25:29'),
(663, '00002', 'User', 'INSERT', '103.186.133.168', 'lab lab lab', '2023-09-14 10:32:36'),
(664, '00002', 'User', 'INSERT', '103.186.133.168', 'physiotherapist physiotherapist physiotherapist', '2023-09-14 10:34:43'),
(665, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Prabhakar P Joshi ', '2023-09-14 04:15:00'),
(666, '00002', 'Member Registration', 'INSERT', '106.79.143.216', '  ', '2023-09-15 08:23:49'),
(667, '00002', 'Member Registration', 'INSERT', '1.187.25.120', '  ', '2023-09-15 08:26:57'),
(668, '00002', 'Member Registration', 'INSERT', '152.57.43.120', '  ', '2023-09-15 08:36:50'),
(669, '00027', 'Member Management', 'UPDATE', '203.192.205.80', ' Prabhakar P Joshi ', '2023-09-16 12:38:15'),
(670, '00027', 'Member Management', 'UPDATE', '203.192.205.80', ' Prabhakar P Joshi ', '2023-09-16 12:39:00'),
(671, '00027', 'Member Management', 'UPDATE', '203.192.205.80', ' Kamal Haribhau Ingle ', '2023-09-16 12:43:19'),
(672, '00002', 'User', 'INACTIVE U', '203.192.205.85', '00024', '2023-09-18 11:08:32'),
(673, '00034', 'Member Registration', 'INSERT', '203.192.205.86', '  ', '2023-09-18 04:46:00'),
(674, '00002', 'Designation', 'INSERT', '103.186.133.168', 'Preassessment', '2023-09-18 06:10:13'),
(675, '00002', 'User Roles', 'INSERT', '103.186.133.168', 'Preassessment', '2023-09-18 06:10:26'),
(676, '00002', 'User', 'INSERT', '103.186.133.168', 'mohan garad vishal', '2023-09-18 06:15:16'),
(677, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-20 04:49:58'),
(678, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Leela Khapre ', '2023-09-20 04:55:40'),
(679, '00002', 'Member Registration', 'INSERT', '203.192.205.85', '  ', '2023-09-20 05:10:02'),
(680, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Mukund P Deshmukh ', '2023-09-20 05:17:11'),
(681, '00027', 'Member Discharge', 'INSERT', '203.192.205.85', ' Kamal Haribhau Ingle ', '2023-09-22 12:44:17'),
(682, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-22 12:58:27'),
(683, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-22 01:11:13'),
(684, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' DKT test ', '2023-09-22 01:54:03'),
(685, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' DKT test ', '2023-09-22 02:02:53'),
(686, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-22 02:52:20'),
(687, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-22 02:55:32'),
(688, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-23 12:02:51'),
(689, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-23 12:04:06'),
(690, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-23 12:05:53'),
(691, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-23 12:07:45'),
(692, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-23 03:11:30'),
(693, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Raghunath N Khapre ', '2023-09-23 03:12:48'),
(694, '00034', 'Member Registration', 'INSERT', '203.192.205.85', '  ', '2023-09-27 02:40:43'),
(695, '00034', 'Member Management', 'UPDATE', '203.192.205.85', ' Ratnaprabha Joshi ', '2023-09-27 02:50:44'),
(696, '00027', 'Member Discharge', 'INSERT', '203.192.205.85', ' Pradip Jog ', '2023-09-27 04:33:38'),
(697, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-09-27 05:45:35'),
(698, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 3', '2023-09-27 05:46:00'),
(699, '00027', 'Member Management', 'UPDATE', '203.192.205.85', ' Ratnaprabha Joshi ', '2023-09-28 03:49:44'),
(700, '00002', 'Room Category', 'DELETE', '103.186.133.168', '4', '2023-09-29 04:19:48'),
(701, '00002', 'Room Category', 'DELETE', '103.186.133.168', '5', '2023-09-29 04:20:03'),
(702, '00002', 'Room Category', 'INSERT', '103.186.133.168', 'Semi private (tripple sharing)', '2023-09-29 04:21:22'),
(703, '00002', 'Room Master', 'UPDATE', '103.186.133.168', '207', '2023-09-29 04:23:01'),
(704, '00002', 'Room Master', 'UPDATE', '103.186.133.168', '401', '2023-09-29 04:23:47'),
(705, '00002', 'Room Master', 'UPDATE', '103.186.133.168', '404', '2023-09-29 04:24:37'),
(706, '00002', 'Room Bed Master', 'UPDATE', '103.186.133.168', 'Bed 1', '2023-09-29 04:25:15'),
(707, '00034', 'Member Registration', 'INSERT', '203.192.205.85', '  ', '2023-09-30 03:02:17'),
(708, '00002', 'Room Bed Master', 'INSERT', '203.192.205.85', 'Bed 1', '2023-09-30 03:12:25'),
(709, '00002', 'Room Bed Master', 'INSERT', '203.192.205.85', 'Bed 2', '2023-09-30 03:12:38'),
(710, '00002', 'Room Master', 'UPDATE', '203.192.205.85', '405', '2023-09-30 03:13:21'),
(711, '00027', 'Member Discharge', 'INSERT', '203.192.205.85', ' Shrikrishna Dattatry Kand ', '2023-09-30 03:22:50'),
(712, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Prabhakar P Joshi ', '2023-10-04 04:59:49'),
(713, '00002', 'User', 'INSERT', '103.169.157.38', 'Avinash M Mitkari', '2023-10-05 10:18:39'),
(714, '00002', 'User', 'INACTIVE U', '103.169.157.38', '00023', '2023-10-05 10:20:40'),
(715, '00002', 'User', 'INACTIVE U', '103.169.157.38', '00032', '2023-10-05 10:20:55'),
(716, '00002', 'User', 'INSERT', '103.169.157.38', 'Avinash M Mitkari A', '2023-10-05 10:23:46'),
(717, '00034', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-06 03:16:01'),
(718, '00034', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-06 03:17:42'),
(719, '00002', 'Room Bed Master', 'INSERT', '103.169.157.38', 'Bed 2', '2023-10-06 03:20:07'),
(720, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Sudha Shrikrishna Kand ', '2023-10-06 03:41:48'),
(721, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Shrikrishna Dattatraya Ka ', '2023-10-06 03:45:27'),
(722, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Shrikrishna Dattatraya Ka ', '2023-10-06 03:47:33'),
(723, '00027', 'Member Discharge', 'INSERT', '103.169.157.38', ' Ratnaprabha Joshi ', '2023-10-07 03:22:21'),
(724, '00040', 'Member Registration', 'INSERT', '27.97.139.143', '  ', '2023-10-09 01:24:10'),
(725, '00027', 'Member Discharge', 'INSERT', '103.169.157.38', ' Dongre Mangala ', '2023-10-10 02:48:13'),
(726, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Sushma Kisan Bhatambrekar ', '2023-10-10 03:23:17'),
(727, '00002', 'User', 'INSERT', '103.186.133.168', 'Rajashri L Patil', '2023-10-12 09:56:54'),
(728, '00040', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-12 04:51:55'),
(729, '00040', 'Member Management', 'UPDATE', '103.169.157.38', ' Sudha Vaman Parab ', '2023-10-12 04:55:46'),
(730, '00040', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-12 06:02:35'),
(731, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Sudha Vaman Parab ', '2023-10-12 06:10:58'),
(732, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Subramani K R ', '2023-10-13 12:36:58'),
(733, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Rekha Paralkar ', '2023-10-13 01:15:55'),
(734, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Malini Kashikar ', '2023-10-13 03:15:06'),
(735, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Kshama Jayant Majumdar ', '2023-10-13 03:44:31'),
(736, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Manjusha M Deshmukh ', '2023-10-16 05:02:19'),
(737, '00002', 'User', 'INSERT', '103.169.157.38', 'Ashwini Dipak Ubale', '2023-10-20 12:12:42'),
(738, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' DKT test ', '2023-10-20 02:50:51'),
(739, '00027', 'Member Discharge', 'INSERT', '103.169.157.38', ' Sudha Vaman Parab ', '2023-10-20 04:30:31'),
(740, '00040', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-20 06:12:57'),
(741, '00034', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-22 10:30:44'),
(742, '00034', 'Member Management', 'UPDATE', '103.169.157.38', ' Bindumadhav Sathe ', '2023-10-22 10:34:45'),
(743, '00034', 'Member Management', 'UPDATE', '103.169.157.38', ' Bindumadhav Sathe ', '2023-10-22 10:35:29'),
(744, '00002', 'Room Master', 'INSERT', '152.57.214.51', '501', '2023-10-22 02:07:49'),
(745, '00002', 'Room Master', 'INSERT', '152.57.214.51', '502', '2023-10-22 02:08:31'),
(746, '00002', 'Room Master', 'INSERT', '152.57.214.51', '503', '2023-10-22 02:09:09'),
(747, '00002', 'Room Master', 'INSERT', '152.57.214.51', '504', '2023-10-22 02:09:45'),
(748, '00002', 'Room Master', 'INSERT', '152.57.214.51', '505', '2023-10-22 02:10:40'),
(749, '00002', 'Room Master', 'INSERT', '152.57.214.51', '506', '2023-10-22 02:11:21'),
(750, '00002', 'Room Master', 'INSERT', '152.57.214.51', '507', '2023-10-22 02:11:59'),
(751, '00002', 'Room Master', 'INSERT', '152.57.214.51', '508', '2023-10-22 02:12:28'),
(752, '00002', 'Room Master', 'INSERT', '152.57.214.51', '509', '2023-10-22 02:13:21'),
(753, '00002', 'Room Master', 'INSERT', '152.57.214.51', '510', '2023-10-22 02:13:54'),
(754, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:14:25'),
(755, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:14:42'),
(756, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:15:05'),
(757, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:15:26'),
(758, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:15:42'),
(759, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:16:06'),
(760, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:16:25'),
(761, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:16:40'),
(762, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 3', '2023-10-22 02:17:03'),
(763, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:17:24'),
(764, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:17:41'),
(765, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:17:57'),
(766, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:18:13'),
(767, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:18:30'),
(768, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:18:49'),
(769, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:19:13'),
(770, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 1', '2023-10-22 02:19:31'),
(771, '00002', 'Room Bed Master', 'INSERT', '152.57.214.51', 'Bed 2', '2023-10-22 02:20:10'),
(772, '00034', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-23 05:44:21'),
(773, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Kunda Sharad Jog ', '2023-10-24 04:30:22'),
(774, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Bindumadhav Sathe ', '2023-10-24 04:37:43'),
(775, '00002', 'Room Master', 'INSERT', '103.186.133.168', '601', '2023-10-25 01:00:13'),
(776, '00002', 'Room Master', 'INSERT', '103.186.133.168', '602', '2023-10-25 01:00:36'),
(777, '00002', 'Room Master', 'INSERT', '103.186.133.168', '603', '2023-10-25 01:00:59'),
(778, '00002', 'Room Master', 'INSERT', '103.186.133.168', '604', '2023-10-25 01:01:18'),
(779, '00002', 'Room Master', 'INSERT', '103.186.133.168', '605', '2023-10-25 01:01:44'),
(780, '00002', 'Room Master', 'INSERT', '103.186.133.168', '606', '2023-10-25 01:02:06'),
(781, '00002', 'Room Master', 'INSERT', '103.186.133.168', '607', '2023-10-25 01:02:37'),
(782, '00002', 'Room Master', 'INSERT', '103.186.133.168', '608', '2023-10-25 01:02:58'),
(783, '00002', 'Room Master', 'INSERT', '103.186.133.168', '609', '2023-10-25 01:03:19'),
(784, '00002', 'Room Master', 'INSERT', '103.186.133.168', '610', '2023-10-25 01:03:38'),
(785, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:04:01'),
(786, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:04:14'),
(787, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:04:34'),
(788, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:04:51'),
(789, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:05:04'),
(790, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:05:19'),
(791, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:05:36'),
(792, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:05:50'),
(793, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 3', '2023-10-25 01:06:03'),
(794, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:06:15'),
(795, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:06:32'),
(796, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:06:46'),
(797, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:07:00'),
(798, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:07:14'),
(799, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:07:26'),
(800, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:07:42'),
(801, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 1', '2023-10-25 01:07:56'),
(802, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2023-10-25 01:08:11'),
(803, '00002', 'User', 'INACTIVE U', '103.186.133.168', '00031', '2023-10-25 02:23:25'),
(804, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Vasudeo Dattatry Phatak ', '2023-10-25 03:54:54'),
(805, '00027', 'Member Management', 'UPDATE', '103.169.157.38', ' Vasudeo Dattatry Phatak ', '2023-10-25 04:06:30'),
(806, '00040', 'Member Registration', 'INSERT', '103.169.157.38', '  ', '2023-10-25 04:32:53'),
(807, '00034', 'Member Registration', 'INSERT', '103.171.8.122', '  ', '2023-10-26 01:33:04'),
(808, '00002', 'User', 'INSERT', '103.186.133.168', 'Deepmala S Kalbhor', '2023-10-27 11:13:04'),
(809, '00034', 'Member Registration', 'INSERT', '103.171.8.122', '  ', '2023-10-28 03:21:52'),
(810, '00034', 'Member Management', 'UPDATE', '103.171.8.122', '  Veena Vishanu Bakshee ', '2023-10-28 03:32:38'),
(811, '00002', 'Member Management', 'UPDATE', '103.186.133.168', ' DKT testp ', '2023-10-30 10:35:23'),
(812, '00034', 'Member Registration', 'INSERT', '103.171.8.126', '  ', '2023-10-31 01:55:59'),
(813, '00034', 'Member Management', 'UPDATE', '103.171.8.126', ' Pushpa Aappaji Kulkarni ', '2023-10-31 01:58:39'),
(814, '00034', 'Member Registration', 'INSERT', '103.171.8.120', '  ', '2023-11-01 12:31:37'),
(815, '00034', 'Member Registration', 'INSERT', '103.171.8.120', '  ', '2023-11-01 12:58:43'),
(816, '00002', 'User', 'INSERT', '103.186.133.168', 'Kaushik S. Panditrao', '2023-11-01 03:25:38'),
(817, '00034', 'Member Registration', 'INSERT', '103.171.8.125', '  ', '2023-11-02 01:42:39'),
(818, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Mangesh Katdare ', '2023-11-02 03:40:55'),
(819, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Shubhangi Raykar ', '2023-11-02 04:00:25'),
(820, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Pushpa Aappaji Kulkarni ', '2023-11-02 04:13:58'),
(821, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Sushma Sathe ', '2023-11-02 04:26:10'),
(822, '00027', 'Member Discharge', 'INSERT', '103.171.8.125', ' Suman Kaluskar ', '2023-11-02 04:30:40'),
(823, '00027', 'Member Discharge', 'INSERT', '103.171.8.125', ' Subramani K R ', '2023-11-02 04:32:11'),
(824, '00027', 'Member Discharge', 'INSERT', '103.171.8.125', ' Raghunath N Khapre ', '2023-11-02 04:33:06'),
(825, '00027', 'Member Discharge', 'INSERT', '103.171.8.125', ' Leela Khapre ', '2023-11-02 04:35:15'),
(826, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Malini Kashikar ', '2023-11-02 05:31:36'),
(827, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Diwakar Joshi ', '2023-11-02 06:37:19'),
(828, '00027', 'Member Management', 'UPDATE', '103.171.8.125', '  Aappaji  Ramchandra Kulkarni ', '2023-11-02 06:38:09'),
(829, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Diwakar Joshi ', '2023-11-02 07:11:54'),
(830, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Dattatrya Chande ', '2023-11-02 07:14:23'),
(831, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' KUSUM BHAVISKAR ', '2023-11-03 11:18:24'),
(832, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Mangesh Katdare ', '2023-11-03 04:57:50'),
(833, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Vasudeo Dattatry Phatak ', '2023-11-03 06:50:51'),
(834, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-11-05 05:51:48'),
(835, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Mangesh Katdare ', '2023-11-07 12:23:20'),
(836, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Shubhangi Raykar ', '2023-11-07 12:24:33'),
(837, '00040', 'Member Management', 'UPDATE', '103.171.8.124', '  Aappaji  Ramchandra Kulkarni ', '2023-11-07 12:34:29'),
(838, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sushma Sathe ', '2023-11-07 12:35:02'),
(839, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vasudeo Dattatry Phatak ', '2023-11-07 12:35:34'),
(840, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sushma Kisan Bhatambrekar ', '2023-11-07 12:36:03'),
(841, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Bindumadhav Sathe ', '2023-11-07 12:36:39'),
(842, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sushma Sathe ', '2023-11-07 12:37:07'),
(843, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vasudeo Dattatry Phatak ', '2023-11-07 12:37:21'),
(844, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Bindumadhav Sathe ', '2023-11-07 12:37:35'),
(845, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Kunda Sharad Jog ', '2023-11-07 12:38:08'),
(846, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Shrikrishna Dattatraya Ka ', '2023-11-07 12:49:24'),
(847, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sushma Kisan Bhatambrekar ', '2023-11-07 12:53:46'),
(848, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Shrikrishna Dattatraya Ka ', '2023-11-07 12:54:16'),
(849, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Shrikrishna Dattatraya Ka ', '2023-11-07 12:55:54'),
(850, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Shrikrishna Dattatraya Ka ', '2023-11-07 12:56:54'),
(851, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sudha Shrikrishna Kand ', '2023-11-07 12:58:31'),
(852, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Mukund P Deshmukh ', '2023-11-07 01:05:35'),
(853, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Manjusha M Deshmukh ', '2023-11-07 01:06:17'),
(854, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Prabhakar P Joshi ', '2023-11-07 01:06:58'),
(855, '00027', 'Member Discharge', 'INSERT', '103.171.8.124', ' Malini Kashikar ', '2023-11-07 02:02:56'),
(856, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Prabhakar P Joshi ', '2023-11-07 04:17:32'),
(857, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' GURARATHI JAYASHREE ', '2023-11-07 04:27:11'),
(858, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' GURARATHI JAYASHREE ', '2023-11-07 04:28:02'),
(859, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Jayant Gujarati ', '2023-11-07 04:29:23'),
(860, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' GURARATHI JAYASHREE ', '2023-11-07 04:29:55'),
(861, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' GURARATHI JAYASHREE ', '2023-11-07 04:31:00'),
(862, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Jayant Gujarati ', '2023-11-07 04:31:58'),
(863, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' SAVITRI SURI ', '2023-11-07 04:40:19'),
(864, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' VIdya Kamtikar ', '2023-11-07 04:43:09'),
(865, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Velankar Anil ', '2023-11-07 04:44:42'),
(866, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Aparna Anil Velankar ', '2023-11-07 04:45:34'),
(867, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Velankar Anil ', '2023-11-07 04:47:41'),
(868, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Aparna Anil Velankar ', '2023-11-07 04:48:53'),
(869, '00027', 'Member Management', 'UPDATE', '103.171.8.124', ' Mr Prabhakar Vadalkar ', '2023-11-07 04:49:37'),
(870, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vaze Krishna ', '2023-11-07 04:49:54'),
(871, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vaze Krishna ', '2023-11-07 04:50:45'),
(872, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vaze Keshav ', '2023-11-07 04:51:30'),
(873, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vaze Keshav ', '2023-11-07 04:52:49'),
(874, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Rekha Paralkar ', '2023-11-07 04:57:56'),
(875, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Rekha Paralkar ', '2023-11-07 04:58:39'),
(876, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Deokishan Moolchand ', '2023-11-07 04:59:53'),
(877, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Deokishan Moolchand ', '2023-11-07 05:00:50'),
(878, '00027', 'Member Management', 'UPDATE', '103.171.8.124', ' Mr Prabhakar Vadalkar ', '2023-11-07 05:04:49'),
(879, '00027', 'Member Management', 'UPDATE', '103.171.8.124', ' Mr Prabhakar Vadalkar ', '2023-11-07 05:06:35'),
(880, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Kshama Jayant Majumdar ', '2023-11-07 05:07:32'),
(881, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Chaya Deshpande ', '2023-11-07 05:08:53'),
(882, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sheela Godbole ', '2023-11-07 05:10:05'),
(883, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vijaya Vaijapurkar ', '2023-11-07 05:11:35'),
(884, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vijaya Vaijapurkar ', '2023-11-07 05:12:10'),
(885, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Dattatrya Chande ', '2023-11-07 05:13:48'),
(886, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Dattatrya Chande ', '2023-11-07 05:16:20'),
(887, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Diwakar Joshi ', '2023-11-07 05:18:34'),
(888, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Diwakar Joshi ', '2023-11-07 05:46:40'),
(889, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Mohan Gulrajani ', '2023-11-07 05:50:54'),
(890, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Janardhan Sharveghar ', '2023-11-07 06:04:22'),
(891, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Mr Prabhakar Vadalkar ', '2023-11-07 06:05:29'),
(892, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Pratibha Vichare ', '2023-11-07 06:07:00'),
(893, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Vandana Waikar ', '2023-11-07 06:10:19'),
(894, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Prabhakar Waikar ', '2023-11-07 06:11:21'),
(895, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' KUSUM BHAVISKAR ', '2023-11-07 06:12:11'),
(896, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Usha Bhat ', '2023-11-07 06:13:40'),
(897, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Srilekha Sane ', '2023-11-07 06:16:26'),
(898, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Madhavi Kulkarni ', '2023-11-07 06:18:01'),
(899, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Sarojini Patel ', '2023-11-07 06:21:32'),
(900, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Pushpa Aappaji Kulkarni ', '2023-11-07 06:23:02'),
(901, '00040', 'Member Management', 'UPDATE', '103.171.8.124', '  Veena Vishanu Bakshee ', '2023-11-07 06:24:24'),
(902, '00027', 'Member Management', 'UPDATE', '103.186.133.168', ' Mukund P Deshmukh ', '2023-11-08 03:12:14'),
(903, '00027', 'Member Management', 'UPDATE', '103.171.8.124', ' Shubhangi Raykar ', '2023-11-08 04:19:37'),
(904, '00027', 'Member Management', 'UPDATE', '103.171.8.124', ' Vasudeo Dattatry Phatak ', '2023-11-08 05:23:04'),
(905, '00040', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-11-11 06:45:31'),
(906, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Suman Kaluskar ', '2023-11-11 07:00:07'),
(907, '00040', 'Member Management', 'UPDATE', '103.171.8.124', ' Suman Kaluskar ', '2023-11-11 07:12:49'),
(908, '00040', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2023-11-13 12:52:35'),
(909, '00040', 'Member Discharge', 'INSERT', '103.171.8.121', ' Chaya Deshpande ', '2023-11-13 04:01:47'),
(910, '00040', 'Member Discharge', 'INSERT', '103.171.8.127', '  Veena Vishanu Bakshee ', '2023-11-13 04:13:57'),
(911, '00040', 'Member Management', 'UPDATE', '103.171.8.127', ' Urmila Laxman Joglekar ', '2023-11-13 04:18:15'),
(912, '00034', 'Member Registration', 'INSERT', '103.171.8.122', '  ', '2023-11-15 11:57:58'),
(913, '00034', 'Member Registration', 'INSERT', '103.171.8.122', '  ', '2023-11-15 12:08:49'),
(914, '00027', 'Member Management', 'UPDATE', '103.171.8.120', ' Suman Kaluskar ', '2023-11-17 04:27:33'),
(915, '00027', 'Member Management', 'UPDATE', '103.171.8.120', ' Anil Yadaoao Lulay ', '2023-11-17 05:53:29'),
(916, '00027', 'Member Management', 'UPDATE', '103.171.8.120', ' Anil Yadaoao Lulay ', '2023-11-17 06:03:45'),
(917, '00040', 'Member Registration', 'INSERT', '103.171.8.125', '  ', '2023-11-21 05:32:46'),
(918, '00040', 'Member Registration', 'INSERT', '103.171.8.125', '  ', '2023-11-21 05:46:27'),
(919, '00002', 'User', 'INSERT', '103.186.133.168', 'Anita Sachin Tanpure', '2023-11-24 12:19:39'),
(920, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Satishchandra Rao ', '2023-11-28 04:12:16'),
(921, '00040', 'Member Discharge', 'INSERT', '103.186.133.168', ' Urmila Laxman Joglekar ', '2023-11-28 04:14:15'),
(922, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Satishchandra Rao ', '2023-11-28 04:25:43'),
(923, '00040', 'Member Registration', 'INSERT', '103.171.8.125', '  ', '2023-11-28 04:43:22'),
(924, '00027', 'Member Discharge', 'INSERT', '103.171.8.123', ' Anil Yadaoao Lulay ', '2023-11-29 12:37:34'),
(925, '00040', 'Member Management', 'UPDATE', '103.171.8.126', ' Mr Prabhakar Vadalkar ', '2023-12-04 03:05:11'),
(926, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Ramesh Bhagwat ', '2023-12-04 03:20:10'),
(927, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Ramesh Bhagwat ', '2023-12-04 03:25:59'),
(928, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 03:50:45'),
(929, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 03:57:01'),
(930, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 03:57:52'),
(931, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 03:59:30'),
(932, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 04:01:43'),
(933, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 04:02:10'),
(934, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Netra Deodhar ', '2023-12-04 04:02:39'),
(935, '00027', 'Member Discharge', 'INSERT', '103.171.8.126', '  Aappaji  Ramchandra Kulkarni ', '2023-12-04 04:18:19'),
(936, '00027', 'Member Discharge', 'INSERT', '103.171.8.126', ' Pushpa Aappaji Kulkarni ', '2023-12-04 04:18:55'),
(937, '00027', 'Member Management', 'UPDATE', '103.171.8.127', ' Ramesh Bhagwat ', '2023-12-05 03:19:16'),
(938, '00002', 'User', 'INSERT', '103.186.133.168', 'Sadhana S. Deval', '2023-12-08 12:14:11'),
(939, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-08 05:38:04'),
(940, '00040', 'Member Discharge', 'INSERT', '103.186.133.168', ' Prabhakar P Joshi ', '2023-12-09 01:11:23'),
(941, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-09 02:51:48'),
(942, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-09 04:05:25'),
(943, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-11 12:26:31'),
(944, '00040', 'Member Discharge', 'INSERT', '103.171.8.124', ' Kunda Sharad Jog ', '2023-12-11 12:36:31'),
(945, '00040', 'Member Discharge', 'INSERT', '103.171.8.124', ' Sham Deo ', '2023-12-11 12:37:28'),
(946, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Mangesh Katdare ', '2023-12-11 12:56:22'),
(947, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Mangesh Katdare ', '2023-12-11 12:57:06'),
(948, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Mangesh Katdare ', '2023-12-11 12:57:22'),
(949, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Jayant Gujarati ', '2023-12-11 01:02:42'),
(950, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Satishchandra Rao ', '2023-12-11 01:07:39'),
(951, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Aparna Anil Velankar ', '2023-12-11 01:10:16'),
(952, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Vaze Krishna ', '2023-12-11 01:12:06'),
(953, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-11 01:16:11'),
(954, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-13 02:44:43'),
(955, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-13 02:51:13'),
(956, '00034', 'Member Registration', 'INSERT', '103.171.8.124', '  ', '2023-12-13 03:07:36'),
(957, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Subhash Namjoshi ', '2023-12-16 12:31:03'),
(958, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Subhash Namjoshi ', '2023-12-16 12:31:43'),
(959, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Rekha Paralkar ', '2023-12-16 12:33:07'),
(960, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Dinkar Pillai ', '2023-12-16 12:34:10'),
(961, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Sheela Godbole ', '2023-12-16 12:36:04'),
(962, '00046', 'Member Management', 'UPDATE', '103.171.8.126', ' Sheela Godbole ', '2023-12-16 12:37:42'),
(963, '00027', 'Member Discharge', 'INSERT', '103.186.133.168', ' DKT testp ', '2023-12-19 03:30:13'),
(964, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Chaya Despande ', '2023-12-20 02:44:52'),
(965, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Chaya Despande ', '2023-12-20 02:53:25'),
(966, '00027', 'Member Management', 'UPDATE', '103.171.8.126', ' Vasudev Kulkarni ', '2023-12-20 03:06:41'),
(967, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2023-12-20 04:45:15'),
(968, '00040', 'Member Discharge', 'INSERT', '103.171.8.121', ' Mohan Gulrajani ', '2023-12-22 03:19:09'),
(969, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2023-12-22 03:24:50'),
(970, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Rajendra Gohil ', '2023-12-22 03:31:01'),
(971, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Smita Godbole ', '2023-12-23 03:48:28'),
(972, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Rajendra Gohil ', '2023-12-23 03:53:39'),
(973, '00002', 'User', 'INSERT', '103.171.8.125', 'Pranali S Gaikwad', '2023-12-23 05:16:01'),
(974, '00002', 'User', 'INACTIVE U', '103.171.8.125', '00025', '2023-12-23 05:16:41'),
(975, '00002', 'User', 'INACTIVE U', '103.171.8.125', '00035', '2023-12-23 05:17:32'),
(976, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2023-12-23 05:49:31'),
(977, '00027', 'Member Discharge', 'INSERT', '103.171.8.125', ' Mangesh Katdare ', '2023-12-26 03:52:27'),
(978, '00027', 'Member Discharge', 'INSERT', '103.171.8.125', ' Vaze Keshav ', '2023-12-26 03:53:53'),
(979, '00002', 'Member Management', 'UPDATE', '103.186.133.168', ' TTK ', '2023-12-29 01:49:20'),
(980, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Meena Pai ', '2023-12-30 02:34:46'),
(981, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Vasudha Laxmikant Sunthankar ', '2023-12-30 03:49:57'),
(982, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2024-01-01 04:29:48'),
(983, '00034', 'Member Registration', 'INSERT', '103.171.8.122', '  ', '2024-01-04 01:37:55'),
(984, '00034', 'Member Registration', 'INSERT', '103.171.8.122', '  ', '2024-01-04 02:44:04'),
(985, '00002', 'User', 'INSERT', '103.186.133.168', 'Avinash S. Mitkarii', '2024-01-06 12:36:12'),
(986, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2024-01-06 03:35:42'),
(987, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Mira De ', '2024-01-06 03:35:58'),
(988, '00002', 'Room Bed Master', 'INSERT', '152.57.238.239', '2', '2024-01-06 03:55:04'),
(989, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2024-01-06 04:12:43'),
(990, '00027', 'Member Discharge', 'INSERT', '103.171.8.121', ' Vasudeo Dattatry Phatak ', '2024-01-08 03:19:34'),
(991, '00027', 'Member Discharge', 'INSERT', '103.171.8.121', ' Dinkar Pillai ', '2024-01-08 03:20:09'),
(992, '00027', 'Member Discharge', 'INSERT', '103.171.8.121', ' Subhash Namjoshi ', '2024-01-08 03:21:08'),
(993, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Dinesh De ', '2024-01-09 03:52:38'),
(994, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Dinesh De ', '2024-01-09 03:59:31'),
(995, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Dinesh De ', '2024-01-09 04:07:01'),
(996, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Dinesh De ', '2024-01-09 04:17:32'),
(997, '00040', 'Member Discharge', 'INSERT', '103.171.8.121', ' Vaze Krishna ', '2024-01-09 04:23:47'),
(998, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Mira De ', '2024-01-09 04:36:54'),
(999, '00027', 'Member Management', 'UPDATE', '103.171.8.121', ' Smita Datar ', '2024-01-09 05:01:27'),
(1000, '00034', 'Member Registration', 'INSERT', '103.171.8.125', '  ', '2024-01-11 12:38:59'),
(1001, '00034', 'Member Management', 'UPDATE', '103.171.8.125', ' Uash Apte ', '2024-01-11 12:44:34'),
(1002, '00040', 'Member Discharge', 'INSERT', '103.171.8.123', ' Meena Pai ', '2024-01-11 01:48:35'),
(1003, '00040', 'Member Discharge', 'INSERT', '103.171.8.123', ' Smita Godbole ', '2024-01-11 01:49:17'),
(1004, '00002', 'User', 'INSERT', '103.186.133.168', 'Vijay S Rhayakar', '2024-01-12 09:16:35'),
(1005, '00040', 'Member Discharge', 'INSERT', '103.171.8.125', ' Ramesh Bhagwat ', '2024-01-12 01:06:22'),
(1006, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 03:34:45'),
(1007, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:19'),
(1008, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1009, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1010, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1011, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1012, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1013, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1014, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1015, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1016, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:20'),
(1017, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1018, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1019, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1020, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1021, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1022, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1023, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1024, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1025, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1026, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1027, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1028, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1029, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1030, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1031, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1032, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21');
INSERT INTO `logfile` (`logid`, `user_id`, `module`, `event`, `ipaddress`, `value`, `date_time`) VALUES
(1033, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1034, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1035, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1036, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:21'),
(1037, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1038, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1039, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1040, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1041, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1042, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1043, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1044, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1045, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1046, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1047, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1048, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:08:22'),
(1049, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:20:41'),
(1050, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:33:00'),
(1051, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 04:44:06'),
(1052, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' Usha Apte ', '2024-01-12 05:46:36'),
(1053, '00028', 'Member Management', 'UPDATE', '103.186.133.168', ' Usha Apte ', '2024-01-12 05:46:48'),
(1054, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' Usha Apte ', '2024-01-12 06:09:44'),
(1055, '00027', 'Member Management', 'UPDATE', '103.171.8.125', ' GUJARATHI JAYASHREE ', '2024-01-13 03:37:46'),
(1056, '00034', 'Member Registration', 'INSERT', '103.171.8.123', '  ', '2024-01-13 04:30:44'),
(1057, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Shrikrishna Dattatraya Kand ', '2024-01-14 04:42:29'),
(1058, '00040', 'Member Management', 'UPDATE', '103.171.8.125', ' Shreelekha Sane ', '2024-01-14 04:43:36'),
(1059, '00027', 'Member Discharge', 'INSERT', '103.171.8.122', ' Sushila Deodhar ', '2024-01-16 04:17:05'),
(1060, '00002', 'User', 'INSERT', '103.186.133.168', 'Yash Uday Shede', '2024-01-17 12:34:04'),
(1061, '00002', 'User', 'INSERT', '103.186.133.168', 'Gautam Babasaheb Kambale', '2024-01-17 12:36:36'),
(1062, '00027', 'Member Management', 'UPDATE', '103.171.8.122', ' Vaishali Patade ', '2024-01-17 02:54:22'),
(1063, '00027', 'Member Management', 'UPDATE', '103.171.8.122', ' Vaishali Patade ', '2024-01-17 04:13:55'),
(1064, '00027', 'Member Discharge', 'INSERT', '103.171.8.122', ' Manjusha M Deshmukh ', '2024-01-23 06:40:19'),
(1065, '00027', 'Member Discharge', 'INSERT', '103.171.8.122', ' Mukund P Deshmukh ', '2024-01-23 06:40:48'),
(1066, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Dinesh De ', '2024-01-26 05:25:03'),
(1067, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Vaishali Patade ', '2024-01-26 05:25:34'),
(1068, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Mira De ', '2024-01-26 05:26:13'),
(1069, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Vaishali Patade ', '2024-01-26 05:26:35'),
(1070, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Usha Apte ', '2024-01-26 05:26:56'),
(1071, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Dinesh De ', '2024-01-26 05:27:15'),
(1072, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Mira De ', '2024-01-26 05:27:52'),
(1073, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Smita Datar ', '2024-01-26 05:28:26'),
(1074, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Vasudha Laxmikant Sunthankar ', '2024-01-26 05:28:53'),
(1075, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Bhalchandra Paranjape ', '2024-01-26 05:29:20'),
(1076, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Shubhada Kulkarni ', '2024-01-26 05:29:43'),
(1077, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Vasudev Kulkarni ', '2024-01-26 05:30:06'),
(1078, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Chaya Despande ', '2024-01-26 05:30:30'),
(1079, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Chaya Despande ', '2024-01-26 05:30:48'),
(1080, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Netra Deodhar ', '2024-01-26 05:31:12'),
(1081, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Satishchandra Rao ', '2024-01-26 05:31:29'),
(1082, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Suman Kaluskar ', '2024-01-26 05:31:48'),
(1083, '00040', 'Member Management', 'UPDATE', '103.171.8.122', ' Shubhangi Raykar ', '2024-01-26 05:32:05'),
(1084, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2024-01-27 05:31:17'),
(1085, '00027', 'Member Management', 'UPDATE', '103.171.8.122', ' Sham Deo ', '2024-01-31 06:43:06'),
(1086, '00027', 'Member Management', 'UPDATE', '103.171.8.122', ' Sham Deo ', '2024-01-31 06:46:21'),
(1087, '00034', 'Member Registration', 'INSERT', '103.171.8.127', '  ', '2024-02-01 02:47:21'),
(1088, '00034', 'Member Registration', 'INSERT', '103.171.8.126', '  ', '2024-02-02 04:37:16'),
(1089, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2024-02-03 03:58:40'),
(1090, '00002', 'User', 'INSERT', '103.186.133.168', 'Bhavika S. Meerchandani', '2024-02-05 09:39:33'),
(1091, '00002', 'Room Bed Master', 'INSERT', '103.186.133.168', 'Bed 2', '2024-02-05 09:45:38'),
(1092, '00002', 'Member Registration', 'INSERT', '103.171.8.120', '  ', '2024-02-05 03:15:48'),
(1093, '00052', 'Member Registration', 'INSERT', '103.171.8.120', '  ', '2024-02-05 03:21:22'),
(1094, '00052', 'Member Management', 'UPDATE', '103.171.8.120', ' XY ', '2024-02-05 03:25:01'),
(1095, '00052', 'Member Management', 'UPDATE', '103.171.8.120', ' XY ', '2024-02-05 03:26:03'),
(1096, '00002', 'User', 'INACTIVE U', '103.186.133.168', '00027', '2024-02-08 12:40:59'),
(1097, '00034', 'Member Registration', 'INSERT', '103.171.8.127', '  ', '2024-02-08 03:13:49'),
(1098, '00034', 'Member Registration', 'INSERT', '103.171.8.127', '  ', '2024-02-08 03:39:48'),
(1099, '00034', 'Member Registration', 'INSERT', '103.171.8.127', '  ', '2024-02-09 05:39:46'),
(1100, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Vimal Sadashiv Sohoni ', '2024-02-09 05:40:14'),
(1101, '00052', 'Member Discharge', 'INSERT', '103.171.8.125', ' Satishchandra Rao ', '2024-02-10 10:59:47'),
(1102, '00052', 'Member Management', 'UPDATE', '106.213.83.173', ' Vimal Sadashiv Sohoni ', '2024-02-10 11:39:52'),
(1103, '00052', 'Member Management', 'UPDATE', '106.213.87.127', ' Vimal Sadashiv Sohoni ', '2024-02-12 01:16:50'),
(1104, '00052', 'Member Discharge', 'INSERT', '103.171.8.125', ' Rajendra Gohil ', '2024-02-12 11:54:00'),
(1105, '00052', 'Member Discharge', 'INSERT', '103.171.8.125', ' Sulbha Kale ', '2024-02-12 11:55:03'),
(1106, '00002', 'Member Registration', 'INSERT', '103.186.133.168', '  ', '2024-02-12 12:32:52'),
(1107, '00002', 'Member Management', 'UPDATE', '103.186.133.168', ' Vidya Arun Mujumdar ', '2024-02-12 12:34:56'),
(1108, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Sunanda M Bal ', '2024-02-12 12:55:23'),
(1109, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Sunanda M Bal ', '2024-02-12 12:56:10'),
(1110, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Sunanda M Bal ', '2024-02-12 12:59:18'),
(1111, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Sunanda M Bal ', '2024-02-12 01:02:04'),
(1112, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vidya Arun Mujumdar ', '2024-02-12 01:25:16'),
(1113, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Shreelekha Sane ', '2024-02-12 03:14:54'),
(1114, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Shreelekha Sane ', '2024-02-12 03:22:50'),
(1115, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vidya Arun Mujumdar ', '2024-02-12 03:23:47'),
(1116, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vidya Arun Mujumdar ', '2024-02-12 03:46:07'),
(1117, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vidya Arun Mujumdar ', '2024-02-12 03:46:39'),
(1118, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vidya Arun Mujumdar ', '2024-02-12 03:48:55'),
(1119, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vidya Arun Mujumdar ', '2024-02-12 03:51:20'),
(1120, '00052', 'Member Management', 'UPDATE', '103.171.8.125', ' Vijaya Vaijapurkar ', '2024-02-12 04:02:48'),
(1121, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Awadhoot Bhalekar ', '2024-02-13 10:50:39'),
(1122, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Awadhoot Bhalekar ', '2024-02-13 10:51:46'),
(1123, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Awadhoot Bhalekar ', '2024-02-13 10:53:31'),
(1124, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Awadhoot Bhalekar ', '2024-02-13 11:05:10'),
(1125, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Netra Deodhar ', '2024-02-13 11:18:04'),
(1126, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Netra Deodhar ', '2024-02-13 11:34:15'),
(1127, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Netra Deodhar ', '2024-02-13 04:15:52'),
(1128, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Gore ', '2024-02-13 05:03:42'),
(1129, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Gore ', '2024-02-13 05:09:34'),
(1130, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Gore ', '2024-02-13 05:16:18'),
(1131, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Gore ', '2024-02-13 05:16:19'),
(1132, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Gore ', '2024-02-13 05:18:05'),
(1133, '00052', 'Member Discharge', 'INSERT', '103.171.8.122', ' Awadhoot Bhalekar ', '2024-02-14 11:47:22'),
(1134, '00002', 'User', 'INSERT', '103.171.8.121', 'Bhavikaa Meerchandani Sharmaa', '2024-02-15 10:12:26'),
(1135, '00002', 'Member Management', 'UPDATE', '103.171.8.122', ' Sarojini Patel ', '2024-02-15 12:56:42'),
(1136, '00034', 'Member Registration', 'INSERT', '103.171.8.125', '  ', '2024-02-15 04:46:28'),
(1137, '00002', 'Insurance Company', 'INSERT', '103.186.133.168', 'Bajaj Aliyanz Insurance', '2024-02-16 10:01:31'),
(1138, '00002', 'Insurance Company', 'INSERT', '103.186.133.168', 'Star Health and Allied Insurance Co Ltd', '2024-02-16 10:06:13'),
(1139, '00002', 'Insurance Company', 'INSERT', '103.186.133.168', 'HDFC ERGO', '2024-02-16 10:14:27'),
(1140, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Vasudev Kulkarni ', '2024-02-16 02:49:35'),
(1141, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Vasudev Kulkarni ', '2024-02-16 03:03:25'),
(1142, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Vasudev Kulkarni ', '2024-02-16 03:05:39'),
(1143, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Suman Kaluskar ', '2024-02-16 03:14:46'),
(1144, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Vaishali Patade ', '2024-02-16 03:25:40'),
(1145, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' SAVITRI SURI ', '2024-02-16 03:34:51'),
(1146, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' SAVITRI SURI ', '2024-02-16 03:34:52'),
(1147, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' SAVITRI SURI ', '2024-02-16 03:35:43'),
(1148, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' SAVITRI SURI ', '2024-02-16 03:35:44'),
(1149, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Sheela Godbole ', '2024-02-16 03:50:00'),
(1150, '00040', 'Member Discharge', 'INSERT', '103.171.8.126', ' TTK ', '2024-02-16 05:36:58'),
(1151, '00040', 'Member Discharge', 'INSERT', '103.171.8.126', ' XY ', '2024-02-16 05:39:14'),
(1152, '00040', 'Member Discharge', 'INSERT', '103.171.8.126', ' Sham Deo ', '2024-02-16 05:39:48'),
(1153, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Aparna Anil Velankar ', '2024-02-17 12:20:53'),
(1154, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Suman Kaluskar ', '2024-02-17 12:51:06'),
(1155, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Suman Kaluskar ', '2024-02-17 12:51:42'),
(1156, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Shubhada Kulkarni ', '2024-02-17 12:55:33'),
(1157, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Shubhada Kulkarni ', '2024-02-17 12:56:26'),
(1158, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Shrikrishna Dattatraya Kand ', '2024-02-17 12:59:49'),
(1159, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Sudha Shrikrishna Kand ', '2024-02-17 01:04:51'),
(1160, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' Vijaya Vaijapurkar ', '2024-02-17 01:27:57'),
(1161, '00052', 'Member Management', 'UPDATE', '103.171.8.123', ' GUJARATHI JAYASHREE ', '2024-02-17 01:29:21'),
(1162, '00034', 'Member Registration', 'INSERT', '103.171.8.121', '  ', '2024-02-17 03:44:24'),
(1163, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Usha Apte ', '2024-02-17 03:56:26'),
(1164, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Chaya Despande ', '2024-02-17 03:56:54'),
(1165, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Netra Deodhar ', '2024-02-17 03:57:29'),
(1166, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Netra Deodhar ', '2024-02-17 03:57:32'),
(1167, '00034', 'Member Management', 'UPDATE', '103.171.8.121', ' Diwakar Joshi ', '2024-02-17 03:58:20'),
(1168, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 12:47:37'),
(1169, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:03:24'),
(1170, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:10:28'),
(1171, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:11:49'),
(1172, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:13:45'),
(1173, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:15:54'),
(1174, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:16:37'),
(1175, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 01:32:06'),
(1176, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Patki ', '2024-02-19 01:41:05'),
(1177, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Patki ', '2024-02-19 02:34:20'),
(1178, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Patki ', '2024-02-19 02:36:36'),
(1179, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Veena Patki ', '2024-02-19 03:57:24'),
(1180, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Vilas Jaywant Rao Nitturkar ', '2024-02-19 04:53:09'),
(1181, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Veena Patki ', '2024-02-19 04:54:01'),
(1182, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Vidya Arun Mujumdar ', '2024-02-19 04:54:40'),
(1183, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Vidya Arun Mujumdar ', '2024-02-19 04:55:10'),
(1184, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Vimal Sadashiv Sohoni ', '2024-02-19 04:57:13'),
(1185, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Dinesh De ', '2024-02-19 05:06:02'),
(1186, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Smita Datar ', '2024-02-19 05:06:46'),
(1187, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Vasudha Laxmikant Sunthankar ', '2024-02-19 05:07:17'),
(1188, '00034', 'Member Management', 'UPDATE', '103.171.8.127', ' Bhalchandra Paranjape ', '2024-02-19 05:07:43'),
(1189, '00052', 'Member Management', 'UPDATE', '103.171.8.122', ' Vilas Jaywant Rao Nitturkar ', '2024-02-21 12:15:29'),
(1190, '00052', 'Member Discharge', 'INSERT', '103.171.8.122', ' Sunanda M Bal ', '2024-02-22 11:07:55'),
(1191, '00034', 'Member Registration', 'INSERT', '103.171.8.126', '  ', '2024-02-26 03:37:46'),
(1192, '00052', 'Member Discharge', 'INSERT', '103.171.8.122', ' Vidya Arun Mujumdar ', '2024-02-26 03:41:24'),
(1193, '00002', 'Member Registration', 'INSERT', '103.171.8.126', '  ', '2024-02-28 12:56:18'),
(1194, '00052', 'Member Discharge', 'INSERT', '103.171.8.126', ' Meena S Pai ', '2024-03-04 04:47:58'),
(1195, '00052', 'Member Discharge', 'INSERT', '103.171.8.126', ' Vilas Jaywant Rao Nitturkar ', '2024-03-04 04:49:15'),
(1196, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Suresh Raje ', '2024-03-04 04:56:50'),
(1197, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' GUJARATHI JAYASHREE ', '2024-03-05 01:19:58'),
(1198, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' GUJARATHI JAYASHREE ', '2024-03-05 02:34:14'),
(1199, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' GUJARATHI JAYASHREE ', '2024-03-05 02:36:14'),
(1200, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Suresh Raje ', '2024-03-05 03:01:10'),
(1201, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Suresh Raje ', '2024-03-05 03:04:36'),
(1202, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Suresh Raje ', '2024-03-05 03:05:13'),
(1203, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Veena Patki ', '2024-03-05 03:14:15'),
(1204, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Vimal Sadashiv Sohoni ', '2024-03-05 03:16:37'),
(1205, '00052', 'Member Management', 'UPDATE', '103.171.8.126', ' Kashinath Gopal Gore ', '2024-03-05 03:32:07'),
(1206, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:43:41'),
(1207, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:44:34'),
(1208, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:45:23'),
(1209, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:46:43'),
(1210, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:47:56'),
(1211, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:48:59'),
(1212, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:49:52'),
(1213, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:50:51'),
(1214, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:51:46'),
(1215, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:52:32'),
(1216, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:53:29'),
(1217, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:54:17'),
(1218, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:54:37'),
(1219, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:55:48'),
(1220, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:56:39'),
(1221, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:57:30'),
(1222, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:58:23'),
(1223, '00028', 'Member Management', 'UPDATE', '::1', ' Suresh Raje ', '2024-03-05 03:59:51'),
(1224, '00002', 'User', 'INSERT', '::1', 'fs mn ls', '2024-03-05 09:46:34'),
(1225, '00002', 'User', 'INSERT', '::1', 'pfs md pfs', '2024-03-05 09:50:07'),
(1226, '00002', 'User', 'UPDATE', '::1', 'balajis pandurang Muttepawar', '2024-03-06 06:22:27'),
(1227, '00002', 'User', 'UPDATE', '::1', 'Rajashri L Patil', '2024-03-06 06:24:31'),
(1228, '00002', 'User', 'UPDATE', '::1', 'Rajashri L Patil', '2024-03-06 06:25:05'),
(1229, '00029', 'Member Registration', 'INSERT', '::1', '  ', '2024-05-10 10:10:27'),
(1230, '00028', 'Member Management', 'UPDATE', '::1', ' balaji ', '2024-05-10 10:46:24'),
(1231, '00002', 'User', 'UPDATE', '::1', 'balaji pandurang Muttepawar', '2024-05-18 06:43:35'),
(1232, '00002', 'User', 'UPDATE', '::1', 'Shivrudra V Lupane', '2024-05-18 06:51:47');

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_module`, `page_name`, `page_link`, `organization`, `InActive`) VALUES
(1, 'System Pages', 'Access to System Pages', 'pages', 'aastha', 0),
(2, 'System Pages', 'Add Page', 'add_page', 'aastha', 0),
(3, 'System Pages', 'Update Page', 'update_page', 'aastha', 0),
(4, 'System Pages', 'Delete Page', 'delete_page', 'aastha', 0),
(35, 'User Roles', 'Delete User Roles', 'delete_roles', 'aastha', 0),
(34, 'User Roles', 'Update User Roles', 'update_roles', 'aastha', 0),
(33, 'User Roles', 'Add User Roles', 'add_roles', 'aastha', 0),
(32, 'User Roles', 'Access to User Roles', 'roles', 'aastha', 0),
(28, 'Department', 'Access to Department', 'department', 'aastha', 0),
(29, 'Department', 'Add Department', 'add_department', 'aastha', 0),
(30, 'Department', 'Update Department', 'update_department', 'aastha', 0),
(31, 'Department', 'Delete Department', 'delete_department', 'aastha', 0),
(36, 'System User', 'Access to System User', 'view_user', 'aastha', 0),
(37, 'System User', 'Add User', 'add_user', 'aastha', 0),
(38, 'System User', 'Update User', 'update_user', 'aastha', 0),
(39, 'System User', 'Delete User', 'delete_user', 'aastha', 0),
(40, 'Designation', 'Access to Designation', 'designation', 'aastha', 0),
(41, 'Designation', 'Add Designation', 'add_designation', 'aastha', 0),
(42, 'Designation', 'Update Designation', 'update_designation', 'aastha', 0),
(43, 'Designation', 'Delete Designation', 'delete_designation', 'aastha', 0),
(44, 'Room Management', 'Access to Room Management', 'room_management', 'aastha', 0),
(45, 'Room Management', 'Add Room Management', 'add_room_management', 'aastha', 0),
(46, 'Room Management', 'Update Room Management', 'update_room_management', 'aastha', 0),
(47, 'Room Management', 'Delete Room Management', 'delete_room_management', 'aastha', 0),
(48, 'Patient Management', 'Add New Patient', 'add_new_patient', 'aastha', 0),
(49, 'Patient Management', 'Access to Patient Master', 'patient_master', 'aastha', 0),
(50, 'Patient Management', 'Patient Demographic', 'patient_demographic', 'aastha', 0),
(51, 'Patient Management', 'Modify Patient Information', 'modiffy_patient', 'aastha', 0),
(52, 'System Parameters', 'Access to System Parameters', 'parameters', 'aastha', 0),
(53, 'System Parameters', 'Add Parameters', 'add_sys_param', 'aastha', 0),
(54, 'System Parameters', 'Update Parameters', 'update_sys_param', 'aastha', 0),
(55, 'System Parameters', 'Delete Parameters', 'delete_sys_param', 'aastha', 0),
(56, 'Bill Group Name', 'Access to Bill Group Name', 'group_name', 'aastha', 0),
(57, 'Bill Group Name', 'Add Group Name', 'add_group_name', 'aastha', 0),
(58, 'Bill Group Name', 'Update Group Name', 'update_group_name', 'aastha', 0),
(59, 'Bill Group Name', 'Delete Group Name', 'delete_group_name', 'aastha', 0),
(60, 'Particular Bill', 'Access to Particular Bill', 'particular_bill', 'aastha', 0),
(61, 'Particular Bill', 'Add Particular Bill', 'add_particular_bill', 'aastha', 0),
(62, 'Particular Bill', 'Update Particular Bill', 'update_particular_bill', 'aastha', 0),
(63, 'Particular Bill', 'Delete Particular Bill', 'delete_particular_bill', 'aastha', 0),
(64, 'Diagnosis Master', 'Access to Diagnosis Master', 'diagnosis', 'aastha', 0),
(65, 'Diagnosis Master', 'Add Diagnosis Master', 'add_diagnosis', 'aastha', 0),
(66, 'Diagnosis Master', 'Update Diagnosis Master', 'update_diagnosis', 'aastha', 0),
(67, 'Diagnosis Master', 'Delete Diagnosis Master', 'delete_diagnosis', 'aastha', 0),
(68, 'Insurance Company', 'Access to Insurance Company', 'insurance_company', 'aastha', 0),
(69, 'Insurance Company', 'Add Insurance Company', 'add_insurance_company', 'aastha', 0),
(70, 'Insurance Company', 'Update Insurance Company', 'update_insurance_company', 'aastha', 0),
(71, 'Insurance Company', 'Delete Insurance Company', 'delete_insurance_company', 'aastha', 0),
(72, 'Complain Module', 'Access to Complain Module', 'complain', 'aastha', 0),
(73, 'Complain Module', 'Add Complain Module', 'add_complain', 'aastha', 0),
(74, 'Complain Module', 'Update Complain', 'update_complain', 'aastha', 0),
(75, 'Complain Module', 'Delete Complain', 'delete_complain', 'aastha', 0),
(76, 'Medicine Category', 'Access to Medicine Category', 'medicine_category', 'aastha', 0),
(77, 'Medicine Category', 'Add Medicine Category', 'add_medicine_category', 'aastha', 0),
(78, 'Medicine Category', 'Update Medicine Category', 'update_medical_category', 'aastha', 0),
(79, 'Medicine Category', 'Delete Medicine Category', 'delete_medical_category', 'aastha', 0),
(80, 'Drug Name Master', 'Access to Drug Name Master', 'drug_name', 'aastha', 0),
(81, 'Drug Name Master', 'Add Drug Name Master', 'add_drug_name', 'aastha', 0),
(82, 'Drug Name Master', 'Update Drug Name Master', 'update_drug_name', 'aastha', 0),
(83, 'Drug Name Master', 'Delete Drug Name Master', 'delete_drug_name', 'aastha', 0),
(84, 'Billing Module', 'Access to POS', 'pos', 'aastha', 0),
(85, 'Billing Module', 'Access to Billing List', 'billing_history', 'aastha', 0),
(86, 'OR History', 'Access to OR History', 'OR_history', 'aastha', 0),
(87, 'Reports', 'Daily Sales Reports', 'daily_reports', 'aastha', 0),
(88, 'Reports', 'Patient List Report', 'patient_list_report', 'aastha', 0),
(89, 'Doctor Module', 'OPD', 'doctor_opd', 'aastha', 0),
(90, 'Doctor Module', 'IPD', 'ipd_doctor', 'aastha', 0),
(91, 'Patient Management', 'OPD Registration', 'opd_registration', 'aastha', 0),
(92, 'Patient Management', 'OPD Enquiry', 'opd_enquiry', 'aastha', 0),
(93, 'Patient Management', 'IPD Registration', 'ipd_registration', 'aastha', 0),
(94, 'Patient Management', 'IPD Enquiry', 'ipd_enquiry', 'aastha', 0),
(95, 'EMR Sheet', 'OPD EMR', 'opd_emr', 'aastha', 0),
(96, 'EMR Sheet', 'IPD EMR', 'ipd_emr', 'aastha', 0),
(97, 'OPD Reports', 'Patient Diagnosis Reports', 'opd_diagnosis_reports', 'aastha', 0),
(98, 'Reports', 'Individual Patient  Reports', 'patient_visited_report', 'aastha', 0),
(99, 'Room Management', 'Room Enquiry', 'room_enquiry', 'aastha', 0),
(100, 'Nurse Module', 'Patient Medication', 'nurse_medication_reports', 'aastha', 0),
(101, 'Nurse Module', 'Intake/Output Record', 'nurse_intake_output_reports', 'aastha', 0),
(102, 'Nurse Module', 'Nurse Progress Note', 'nurse_progress_note_report', 'aastha', 0),
(103, 'Nurse Module', 'Patient Vital Sign', 'nurse_vital_sign_report', 'aastha', 0),
(104, 'Nurse Module', 'IP Room Transfer', 'nurse_room_transfer_report', 'aastha', 0),
(105, 'Nurse Module', 'Patient History', 'nurse_patientHistory_report', 'aastha', 0),
(106, 'Nurse Module', 'Patient Discharge Summary', 'nurse_discharge_summary_report', 'aastha', 0),
(107, 'Nurse Module', 'Bed Side Procedure', 'nurse_bed_side_procedure_report', 'aastha', 0),
(108, 'Reports', 'Out Patient Reports', 'outpatient_report', 'aastha', 0),
(109, 'Reports', 'Admitted Patient Reports', 'inpatient_report', 'aastha', 0),
(110, 'Reports', 'Discharged Patient', 'discharged_patient_report', 'aastha', 0),
(111, 'Company Information', 'Company Information', 'company_information', 'aastha', 0),
(112, 'Surgical Package', 'Access to Surgical Package', 'surgical_package', 'aastha', 0),
(113, 'Surgical Package', 'Add Surgical Package', 'add_surgical_package', 'aastha', 0),
(114, 'Surgical Package', 'Update Surgical Package', 'update_surgical_package', 'aastha', 0),
(115, 'Surgical Package', 'Delete Surgical Package', 'delete_surgical_package', 'aastha', 0),
(116, 'Billing Module', 'Surgical Quotation Costing', 'surgical_costing', 'aastha', 0),
(117, 'Acknowledge Receipt', 'Access to Acknowledge Receipt', 'declared_receipt', 'aastha', 0),
(118, 'Acknowledge Receipt', 'Delete  Acknowledge Receipt', 'delete_delaredOR', 'aastha', 0),
(119, 'Reports', 'Acknowledge Receipt Reports', 'declared_receipt_report', 'aastha', 0),
(120, 'Nurse Module', 'Nurse Diagnosis', 'nurse_diagnosis_reports', 'aastha', 0),
(121, 'Patient Appointment', 'Access to Appointment', 'appointment', 'aastha', 0),
(122, 'Patient Appointment', 'Add Appointment', 'add_appointment', 'aastha', 0),
(123, 'Patient Appointment', 'Edit Appointment', 'edit_appointment', 'aastha', 0),
(124, 'Patient Appointment', 'Delete Appointment', 'delete_appointment', 'aastha', 0),
(126, 'Patient Appointment', 'Check IN Patient', 'checkIN_appointment', 'aastha', 0),
(127, 'Backup Database', 'Create Backup of System Database', 'backup_database', 'aastha', 0),
(128, 'Nurse Module', 'Access to Nurse Module', 'access_nurse_module', 'aastha', 0),
(129, 'Doctor Module', 'Access to Doctor Module', 'access_doctor_module', 'aastha', 0),
(130, 'EMR Sheet', 'Access to EMR', 'access_emr_module', 'aastha', 0),
(131, 'Administration Module Tab', 'Access to Administration Module', 'access_administration_module', 'aastha', 0),
(132, 'Reports Generation Module Tab', 'Access to Reports Module', 'access_reports_module', 'aastha', 0),
(133, 'Reports', 'Doctor\'s Fee Report', 'doctor_fee_report', 'aastha', 0),
(134, 'Dashboard', 'Access to Doctors Availability', 'access_doctors_avail', 'aastha', 0),
(135, 'spero', 'gjhgjh', 'sper.com', 'aastha', 0),
(136, 'Patient Management', 'IPD Discharged', 'ipd_discharged', 'aastha', 0),
(137, 'Lab Module', 'Access to Lab Module', 'access_lab_module', 'aastha', 0),
(138, 'Lab Module', 'Lab Sample', 'lab_sample', 'aastha', 0),
(139, 'Preassessment Module', 'Access to Preassessment Module', 'access_preassessment _module', 'aastha', 0),
(140, 'Preassessment Module', 'Preassessment List', 'preassessment_list', 'aastha', 0),
(141, 'Preassessment Module', 'Preassessment Modify', 'preassessment_modify', 'aastha', 0),
(142, 'Preassessment Module', 'Preassessment View', 'preassessment_view', 'aastha', 0),
(143, 'Preassessment Module', 'Preassessment Add', 'preassessment_add', 'aastha', 0),
(144, 'Lab Module', 'Lab Sample Add', 'lab_sample_add', 'aastha', 0),
(145, 'Lab Module', 'Lab Sample Modify', 'lab_sample_modify', 'aastha', 0),
(146, 'Lab Module', 'Lab Sample View', 'lab_sample_view', 'aastha', 0),
(147, 'Physio Module', 'Access to Physio Module', 'access_physio _module', 'aastha', 0),
(148, 'Physio Module', 'Physio ipd List', 'physio_ipd_list', 'aastha', 0),
(149, 'Dashboard', 'Access to Dashboard', 'access dashboard', 'aastha', 0);

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
  `preasses_id` varchar(255) DEFAULT NULL,
  `preasses_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `ptn_sugess_medi` text DEFAULT NULL,
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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL,
  `isPaid` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_family`
--

CREATE TABLE `patient_family` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) DEFAULT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `father` varchar(100) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `sublings` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(100) DEFAULT NULL,
  `spouse_mobile` varchar(15) DEFAULT NULL,
  `family_add` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `middlename` varchar(100) DEFAULT NULL,
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
  `ptn_sugess_medi` text DEFAULT NULL,
  `ptn_addtnl_note` varchar(255) DEFAULT NULL,
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
  `rel_email1` varchar(255) DEFAULT NULL,
  `rel_email2` varchar(255) DEFAULT NULL,
  `preassessment_no` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `added_by` varchar(100) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `previous_discharge_report` varchar(5000) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_preassessment`
--

CREATE TABLE `patient_preassessment` (
  `preasses_id` int(11) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
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
  `ears` varchar(255) DEFAULT NULL,
  `hearing` varchar(255) NOT NULL,
  `hearing_aid` varchar(5) NOT NULL,
  `nose` varchar(255) NOT NULL,
  `throat` varchar(255) NOT NULL,
  `eye` varchar(255) DEFAULT NULL,
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
  `appearance` varchar(255) DEFAULT NULL,
  `rs` varchar(255) NOT NULL,
  `cardiovascular_sys` varchar(255) NOT NULL,
  `gastrointestinal_sys` varchar(255) NOT NULL,
  `genito_urinary_sys` varchar(255) NOT NULL,
  `neurological_sys` varchar(255) NOT NULL,
  `musculoskeletal_sys` varchar(255) NOT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `drug_namefld` varchar(255) DEFAULT NULL,
  `foodfld` varchar(255) DEFAULT NULL,
  `any_other` varchar(255) DEFAULT NULL,
  `total_no_of_error` varchar(255) DEFAULT NULL,
  `clock_score` varchar(10) DEFAULT NULL,
  `clock_remark` varchar(255) DEFAULT NULL,
  `geriatric_score` varchar(10) DEFAULT NULL,
  `geriatric_remark` varchar(255) DEFAULT NULL,
  `time_up_go_score` varchar(10) DEFAULT NULL,
  `chair_stand_score` varchar(10) DEFAULT NULL,
  `doctor_observation` text DEFAULT NULL,
  `recommendation` varchar(500) DEFAULT NULL,
  `entry_datetime` datetime DEFAULT NULL,
  `on_admission` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `ptn_eligible` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `last_taken_medicine_date` varchar(100) DEFAULT NULL,
  `date_entry` date DEFAULT NULL,
  `added_by` varchar(25) NOT NULL,
  `updated_by` varchar(25) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_psychological_cond`
--

CREATE TABLE `patient_psychological_cond` (
  `id` int(11) NOT NULL,
  `preasses_id` int(11) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `aggression` varchar(100) NOT NULL,
  `violence` varchar(100) DEFAULT NULL,
  `bed_restrain` varchar(100) DEFAULT NULL,
  `wandering` varchar(100) DEFAULT NULL,
  `sleep` varchar(100) DEFAULT NULL,
  `giver_care` varchar(100) DEFAULT NULL,
  `diagnostic_test` varchar(255) DEFAULT NULL,
  `typical_day_appl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_type`
--

CREATE TABLE `patient_type` (
  `patient_type_id` int(20) NOT NULL,
  `patient_type` varchar(200) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_type`
--

INSERT INTO `patient_type` (`patient_type_id`, `patient_type`, `organization`, `InActive`) VALUES
(1, 'Terminally Ill', 'aastha', 0),
(2, 'Post Stroke', 'aastha', 0),
(3, 'Healthy Elderly Care', 'aastha', 0),
(4, 'Cancer Care', 'aastha', 0),
(7, 'Post TKR - ***Only if able to sit/stand onwards 4th Day', 'aastha', 0),
(8, 'Post Covid Care', 'aastha', 0),
(9, 'Dementia Care', 'aastha', 0),
(10, 'Parkinson’s Care', 'aastha', 0),
(11, 'Palliative Care', 'aastha', 0),
(12, 'Rehab Care', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `physio_discharge_summary`
--

CREATE TABLE `physio_discharge_summary` (
  `physio_discharge_summary_id` int(11) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `diagnosis` varchar(255) DEFAULT NULL,
  `fim_score1_eval_date` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `therapy_status` varchar(255) DEFAULT NULL,
  `goal_achieved` text DEFAULT NULL,
  `further_recommendation` varchar(255) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `physio_therapy_status` varchar(100) DEFAULT NULL,
  `date_of_admission` date DEFAULT NULL,
  `date_of_death` date DEFAULT NULL,
  `time_of_death` varchar(100) DEFAULT NULL,
  `causes_of_death` varchar(500) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physio_evaluation`
--

CREATE TABLE `physio_evaluation` (
  `id` int(11) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `iop_no` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `ptn_name` varchar(255) DEFAULT NULL,
  `ptn_age` int(3) DEFAULT NULL,
  `ptn_diagnosis` text DEFAULT NULL,
  `ptn_complain` text DEFAULT NULL,
  `ptn_tightness` text DEFAULT NULL,
  `ptn_upper_body` text DEFAULT NULL,
  `lower_body` text DEFAULT NULL,
  `ptn_pain_intensity` text DEFAULT NULL,
  `mobility_total_assist1` varchar(255) DEFAULT NULL,
  `mobility_assist1_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist1_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist1_supine` varchar(5) DEFAULT NULL,
  `mobility_assist1_stand` varchar(5) DEFAULT NULL,
  `mobility_maximal_assist2` varchar(255) DEFAULT NULL,
  `mobility_assist2_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist2_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist2_supine` varchar(5) DEFAULT NULL,
  `mobility_assist2_stand` varchar(5) DEFAULT NULL,
  `mobility_moderate_assist3` varchar(255) DEFAULT NULL,
  `mobility_assist3_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist3_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist3_supine` varchar(5) DEFAULT NULL,
  `mobility_assist3_stand` varchar(5) DEFAULT NULL,
  `mobility_minimal_assist4` varchar(255) DEFAULT NULL,
  `mobility_assist4_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist4_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist4_supine` varchar(5) DEFAULT NULL,
  `mobility_assist4_stand` varchar(5) DEFAULT NULL,
  `mobility_total_assist5a` varchar(255) DEFAULT NULL,
  `mobility_assist5a_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist5a_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist5a_supine` varchar(5) DEFAULT NULL,
  `mobility_assist5a_stand` varchar(5) DEFAULT NULL,
  `mobility_total_assist5b` varchar(255) DEFAULT NULL,
  `mobility_assist5b_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist5b_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist5b_supine` varchar(5) DEFAULT NULL,
  `mobility_assist5b_stand` varchar(5) DEFAULT NULL,
  `mobility_total_assist6` varchar(255) DEFAULT NULL,
  `mobility_assist6_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist6_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist6_supine` varchar(5) DEFAULT NULL,
  `mobility_assist6_stand` varchar(5) DEFAULT NULL,
  `mobility_total_assist7` varchar(255) DEFAULT NULL,
  `mobility_assist7_evaldate` varchar(255) DEFAULT NULL,
  `mobility_assist7_rolling` varchar(5) DEFAULT NULL,
  `mobility_assist7_supine` varchar(5) DEFAULT NULL,
  `mobility_assist7_stand` varchar(5) DEFAULT NULL,
  `mobility_notappl_assist8` text DEFAULT NULL,
  `mobility_notappl_evaldate` text DEFAULT NULL,
  `mobility_notappl_rolling` text DEFAULT NULL,
  `mobility_notappl_supine` varchar(5) DEFAULT NULL,
  `mobility_notappl_stand` text DEFAULT NULL,
  `transfer_total_assist1` varchar(255) DEFAULT NULL,
  `transfer_assist1_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist1_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist1_car` varchar(5) DEFAULT NULL,
  `transfer_maximal_assist2` varchar(255) DEFAULT NULL,
  `transfer_assist2_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist2_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist2_car` varchar(5) DEFAULT NULL,
  `transfer_moderate_assist3` varchar(255) DEFAULT NULL,
  `transfer_assist3_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist3_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist3_car` varchar(5) DEFAULT NULL,
  `transfer_minimal_assist4` varchar(255) DEFAULT NULL,
  `transfer_assist4_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist4_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist4_car` varchar(5) DEFAULT NULL,
  `transfer_total_assist5b` varchar(255) DEFAULT NULL,
  `transfer_assist5b_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist5b_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist5b_car` varchar(5) DEFAULT NULL,
  `transfer_total_assist5a` varchar(255) DEFAULT NULL,
  `transfer_assist5a_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist5a_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist5a_car` varchar(5) DEFAULT NULL,
  `transfer_total_assist6` varchar(255) DEFAULT NULL,
  `transfer_assist6_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist6_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist6_car` varchar(5) DEFAULT NULL,
  `transfer_total_assist7` varchar(255) DEFAULT NULL,
  `transfer_assist7_evaldate` varchar(255) DEFAULT NULL,
  `transfer_assist7_wheelchair` varchar(5) DEFAULT NULL,
  `transfer_assist7_car` varchar(5) DEFAULT NULL,
  `transfer_notappl_assist8` text DEFAULT NULL,
  `transfer_notappl_evaldate` text DEFAULT NULL,
  `ptn_pain_bodypart` text DEFAULT NULL,
  `physio_discharged` varchar(15) DEFAULT NULL,
  `treatment_goal` text DEFAULT NULL,
  `exp_session` varchar(100) DEFAULT NULL,
  `physio_service` varchar(255) DEFAULT NULL,
  `next_eval_date` varchar(255) DEFAULT NULL,
  `physio_service_from_date` varchar(255) DEFAULT NULL,
  `physio_service_to_date` varchar(255) DEFAULT NULL,
  `expert_recommendation` varchar(10) DEFAULT NULL,
  `ptn_tightness_remark` varchar(255) DEFAULT NULL,
  `ptn_upper_body_remark` varchar(255) DEFAULT NULL,
  `nature` varchar(50) DEFAULT NULL,
  `gait_video` varchar(255) DEFAULT NULL,
  `gait_speed` varchar(100) DEFAULT NULL,
  `treatment_goal_remark` varchar(255) DEFAULT NULL,
  `therapy_time` varchar(50) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL,
  `rel_agree` varchar(10) DEFAULT NULL,
  `mobility` varchar(255) DEFAULT NULL,
  `mobility_remark` varchar(255) DEFAULT NULL,
  `muscle_strength` varchar(255) DEFAULT NULL,
  `muscle_strength_remark` varchar(255) DEFAULT NULL,
  `muscle_tone` varchar(255) DEFAULT NULL,
  `breathlessness` varchar(255) DEFAULT NULL,
  `fatigue` varchar(10) DEFAULT NULL,
  `tightness_side` varchar(100) DEFAULT NULL,
  `fim_interpreter` varchar(255) DEFAULT NULL,
  `berg_bal_sit_unsupport` varchar(2) DEFAULT NULL,
  `berg_bal_sit_tostand` varchar(2) DEFAULT NULL,
  `berg_bal_stand_tosit` varchar(2) DEFAULT NULL,
  `berg_bal_transfer` varchar(2) DEFAULT NULL,
  `berg_bal_stand_unsupport` varchar(2) DEFAULT NULL,
  `berg_bal_stand_witheye` varchar(2) DEFAULT NULL,
  `berg_bal_stand_withfeet` varchar(2) DEFAULT NULL,
  `berg_bal_tendem_stand` varchar(2) DEFAULT NULL,
  `berg_bal_stand_oneleg` varchar(2) DEFAULT NULL,
  `berg_bal_turning_trunk` varchar(2) DEFAULT NULL,
  `berg_bal_object_fromfloor` varchar(2) DEFAULT NULL,
  `berg_bal_turning_360_deg` varchar(2) DEFAULT NULL,
  `berg_bal_stool` varchar(2) DEFAULT NULL,
  `berg_bal_reaching_forward` varchar(2) DEFAULT NULL,
  `berg_bal_total_score` varchar(2) DEFAULT NULL,
  `berg_bal_interpreter` varchar(2) DEFAULT NULL,
  `berg_bal_interpreter_remark` varchar(2) DEFAULT NULL,
  `therapy_type` varchar(100) DEFAULT NULL,
  `walktest` varchar(255) DEFAULT NULL,
  `walktest1min` varchar(50) DEFAULT NULL,
  `walktest3min` varchar(50) DEFAULT NULL,
  `walktest5min` varchar(50) DEFAULT NULL,
  `treatment_protocol` varchar(10) DEFAULT NULL,
  `treat_protocol_id` int(11) DEFAULT NULL,
  `ortho_special_test` varchar(255) DEFAULT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physio_evaluation_sent_mail`
--

CREATE TABLE `physio_evaluation_sent_mail` (
  `physio_mail_id` int(11) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `mail_to` varchar(255) NOT NULL,
  `rel_email2` varchar(255) DEFAULT NULL,
  `mail_from` varchar(255) DEFAULT NULL,
  `mail_cc` varchar(255) DEFAULT NULL,
  `rel_name` varchar(255) DEFAULT NULL,
  `eval_date` datetime DEFAULT NULL,
  `treatment_goal` varchar(255) DEFAULT NULL,
  `sent_by` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physio_multi_sel_parameters`
--

CREATE TABLE `physio_multi_sel_parameters` (
  `multi_sel_id` int(11) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `pvalue` varchar(255) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `physio_multi_sel_parameters`
--

INSERT INTO `physio_multi_sel_parameters` (`multi_sel_id`, `pcode`, `pvalue`, `organization`, `InActive`) VALUES
(1, 'tightness', 'Shoulder', 'aastha', 0),
(2, 'tightness', 'Elbow', 'aastha', 0),
(3, 'tightness', 'Wrist', 'aastha', 0),
(4, 'tightness', 'Cervical Spine', 'aastha', 0),
(5, 'tightness', 'Thoracic Spine', 'aastha', 0),
(6, 'tightness', 'Lumbar Spine', 'aastha', 0),
(7, 'tightness', 'Pelvis', 'aastha', 0),
(8, 'tightness', 'Hip', 'aastha', 0),
(9, 'tightness', 'Knee', 'aastha', 0),
(10, 'tightness', 'Ankle', 'aastha', 0),
(11, 'body_part', 'Head', 'aastha', 0),
(12, 'body_part', 'Right Face', 'aastha', 1),
(13, 'body_part', 'Skull', 'aastha', 0),
(14, 'body_part', 'Face', 'aastha', 0),
(15, 'body_part', 'Right Face', 'aastha', 1),
(16, 'body_part', 'Left Eye', 'aastha', 0),
(17, 'body_part', 'Right Eye', 'aastha', 0),
(18, 'body_part', 'Left Ear', 'aastha', 0),
(19, 'body_part', 'Right Ear', 'aastha', 0),
(20, 'body_part', 'Nose', 'aastha', 0),
(21, 'body_part', 'Mouth', 'aastha', 0),
(22, 'body_part', 'Cervical Spine', 'aastha', 0),
(23, 'body_part', 'Left Shoulder', 'aastha', 0),
(24, 'body_part', 'Right Shoulder', 'aastha', 0),
(25, 'body_part', 'Left Arm', 'aastha', 0),
(26, 'body_part', 'Right Arm', 'aastha', 0),
(27, 'body_part', 'Left Elbow', 'aastha', 0),
(28, 'body_part', 'Right Elbow', 'aastha', 0),
(29, 'body_part', 'Left Forearm', 'aastha', 0),
(30, 'body_part', 'Right Forearm', 'aastha', 0),
(31, 'body_part', 'Left Wrist', 'aastha', 0),
(32, 'body_part', 'Right Wrist', 'aastha', 0),
(33, 'body_part', 'Left Hand', 'aastha', 0),
(34, 'body_part', 'Right Hand', 'aastha', 0),
(35, 'body_part', 'Chest', 'aastha', 0),
(36, 'body_part', 'Brain', 'aastha', 0),
(37, 'body_part', 'Spinal Cord', 'aastha', 1),
(38, 'body_part', 'Heart', 'aastha', 0),
(39, 'body_part', 'Blood Vessels', 'aastha', 1),
(40, 'body_part', 'Left Lung', 'aastha', 0),
(41, 'body_part', 'Right Lung', 'aastha', 0),
(42, 'body_part', 'Trachea', 'aastha', 0),
(43, 'body_part', 'Thoracic Spine', 'aastha', 0),
(44, 'body_part', 'Lumbar Spine', 'aastha', 0),
(45, 'body_part', 'Sacrum', 'aastha', 0),
(46, 'body_part', 'Coccyx', 'aastha', 0),
(47, 'body_part', 'Upper Abdomen', 'aastha', 0),
(48, 'body_part', 'Lower Abdomen', 'aastha', 0),
(49, 'body_part', 'Pelvis', 'aastha', 0),
(50, 'body_part', 'Hips', 'aastha', 0),
(51, 'body_part', 'Right Hip', 'aastha', 1),
(52, 'body_part', 'Buttocks', 'aastha', 0),
(53, 'body_part', 'Right Buttock', 'aastha', 1),
(54, 'body_part', 'Groin', 'aastha', 0),
(55, 'body_part', 'Right Groin', 'aastha', 1),
(56, 'body_part', 'Left Thigh', 'aastha', 0),
(57, 'body_part', 'Right Thigh', 'aastha', 0),
(58, 'body_part', 'Left Knee', 'aastha', 0),
(59, 'body_part', 'Right Knee', 'aastha', 0),
(60, 'body_part', 'Left Leg', 'aastha', 0),
(61, 'body_part', 'Right Leg', 'aastha', 0),
(62, 'body_part', 'Left Ankle', 'aastha', 0),
(63, 'body_part', 'Right Ankle', 'aastha', 0),
(64, 'body_part', 'Left Foot', 'aastha', 0),
(65, 'body_part', 'Right Foot', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `physio_notes`
--

CREATE TABLE `physio_notes` (
  `physio_notes_id` int(11) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `iop_id` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `session_date` date NOT NULL,
  `session_time` time NOT NULL,
  `notes` text NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `therapy_charges` varchar(10) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physio_treatment_protocol`
--

CREATE TABLE `physio_treatment_protocol` (
  `treat_protocol_id` int(11) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `iop_no` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `evaluation_date` date DEFAULT NULL,
  `evaluation_by` varchar(255) DEFAULT NULL,
  `subjective` varchar(255) DEFAULT NULL,
  `objective` varchar(255) DEFAULT NULL,
  `assessment` varchar(255) DEFAULT NULL,
  `treatment_goal` varchar(255) DEFAULT NULL,
  `exp_session` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `first_followup_eval_date` date DEFAULT NULL,
  `first_followup_eval_date_remark` varchar(500) DEFAULT NULL,
  `assign_therapist` varchar(255) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `physio_discharged` varchar(15) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physio_treatment_protocol_review`
--

CREATE TABLE `physio_treatment_protocol_review` (
  `review_id` int(11) NOT NULL,
  `treat_protocol_id` varchar(255) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `review_date` date DEFAULT NULL,
  `review_note` varchar(500) DEFAULT NULL,
  `review_frequency` varchar(100) DEFAULT NULL,
  `review_next_followup_eval_date` date DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physio_treatment_protocol_week_plan`
--

CREATE TABLE `physio_treatment_protocol_week_plan` (
  `week_plan_id` int(11) NOT NULL,
  `treat_protocol_id` varchar(255) NOT NULL,
  `eval_no` varchar(255) NOT NULL,
  `week_date` varchar(500) DEFAULT NULL,
  `week_treatment_line` varchar(500) DEFAULT NULL,
  `week_remark` varchar(255) DEFAULT NULL,
  `week_frequency` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_barthel_index`
--

CREATE TABLE `preassessment_barthel_index` (
  `barthel_id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_fall_risk_questions`
--

CREATE TABLE `preassessment_fall_risk_questions` (
  `fall_risk_id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `questions` varchar(5000) NOT NULL,
  `answer` varchar(5000) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_guardian`
--

CREATE TABLE `preassessment_guardian` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `local_guardian_name` varchar(255) DEFAULT NULL,
  `guardian_add` varchar(5000) DEFAULT NULL,
  `guardian_mobile` varchar(20) DEFAULT NULL,
  `guardian_email` varchar(200) DEFAULT NULL,
  `local_guardian_name2` varchar(255) DEFAULT NULL,
  `guardian_add2` varchar(5000) DEFAULT NULL,
  `guardian_mobile2` varchar(20) DEFAULT NULL,
  `guardian_email2` varchar(200) DEFAULT NULL,
  `appointment_poa` varchar(100) DEFAULT NULL,
  `poa_name` varchar(255) DEFAULT NULL,
  `poa_mobile` varchar(20) DEFAULT NULL,
  `poa_email` varchar(255) DEFAULT NULL,
  `diagnosis` varchar(900) DEFAULT NULL,
  `poa_add` varchar(1000) DEFAULT NULL,
  `present_complaints` varchar(500) DEFAULT NULL,
  `past_history` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `covid_vac_1` varchar(100) DEFAULT NULL,
  `covid_vac_2` varchar(100) DEFAULT NULL,
  `covid_vac_3` varchar(100) DEFAULT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `preasses_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_medicines`
--

CREATE TABLE `preassessment_medicines` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `medicine` varchar(255) DEFAULT NULL,
  `dose` varchar(255) DEFAULT NULL,
  `frequency` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_typical_day`
--

CREATE TABLE `preassessment_typical_day` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) NOT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `wake_up_time` varchar(255) DEFAULT NULL,
  `washroom` varchar(255) DEFAULT NULL,
  `breakfast_time` varchar(255) DEFAULT NULL,
  `exercises` varchar(255) DEFAULT NULL,
  `morning_social` varchar(500) DEFAULT NULL,
  `lunch` varchar(255) DEFAULT NULL,
  `afternoon_nap` varchar(255) DEFAULT NULL,
  `walk_sitting_outside` varchar(255) DEFAULT NULL,
  `tea_snacks_time` varchar(255) DEFAULT NULL,
  `eve_social` varchar(500) DEFAULT NULL,
  `eve_any_other` varchar(500) DEFAULT NULL,
  `recreational` varchar(255) DEFAULT NULL,
  `reading` varchar(255) DEFAULT NULL,
  `dinner` varchar(255) DEFAULT NULL,
  `night_any_other` varchar(500) DEFAULT NULL,
  `light_off_time` varchar(255) DEFAULT NULL,
  `describe_any_other_activity` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(220, 2, 1000.00, '00002', '2023-07-04 09:57:57', '', 0),
(221, 2, 1000.00, '00002', '2023-08-12 03:39:58', '', 0),
(222, 10, 500.00, '00002', '2023-08-22 11:15:21', '', 0),
(223, 23, 1000.00, '00002', '2023-09-29 04:23:01', '', 0),
(224, 27, 1000.00, '00002', '2023-09-29 04:23:47', '', 0),
(225, 36, 1000.00, '00002', '2023-09-29 04:24:37', '', 0),
(226, 31, 1000.00, '00002', '2023-09-30 03:13:21', '', 0),
(227, 38, 95000.00, '00002', '2023-10-22 02:07:49', '', 0),
(228, 39, 60000.00, '00002', '2023-10-22 02:08:31', '', 0),
(229, 40, 95000.00, '00002', '2023-10-22 02:09:09', '', 0),
(230, 41, 60000.00, '00002', '2023-10-22 02:09:45', '', 0),
(231, 42, 42000.00, '00002', '2023-10-22 02:10:40', '', 0),
(232, 43, 60000.00, '00002', '2023-10-22 02:11:21', '', 0),
(233, 44, 50000.00, '00002', '2023-10-22 02:11:59', '', 0),
(234, 45, 50000.00, '00002', '2023-10-22 02:12:28', '', 0),
(235, 46, 50000.00, '00002', '2023-10-22 02:13:21', '', 0),
(236, 47, 50000.00, '00002', '2023-10-22 02:13:54', '', 0),
(237, 48, 95000.00, '00002', '2023-10-25 01:00:13', '', 0),
(238, 49, 60000.00, '00002', '2023-10-25 01:00:36', '', 0),
(239, 50, 95000.00, '00002', '2023-10-25 01:00:59', '', 0),
(240, 51, 60000.00, '00002', '2023-10-25 01:01:18', '', 0),
(241, 52, 42000.00, '00002', '2023-10-25 01:01:44', '', 0),
(242, 53, 60000.00, '00002', '2023-10-25 01:02:06', '', 0),
(243, 54, 50000.00, '00002', '2023-10-25 01:02:37', '', 0),
(244, 55, 50000.00, '00002', '2023-10-25 01:02:58', '', 0),
(245, 56, 50000.00, '00002', '2023-10-25 01:03:19', '', 0),
(246, 57, 50000.00, '00002', '2023-10-25 01:03:38', '', 0);

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` text NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`category_id`, `category_name`, `category_desc`, `organization`, `InActive`) VALUES
(1, 'Private Room', '1 bed', 'aastha', 0),
(2, 'Semi-private Room', '2 beds', 'aastha', 0),
(3, 'Suite', '2 Single Beds', 'aastha', 0),
(4, 'Office', 'Office', 'aastha', 1),
(5, 'suite2', '1 bed', 'aastha', 1),
(6, 'Test', 'Test', 'aastha', 1),
(7, 'Test', 'Test', 'aastha', 1),
(8, 'Semi private (tripple sharing)', '3 single beds', 'aastha', 0);

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
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(1, 'employee_no', 55, 0),
(2, 'patient_no', 0, 0),
(3, 'INPATIENTNO', 0, 0),
(4, 'OUTPATIENTNO', 26, 0),
(5, 'invoice_no', 26, 0),
(6, 'receipt_no', 26, 0),
(7, 'preasses_no', 0, 0),
(8, 'eval_no', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_parameters`
--

CREATE TABLE `system_parameters` (
  `param_id` bigint(11) NOT NULL,
  `cCode` varchar(50) NOT NULL,
  `cValue` varchar(50) NOT NULL,
  `cDesc` varchar(150) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `system_parameters`
--

INSERT INTO `system_parameters` (`param_id`, `cCode`, `cValue`, `cDesc`, `organization`, `InActive`) VALUES
(1, 'gender', 'Male', '', 'aastha', 0),
(2, 'gender', 'Female', '', 'aastha', 0),
(3, 'civil_status', 'Single', '', 'aastha', 0),
(4, 'civil_status', 'Married', '', 'aastha', 0),
(5, 'civil_status', 'Legal Seperated', '', 'aastha', 0),
(6, 'civil_status', 'Divorced', '', 'aastha', 0),
(7, 'title_name', 'Mr.', '', 'aastha', 0),
(8, 'title_name', 'Ms.', '', 'aastha', 0),
(9, 'title_name', 'Mrs.', '', 'aastha', 0),
(10, 'title_name', 'Dr.', '', 'aastha', 0),
(11, 'religion', 'Roman Catholic', '', 'aastha', 0),
(12, 'religion', 'Muslim', '', 'aastha', 0),
(13, 'religion', 'Iglesia ni Cristo', '', 'aastha', 0),
(14, 'religion', 'Church of God', '', 'aastha', 0),
(15, 'religion', 'Evangelical', '', 'aastha', 0),
(16, 'religion', 'Born Again', '', 'aastha', 0),
(17, 'religion', 'Evangelical', '', 'aastha', 0),
(18, 'religion', 'El Shaddai', '', 'aastha', 0),
(19, 'religion', 'Church of the Nazarene', '', 'aastha', 0),
(20, 'religion', 'Seventh-Day Adventists', '', 'aastha', 0),
(21, 'religion', 'Chinese', '', 'aastha', 0),
(22, 'religion', 'Hindu', '', 'aastha', 0),
(23, 'religion', 'Judaism', '', 'aastha', 0),
(24, 'religion', 'Ang Dating Daan', '', 'aastha', 0),
(25, 'religion', 'Jehovah\'s Witnesses', '', 'aastha', 0),
(26, 'religion', 'Unitarian', '', 'aastha', 0),
(27, 'religion', 'Assemblies of God (Ilocos Norte)', '', 'aastha', 0),
(28, 'religion', 'Aglipayan ', '', 'aastha', 0),
(29, 'blood_type', 'O+', '', 'aastha', 0),
(30, 'blood_type', 'O-', '', 'aastha', 0),
(31, 'blood_type', 'A+', '', 'aastha', 0),
(32, 'blood_type', 'A-', '', 'aastha', 0),
(33, 'blood_type', 'B+', '', 'aastha', 0),
(34, 'blood_type', 'B-', '', 'aastha', 0),
(35, 'blood_type', 'AB+', '', 'aastha', 0),
(36, 'blood_type', 'AB-', '', 'aastha', 0),
(37, 'title_name', 'Dra.', 'Doctora', 'aastha', 1),
(45, 'gender', 'asd', '', 'aastha', 1),
(44, 'gender', 'x2', 'xxx2', 'aastha', 1),
(51, 'type_medicine', 'Generic', 'Generic', 'aastha', 1),
(52, 'type_medicine', 'Branded', 'Branded', 'aastha', 1),
(53, 'medicine_uom', 'Tablet', 'Tablet', 'aastha', 1),
(54, 'medicine_uom', 'Bottle', 'Bottle', 'aastha', 1),
(55, 'medicine_uom', 'Each', 'Each', 'aastha', 1),
(56, 'payment_type', 'CASH', 'CASH', 'aastha', 1),
(57, 'payment_type', 'CREDIT CARD', 'CREDIT CARD', 'aastha', 1),
(58, 'payment_type', 'INSURANCE COMPANY', 'INSURANCE COMPANY', 'aastha', 1),
(60, 'condition_upon_discharge', 'Improved', 'Improved', 'aastha', 1),
(61, 'condition_upon_discharge', 'Recovered', 'Recovered', 'aastha', 1),
(62, 'condition_upon_discharge', 'Expired', '', 'aastha', 1),
(63, 'condition_upon_discharge', 'Transferred', '', 'aastha', 1),
(64, 'reason_for_discount', 'Student', 'Student', 'aastha', 1),
(65, 'reason_for_discount', 'Senior Citizen', 'Senior Citizen', 'aastha', 1),
(66, 'reason_for_discount', 'Sample Reason here', 'Sample Reason here', 'aastha', 1),
(67, 'reason_for_discount', 'Person with Disablities', 'Person with Disablities', 'aastha', 1),
(68, 'reason_for_discount', 'Management Decision', 'Management Decision', 'aastha', 1),
(69, 'reason_for_discount', 'Below Poverty Line', 'Below Poverty Line', 'aastha', 1),
(70, 'reason_for_discount', 'Employee', 'Employee', 'aastha', 1),
(71, 'reason_for_discount', 'Member', 'Member', 'aastha', 1),
(72, 'gender', 'Any Other', '', 'aastha', 0),
(73, 'condition_upon_discharge', 'Recovering', 'Under state of recovery', 'aastha', 1),
(74, 'civil_status', 'Widow', '', 'aastha', 0),
(75, 'civil_status', 'Widower', '', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treating_doctor`
--

CREATE TABLE `treating_doctor` (
  `id` int(11) NOT NULL,
  `preasses_id` varchar(255) DEFAULT NULL,
  `preasses_no` varchar(255) NOT NULL,
  `tdoctor_name` varchar(100) DEFAULT NULL,
  `tdoctor_mobile` varchar(15) DEFAULT NULL,
  `tdoctor_email` varchar(100) DEFAULT NULL,
  `hospital_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `physio_expert` varchar(10) DEFAULT NULL,
  `email_address` varchar(75) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `picture` varchar(100) NOT NULL,
  `doctorIsIn` varchar(10) NOT NULL,
  `doctorLastIn` varchar(25) NOT NULL,
  `doctorLastOut` varchar(25) NOT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `department`, `designation`, `user_role`, `cType`, `title`, `lastname`, `firstname`, `middlename`, `age`, `street`, `subd_brgy`, `province`, `phone_no`, `mobile_no`, `gender`, `civil_status`, `birthday`, `birthplace`, `physio_expert`, `email_address`, `username`, `password`, `organization`, `picture`, `doctorIsIn`, `doctorLastIn`, `doctorLastOut`, `InActive`) VALUES
(5, '00002', 1, 1, 1, '', 7, 'Lupane', 'Shivrudra', 'V', 46, '', '', '', '', '', 1, 4, '1978-03-16', 'Cavite', NULL, 'shivrudra2008@gmail.com', 'admin', 'e6e061838856bf47e1de730719fb2609', 'aastha', '', '0', '', '', 0),
(26, '00023', 0, 4, 5, '', 10, 'Benake', 'Dipali', 'S.', 40, '', '', '', '', '', 2, 4, '1983-02-15', '', NULL, 'shivrudra@sperohealthcare.in', '00023', 'b11694dde7e8d764e4df6296192dceae', 'aastha', '', '', '', '', 1),
(27, '00024', 0, 2, 3, '', 10, 'Upadhye', 'Ajeya', 'V', 62, '', '', '', '', '', 1, 4, '1961-04-02', '', NULL, 'ajeyaupadhye@sperohealthcare.in', '00024', '192e05df53d8c509c70d965f160b2764', 'aastha', '', '', '', '', 1),
(28, '00025', 0, 5, 7, '', 8, 'Kamble', 'Ragini', 'M', 53, '', '', '', '', '', 2, 4, '0000-00-00', '', NULL, 'doctoraastha@sperohealthcare.in', '00025', 'd18365f4422dbb44c340aedd47bdb977', 'aastha', '', '', '', '', 1),
(29, '00026', 0, 5, 7, '', 8, 'Nivale', 'Nilam', 'S.', 31, '', '', '', '', '', 2, 4, '1992-06-04', '', NULL, 'hhc.managerspero@gmail.com', '00026', '0b0c3ddb9f9a02d136e81f56578ce0f6', 'aastha', '', '', '', '', 1),
(30, '00027', 0, 4, 5, '', 10, 'Choudhary', 'Neha', 'S.', 25, '', '', '', '', '', 2, 4, '1997-12-10', '', NULL, 'test@spero.com', '00027', '437dfd4f6ece12c68811f5834f4e66da', 'aastha', '', '', '', '', 1),
(31, '00028', 0, 4, 5, '', 10, 'Muttepawar', 'balaji', 'pandurang', 27, '320', 'khau gali wadgoan pune', 'pune', '7058887396', '7058887396', 1, 3, '1996-05-23', 'somthana', NULL, 'balaji@gmail.com', '00028', 'ceb6c970658f31504a901b89dcd3e461', 'aastha', '', '', '', '', 0),
(32, '00029', 0, 2, 3, '', 7, 'polshetwar', 'rajesh', 'ram', 0, 'fndfnsfns', 'khau gali wadgoan pune', '', 'sdgdgfdkjgdkfjg', 'gjdhgkjdhgjkhd', 1, 3, '2023-05-16', 'pune', NULL, 'rajesh@gmail.com', '00029', 'ceb6c970658f31504a901b89dcd3e461', 'aastha', '', '', '', '', 0),
(33, '00030', 0, 5, 7, '', 9, 'momin', 'ashfiya', 'ashish', 26, '322', 'khau gali wadgoan pune', 'pune', '7058887396', '7878787878', 2, 4, '1996-05-24', 'pune', NULL, 'ashfiya@gmail.com', '00030', 'ceb6c970658f31504a901b89dcd3e461', 'aastha', '', '', '', '', 0),
(34, '00031', 0, 4, 5, '', 10, 'demo', 'demo', 'demo', 24, '', '', '', '', '', 1, 4, '1999-06-24', 'nanded', NULL, 'demo@gmail.com', '00031', '9cfb5f23ee109818209226896f626430', 'aastha', '', '', '', '', 1),
(35, '00032', 0, 5, 7, '', 8, 'Boin', 'Divya', 'S', 22, '', '', '', '', '', 2, 0, '2000-12-22', '', NULL, 'divya.spero@gmail.com', '00032', '265e55767506f36fe931af28952b1c85', 'aastha', '', '', '', '', 1),
(36, '00033', 0, 5, 7, '', 9, 'Wasnik', 'Harsha', 'Asit', 38, '', '', '', '', '', 2, 0, '1985-02-21', '', NULL, 'test18@gmail.com', '00033', '636016caaea9a54468d437ea7d49b75a', 'aastha', '', '', '', '', 0),
(37, '00034', 0, 2, 3, '', 8, 'Bhangale', 'Kavita', 'Ashok', 43, '', '', '', '', '', 2, 0, '1979-10-12', '', NULL, 'kavita@sperohealthcare.in', '00034', '37ac3d27a7879bfd31724688e2aa15c3', 'aastha', '', '', '', '', 0),
(38, '00035', 0, 5, 7, '', 8, 'Lahane', 'Shital', 'S.', 23, '', '', '', '', '', 2, 0, '1999-07-12', '', NULL, 'shitall.spero@gmail.com', '00035', 'ba5df677787384c5e55ee2ae04d4b84a', 'aastha', '', '', '', '', 1),
(39, '00036', 0, 11, 10, '', 9, 'lab', 'lab', 'lab', 27, '', '', '', '', '', 1, 3, '1996-01-01', 'nanded', NULL, 'lab@gmail.com', '00036', 'ceb6c970658f31504a901b89dcd3e461', 'aastha', '', '', '', '', 0),
(40, '00037', 0, 12, 11, '', 7, 'physiotherapist', 'physiotherapist', 'physiotherapist', 27, '', '', '', '', '', 1, 3, '1996-05-24', 'nanded', 'Yes', 'physiotherapist@gmail.com', '00037', '935f4bd0c2c6429991f3dc1ad5d1bc43', 'aastha', '', '', '', '', 0),
(41, '00038', 0, 13, 12, '', 10, 'vishal', 'mohan', 'garad', 27, '', '', '', '', '', 1, 3, '1996-05-24', 'nanded', NULL, 'vishal@gmail.com', '00038', 'ceb6c970658f31504a901b89dcd3e461', 'aastha', '', '', '', '', 0),
(42, '00039', 0, 2, 3, '', 10, 'Mitkari', 'Avinash', 'M', 40, '', '', '', '', '', 1, 0, '1983-01-01', '', NULL, 'avinash@sperohealthcare.in', '00039', '295b28209f3c17274931d45ac4483430', 'aastha', '', '', '', '', 0),
(43, '00040', 0, 4, 5, '', 10, 'Mitkari A', 'Avinash', 'M', 40, '', '', '', '', '', 1, 0, '1983-01-01', '', NULL, 'aasthaadmin@sperohealthcare.in', '00040', 'b48fe5e74fc0970a593473fde097ae02', 'aastha', '', '', '', '', 0),
(44, '00041', 0, 11, 10, '', 8, 'Patil', 'Rajashri', 'L', 37, '', '', '', '', '', 2, 4, '1986-06-01', '', 'Yes', 'spero.lab@gmail.com', '00041', '1c2f1f242be6065a398827e98ecd03d3', 'aastha', '', '', '', '', 0),
(45, '00042', 0, 5, 7, '', 8, 'Ubale', 'Ashwini', 'Dipak', 38, '', '', '', '', '', 0, 0, '1985-01-25', 'PUne', NULL, 'ashwinigaikwad251985@gmail.com', '00042', 'fa0fe7a225b3d30d0aa7d1958de81f6a', 'aastha', '', '', '', '', 0),
(46, '00043', 0, 13, 12, '', 10, 'Kalbhor', 'Deepmala', 'S', 33, '', '', '', '', '', 2, 4, '1990-01-01', 'Pune', NULL, 'drdeepmala@sperohealthcare.in', '00043', 'c63c2029bcc8d54c7d0ac08e76ab5084', 'aastha', '', '', '', '', 0),
(47, '00044', 0, 2, 3, '', 10, 'Panditrao', 'Kaushik', 'S.', 40, '', '', '', '', '', 0, 0, '1983-01-01', '', NULL, 'kaushikpanditrao@ahpl.in', '00044', '47d97d2186f6f5c65f330fc33d5cffd3', 'aastha', '', '', '', '', 0),
(48, '00045', 0, 4, 5, '', 10, 'Tanpure', 'Dr Anita', 'Sachin', 50, '', '', '', '', '', 2, 4, '1973-10-30', 'Pune', NULL, 'Anita@sperohealthcare.in', '00045', '098fb561add82a8bd20ef0869dd5c7cf', 'aastha', '', '', '', '', 0),
(49, '00046', 0, 4, 5, '', 10, 'Deval', 'Sadhana', 'S.', 55, '', '', '', '', '', 2, 0, '1968-02-01', '', NULL, 'drsadhanadeval@sperohealthcare.in', '00046', 'c3ec2c9419c4ec1e93ab5d893637d2c5', 'aastha', '', '', '', '', 0),
(50, '00047', 0, 5, 7, '', 8, 'Gaikwad', 'Pranali', 'S', 21, '', '', '', '', '', 0, 0, '2002-11-11', '', NULL, 'pranali.spero@gmail.com', '00047', '83c7caac6915342ccee758553e3a635a', 'aastha', '', '', '', '', 0),
(51, '00048', 0, 1, 2, '', 10, 'Mitkarii', 'Avinash', 'S.', 38, '', '', '', '', '', 0, 0, '1985-11-11', '', NULL, 'avinashh@sperohealthcare.in', '00048', 'e08f96998918365080204d1117e99867', 'aastha', '', '', '', '', 0),
(52, '00049', 0, 2, 3, '', 10, 'Rhayakar', 'Vijay', 'S', 49, '', '', '', '', '', 0, 0, '1975-01-01', '', NULL, 'vijayrhayakar@ahpl.in', '00049', 'a7f353b45fa794667dbfd8863fed2a30', 'aastha', '', '', '', '', 0),
(53, '00050', 0, 5, 7, '', 7, 'Shede', 'Yash', 'Uday', 22, '', '', '', '', '7709484476', 1, 0, '2002-01-11', '', NULL, 'yashshede1024@gmail.com', '00050', '65e67ebb87236359edeef21b837997eb', 'aastha', '', '', '', '', 0),
(54, '00051', 0, 5, 7, '', 7, 'Kambale', 'Gautam', 'Babasaheb', 21, '', '', '', '', '', 1, 0, '2002-07-10', '', NULL, 'kagautamkamble784@gmail.com', '00051', '44d46fbc92fba302a952dfcf8bcbf435', 'aastha', '', '', '', '', 0),
(55, '00052', 0, 4, 5, '', 10, 'Sharma', 'Dr Bhavika', 'Meerchandani', 28, '807', 'Life montage society d block', 'Pune', '9630693922', '9131531163', 2, 4, '1995-02-24', 'Bhopal', NULL, 'doctoraastha@sperohealthcare.in', '00052', '64303f7f1fc61e0dff35e757aaa0b626', 'aastha', '', '', '', '', 0),
(56, '00053', 0, 13, 12, '', 10, 'Sharmaa', 'Bhavikaa', 'Meerchandani', 28, '', '', '', '', '', 2, 0, '1995-02-21', '', NULL, 'doctoraastha1@sperohealthcare.in', '00053', '64303f7f1fc61e0dff35e757aaa0b626', 'aastha', '', '', '', '', 0),
(57, '00054', 0, 12, 11, '', 10, 'ls', 'fs', 'mn', 17, '', '', '', '', '', 1, 3, '2006-03-05', 'nanded', 'Yes', 'dd@gmail.com', '00054', 'f0f88d8d863bafd4f351fd93424f4272', 'aastha', '', '', '', '', 0),
(58, '00055', 0, 12, 11, '', 10, 'pfs', 'pfs', 'md', 17, '', '', '', '', '', 1, 4, '2006-03-05', 'nanded', 'No', 'gg@gmail.com', '00055', 'ceb6c970658f31504a901b89dcd3e461', 'aastha', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `module` varchar(50) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_description` text NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `module`, `role_name`, `role_description`, `organization`, `InActive`) VALUES
(1, '0', 'Super Admin', 'Full Access of the entire system', 'aastha', 0),
(2, 'administrator', 'Administrator and CEO', 'Minimal supervision', 'aastha', 1),
(3, '0', 'Coordinator', 'Help Desk Officer', 'aastha', 0),
(5, 'doctor', 'Doctor', 'Doctor', 'aastha', 0),
(6, 'billing', 'Billing / Cashier', 'Billing / Cashier', 'aastha', 0),
(7, '0', 'Nurse Roles', 'Nurse Roles', 'aastha', 0),
(8, '0', 'hfhf', 'jgjg', 'aastha', 1),
(9, '0', 'IT DEPARTMENT', 'IT ADMIN', 'aastha', 0),
(10, '', 'Laboratory', 'Laboratory', 'aastha', 0),
(11, '', 'Physiotherapist', 'Physiotherapist', 'aastha', 0),
(12, '', 'Preassessment', 'Preassessment', 'aastha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles_pages`
--

CREATE TABLE `user_roles_pages` (
  `rollpages_id` bigint(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `InActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_roles_pages`
--

INSERT INTO `user_roles_pages` (`rollpages_id`, `role_id`, `page_id`, `organization`, `InActive`) VALUES
(9259, 1, 34, 'aastha', 0),
(9258, 1, 35, 'aastha', 0),
(9257, 1, 33, 'aastha', 0),
(9256, 1, 32, 'aastha', 0),
(8892, 3, 50, 'aastha', 0),
(4864, 2, 61, 'aastha', 0),
(9255, 1, 38, 'aastha', 0),
(9254, 1, 39, 'aastha', 0),
(9253, 1, 37, 'aastha', 0),
(9252, 1, 36, 'aastha', 0),
(9251, 1, 54, 'aastha', 0),
(9250, 1, 55, 'aastha', 0),
(9249, 1, 53, 'aastha', 0),
(9248, 1, 52, 'aastha', 0),
(9247, 1, 3, 'aastha', 0),
(9246, 1, 4, 'aastha', 0),
(9245, 1, 2, 'aastha', 0),
(9244, 1, 1, 'aastha', 0),
(9243, 1, 114, 'aastha', 0),
(9242, 1, 115, 'aastha', 0),
(9241, 1, 113, 'aastha', 0),
(9240, 1, 112, 'aastha', 0),
(9239, 1, 46, 'aastha', 0),
(9238, 1, 99, 'aastha', 0),
(9237, 1, 47, 'aastha', 0),
(9236, 1, 45, 'aastha', 0),
(9235, 1, 44, 'aastha', 0),
(9234, 1, 132, 'aastha', 0),
(9233, 1, 88, 'aastha', 0),
(9232, 1, 108, 'aastha', 0),
(9231, 1, 98, 'aastha', 0),
(9230, 1, 133, 'aastha', 0),
(8891, 3, 91, 'aastha', 0),
(8890, 3, 92, 'aastha', 0),
(9229, 1, 110, 'aastha', 0),
(9228, 1, 87, 'aastha', 0),
(9227, 1, 109, 'aastha', 0),
(9226, 1, 119, 'aastha', 0),
(9225, 1, 50, 'aastha', 0),
(8889, 3, 51, 'aastha', 0),
(9224, 1, 91, 'aastha', 0),
(9223, 1, 92, 'aastha', 0),
(9222, 1, 51, 'aastha', 0),
(9221, 1, 93, 'aastha', 0),
(4863, 2, 60, 'aastha', 0),
(4862, 2, 31, 'aastha', 0),
(4861, 2, 28, 'aastha', 0),
(4860, 2, 57, 'aastha', 0),
(9220, 1, 94, 'aastha', 0),
(9219, 1, 48, 'aastha', 0),
(9218, 1, 49, 'aastha', 0),
(9217, 1, 123, 'aastha', 0),
(9216, 1, 124, 'aastha', 0),
(9215, 1, 126, 'aastha', 0),
(9214, 1, 122, 'aastha', 0),
(9213, 1, 121, 'aastha', 0),
(9212, 1, 62, 'aastha', 0),
(9211, 1, 63, 'aastha', 0),
(9210, 1, 61, 'aastha', 0),
(9209, 1, 60, 'aastha', 0),
(9208, 1, 97, 'aastha', 0),
(9207, 1, 103, 'aastha', 0),
(9206, 1, 100, 'aastha', 0),
(9205, 1, 105, 'aastha', 0),
(9204, 1, 106, 'aastha', 0),
(9203, 1, 102, 'aastha', 0),
(9202, 1, 120, 'aastha', 0),
(9201, 1, 104, 'aastha', 0),
(9200, 1, 101, 'aastha', 0),
(9199, 1, 107, 'aastha', 0),
(9198, 1, 128, 'aastha', 0),
(9197, 1, 78, 'aastha', 0),
(9196, 1, 79, 'aastha', 0),
(9195, 1, 77, 'aastha', 0),
(9194, 1, 76, 'aastha', 0),
(9193, 1, 70, 'aastha', 0),
(9192, 1, 71, 'aastha', 0),
(9191, 1, 69, 'aastha', 0),
(9190, 1, 68, 'aastha', 0),
(9189, 1, 95, 'aastha', 0),
(9188, 1, 96, 'aastha', 0),
(9187, 1, 130, 'aastha', 0),
(9186, 1, 82, 'aastha', 0),
(9185, 1, 83, 'aastha', 0),
(9184, 1, 81, 'aastha', 0),
(9183, 1, 80, 'aastha', 0),
(9182, 1, 89, 'aastha', 0),
(9181, 1, 90, 'aastha', 0),
(9180, 1, 129, 'aastha', 0),
(9179, 1, 66, 'aastha', 0),
(9178, 1, 67, 'aastha', 0),
(9177, 1, 65, 'aastha', 0),
(9176, 1, 64, 'aastha', 0),
(9175, 1, 42, 'aastha', 0),
(8888, 3, 93, 'aastha', 0),
(8887, 3, 94, 'aastha', 0),
(8886, 3, 48, 'aastha', 0),
(8885, 3, 49, 'aastha', 0),
(9174, 1, 43, 'aastha', 0),
(4859, 2, 56, 'aastha', 0),
(8880, 7, 102, 'aastha', 0),
(8879, 7, 120, 'aastha', 0),
(8878, 7, 104, 'aastha', 0),
(8877, 7, 101, 'aastha', 0),
(8876, 7, 107, 'aastha', 0),
(9173, 1, 41, 'aastha', 0),
(9172, 1, 40, 'aastha', 0),
(9171, 1, 30, 'aastha', 0),
(9170, 1, 31, 'aastha', 0),
(9169, 1, 29, 'aastha', 0),
(9168, 1, 28, 'aastha', 0),
(9167, 1, 74, 'aastha', 0),
(9166, 1, 75, 'aastha', 0),
(9165, 1, 73, 'aastha', 0),
(9164, 1, 72, 'aastha', 0),
(9163, 1, 111, 'aastha', 0),
(9162, 1, 116, 'aastha', 0),
(9161, 1, 84, 'aastha', 0),
(8875, 7, 128, 'aastha', 0),
(9160, 1, 85, 'aastha', 0),
(4858, 2, 125, 'aastha', 0),
(4857, 2, 124, 'aastha', 0),
(4869, 2, 4, 'aastha', 0),
(4868, 2, 2, 'aastha', 0),
(4867, 2, 1, 'aastha', 0),
(4866, 2, 63, 'aastha', 0),
(4865, 2, 62, 'aastha', 0),
(4856, 2, 123, 'aastha', 0),
(4855, 2, 122, 'aastha', 0),
(4854, 2, 121, 'aastha', 0),
(4853, 2, 118, 'aastha', 0),
(4852, 2, 117, 'aastha', 0),
(9159, 1, 58, 'aastha', 0),
(9158, 1, 59, 'aastha', 0),
(9157, 1, 57, 'aastha', 0),
(9156, 1, 56, 'aastha', 0),
(9155, 1, 127, 'aastha', 0),
(9154, 1, 131, 'aastha', 0),
(8881, 7, 106, 'aastha', 0),
(8882, 7, 105, 'aastha', 0),
(8883, 7, 100, 'aastha', 0),
(8884, 7, 103, 'aastha', 0),
(8934, 5, 89, 'aastha', 0),
(8933, 5, 90, 'aastha', 0),
(8932, 5, 129, 'aastha', 0),
(9153, 1, 118, 'aastha', 0),
(9152, 1, 117, 'aastha', 0),
(9260, 5, 49, 'aastha', 0),
(9261, 5, 48, 'aastha', 0),
(9262, 5, 91, 'aastha', 0),
(9263, 5, 92, 'aastha', 0),
(9264, 5, 93, 'aastha', 0),
(9265, 5, 94, 'aastha', 0),
(9266, 7, 135, 'aastha', 0),
(9267, 5, 136, 'aastha', 0),
(9268, 7, 94, 'aastha', 0),
(9269, 3, 136, 'aastha', 0),
(9270, 10, 137, 'aastha', 0),
(9271, 10, 138, 'aastha', 0),
(9272, 7, 136, 'aastha', 0),
(9273, 12, 139, 'aastha', 0),
(9274, 12, 140, 'aastha', 0),
(9276, 1, 136, 'aastha', 0),
(9277, 5, 140, 'aastha', 0),
(9278, 12, 141, 'aastha', 0),
(9279, 12, 142, 'aastha', 0),
(9280, 5, 141, 'aastha', 0),
(9281, 5, 142, 'aastha', 0),
(9282, 12, 143, 'aastha', 0),
(9283, 5, 143, 'aastha', 0),
(9284, 10, 144, 'aastha', 0),
(9285, 10, 145, 'aastha', 0),
(9286, 10, 146, 'aastha', 0),
(9287, 11, 147, 'aastha', 0),
(9288, 11, 148, 'aastha', 0),
(9289, 3, 147, 'aastha', 0),
(9290, 3, 148, 'aastha', 0),
(9291, 1, 149, 'aastha', 0),
(9292, 3, 149, 'aastha', 0),
(9293, 5, 149, 'aastha', 0),
(9294, 7, 149, 'aastha', 0),
(9295, 10, 149, 'aastha', 0),
(9296, 11, 149, 'aastha', 0);

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
-- Indexes for table `diagnosis1`
--
ALTER TABLE `diagnosis1`
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
-- Indexes for table `invoice_orders`
--
ALTER TABLE `invoice_orders`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoice_orders_items`
--
ALTER TABLE `invoice_orders_items`
  ADD PRIMARY KEY (`invoice_item_id`);

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
-- Indexes for table `iop_patient_incharge_his`
--
ALTER TABLE `iop_patient_incharge_his`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `lab_test_name_with_charges`
--
ALTER TABLE `lab_test_name_with_charges`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `physio_discharge_summary`
--
ALTER TABLE `physio_discharge_summary`
  ADD PRIMARY KEY (`physio_discharge_summary_id`);

--
-- Indexes for table `physio_evaluation`
--
ALTER TABLE `physio_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physio_evaluation_sent_mail`
--
ALTER TABLE `physio_evaluation_sent_mail`
  ADD PRIMARY KEY (`physio_mail_id`);

--
-- Indexes for table `physio_multi_sel_parameters`
--
ALTER TABLE `physio_multi_sel_parameters`
  ADD PRIMARY KEY (`multi_sel_id`);

--
-- Indexes for table `physio_notes`
--
ALTER TABLE `physio_notes`
  ADD PRIMARY KEY (`physio_notes_id`);

--
-- Indexes for table `physio_treatment_protocol`
--
ALTER TABLE `physio_treatment_protocol`
  ADD PRIMARY KEY (`treat_protocol_id`);

--
-- Indexes for table `physio_treatment_protocol_review`
--
ALTER TABLE `physio_treatment_protocol_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `physio_treatment_protocol_week_plan`
--
ALTER TABLE `physio_treatment_protocol_week_plan`
  ADD PRIMARY KEY (`week_plan_id`);

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
-- Indexes for table `preassessment_guardian`
--
ALTER TABLE `preassessment_guardian`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `preassessment_typical_day`
--
ALTER TABLE `preassessment_typical_day`
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
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bill_particular`
--
ALTER TABLE `bill_particular`
  MODIFY `particular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `comp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `diagnosis1`
--
ALTER TABLE `diagnosis1`
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
  MODIFY `floor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `insurance_comp`
--
ALTER TABLE `insurance_comp`
  MODIFY `in_com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoice_orders`
--
ALTER TABLE `invoice_orders`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_orders_items`
--
ALTER TABLE `invoice_orders_items`
  MODIFY `invoice_item_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `iop_comp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_diagnosis`
--
ALTER TABLE `iop_diagnosis`
  MODIFY `iop_diag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_discharge_summary`
--
ALTER TABLE `iop_discharge_summary`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_drug_chart`
--
ALTER TABLE `iop_drug_chart`
  MODIFY `drug_chart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_individual_care_plan`
--
ALTER TABLE `iop_individual_care_plan`
  MODIFY `ind_care_plan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_intake_record`
--
ALTER TABLE `iop_intake_record`
  MODIFY `intake_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_laboratory`
--
ALTER TABLE `iop_laboratory`
  MODIFY `io_lab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_medication`
--
ALTER TABLE `iop_medication`
  MODIFY `iop_med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_medicine`
--
ALTER TABLE `iop_medicine`
  MODIFY `iop_med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_nurse_medicine`
--
ALTER TABLE `iop_nurse_medicine`
  MODIFY `iop_nurse_med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_nurse_notes`
--
ALTER TABLE `iop_nurse_notes`
  MODIFY `nurse_notes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_operation_theater`
--
ALTER TABLE `iop_operation_theater`
  MODIFY `operation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_output_record`
--
ALTER TABLE `iop_output_record`
  MODIFY `output_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_patient_incharge_his`
--
ALTER TABLE `iop_patient_incharge_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_sent_mail`
--
ALTER TABLE `iop_sent_mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iop_vital_parameters`
--
ALTER TABLE `iop_vital_parameters`
  MODIFY `vital_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_test_name_with_charges`
--
ALTER TABLE `lab_test_name_with_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `logfile`
--
ALTER TABLE `logfile`
  MODIFY `logid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1233;

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
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_details_discharge`
--
ALTER TABLE `patient_details_discharge`
  MODIFY `discharge_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_details_iop`
--
ALTER TABLE `patient_details_iop`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_family`
--
ALTER TABLE `patient_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_personal_info`
--
ALTER TABLE `patient_personal_info`
  MODIFY `reg_no` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_preassessment`
--
ALTER TABLE `patient_preassessment`
  MODIFY `preasses_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_psychological_cond`
--
ALTER TABLE `patient_psychological_cond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_type`
--
ALTER TABLE `patient_type`
  MODIFY `patient_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `physio_discharge_summary`
--
ALTER TABLE `physio_discharge_summary`
  MODIFY `physio_discharge_summary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physio_evaluation`
--
ALTER TABLE `physio_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physio_evaluation_sent_mail`
--
ALTER TABLE `physio_evaluation_sent_mail`
  MODIFY `physio_mail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physio_multi_sel_parameters`
--
ALTER TABLE `physio_multi_sel_parameters`
  MODIFY `multi_sel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `physio_notes`
--
ALTER TABLE `physio_notes`
  MODIFY `physio_notes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physio_treatment_protocol`
--
ALTER TABLE `physio_treatment_protocol`
  MODIFY `treat_protocol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physio_treatment_protocol_review`
--
ALTER TABLE `physio_treatment_protocol_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physio_treatment_protocol_week_plan`
--
ALTER TABLE `physio_treatment_protocol_week_plan`
  MODIFY `week_plan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preassessment_barthel_index`
--
ALTER TABLE `preassessment_barthel_index`
  MODIFY `barthel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preassessment_fall_risk_questions`
--
ALTER TABLE `preassessment_fall_risk_questions`
  MODIFY `fall_risk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preassessment_guardian`
--
ALTER TABLE `preassessment_guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preassessment_immunization_his`
--
ALTER TABLE `preassessment_immunization_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preassessment_medicines`
--
ALTER TABLE `preassessment_medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preassessment_typical_day`
--
ALTER TABLE `preassessment_typical_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price_history`
--
ALTER TABLE `price_history`
  MODIFY `price_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `room_beds`
--
ALTER TABLE `room_beds`
  MODIFY `room_bed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_master`
--
ALTER TABLE `room_master`
  MODIFY `room_master_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `system_parameters`
--
ALTER TABLE `system_parameters`
  MODIFY `param_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `treating_doctor`
--
ALTER TABLE `treating_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_roles_pages`
--
ALTER TABLE `user_roles_pages`
  MODIFY `rollpages_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9480;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
