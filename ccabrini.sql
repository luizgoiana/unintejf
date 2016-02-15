-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: c_cabrini
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogpost`
--

DROP TABLE IF EXISTS `blogpost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `tags` text,
  `image` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogpost`
--

LOCK TABLES `blogpost` WRITE;
/*!40000 ALTER TABLE `blogpost` DISABLE KEYS */;
INSERT INTO `blogpost` VALUES (38,'<p>Estima-se que 43% das mortes por c&acirc;ncer no mundo s&atilde;o devidas ao fumo e seus derivados, m&aacute; alimenta&ccedil;&atilde;o, drogas, infec&ccedil;&otilde;es e vida sedent&aacute;ria.<br />\r\n<br />\r\nO fumo associado ao uso excessivo de &aacute;lcool tem sido respons&aacute;vel&nbsp;por 90% dos c&acirc;nceres da cavidade oral. Consumidos juntos, aumentam os riscos dessa patologia em 141,6 (Fundamentos da Odontologia &ndash; Estomatologia, 2&ordf; Edi&ccedil;&atilde;o). Recentemente, a Ag&ecirc;ncia Internacional para Pesquisa do C&acirc;ncer (IARC, a sigla em ingl&ecirc;s) confirmou a evid&ecirc;ncia que tamb&eacute;m o cigarro eletr&ocirc;nico cont&eacute;m subst&acirc;ncias cancer&iacute;genas, ou seja, apresenta o mesmo risco do cigarro comum.<br />\r\n<br />\r\nSegundo o Instituto Nacional do C&acirc;ncer (Inca), o uso de todos os tipos de fumo dispon&iacute;veis no mundo, incluindo o cigarro, aumentam significativamente o agravamento de muitas doen&ccedil;as bucais como o c&acirc;ncer, gengivites, perda prematura dos dentes, mau h&aacute;lito, redu&ccedil;&atilde;o da sensibilidade olfativa e do paladar. H&aacute; muitos tipos de tabaco dispon&iacute;veis incluindo os cigarros manufaturados, enrolados, de mascar e todos eles s&atilde;o viciantes e danosos &agrave; sa&uacute;de.</p>','fumo; álcool; cancêr','uploads/b5758d9265aff656484e501c69b25684.jpg','Fumo e álcool: responsáveis por 90% dos cânceres bucais','2015-08-21'),(39,'<p>O uso de implantes dent&aacute;rios vem se tornando comum entre os brasileiros, e a busca n&atilde;o se d&aacute; apenas por uma quest&atilde;o est&eacute;tica, mas por todo o desconforto pelo qual os pacientes n&atilde;o est&atilde;o mais dispostos a passar, gerado pela falta dos dentes. No Brasil, cerca de 800 mil implantes e 2,4 milh&otilde;es de componentes de pr&oacute;teses dent&aacute;rias s&atilde;o colocados por ano no pa&iacute;s, segundo levantamento da Associa&ccedil;&atilde;o Brasileira da Ind&uacute;stria M&eacute;dica, Odontol&oacute;gica e Hospitalar (Abimo). E 90% deste mercado &eacute; atendido pela pr&oacute;pria ind&uacute;stria nacional, que vem crescendo, investindo em tecnologia e j&aacute; exporta para diversos pa&iacute;ses, ainda de acordo com a associa&ccedil;&atilde;o.<br />\r\n<br />\r\nO bom desempenho da ind&uacute;stria brasileira coloca no mercado produtos de qualidade e de custo reduzido, tornando o tratamento acess&iacute;vel. O aumento na demanda pela reabilita&ccedil;&atilde;o oral com implantes tamb&eacute;m se d&aacute; pelo crescimento de especialistas habilitados para realizar tal procedimento. Entre 2004 e 2008, o n&uacute;mero de novos implantodontistas por ano cresceu cerca de 260%. No in&iacute;cio deste per&iacute;odo, 287 novos especialistas foram registrados. J&aacute; no ano passado o n&uacute;mero pulou para 748, de acordo com dados do Conselho Federal de Odontologia (CFO).</p>','implante; brasil','uploads/177c9f7323aa1377f8b8da397c1c4567.jpg','Cresce o número de implantes dentários no Brasil','2015-08-21'),(40,'<p>Uma boa higiene bucal &eacute; uma das medidas mais importantes que voc&ecirc; pode adotar para manter seus dentes e gengiva em ordem. Dentes saud&aacute;veis n&atilde;o s&oacute; contribuem para que voc&ecirc; tenha uma boa apar&ecirc;ncia, mas s&atilde;o tamb&eacute;m importantes para que voc&ecirc; possa falar bem e mastigar corretamente os alimentos. Manter uma boca saud&aacute;vel &eacute; importante para o bem-estar geral das pessoas. Os cuidados di&aacute;rios preventivos, tais como uma boa escova&ccedil;&atilde;o e o uso correto do fio dental, ajudam a evitar que os problemas dent&aacute;rios se tornem mais graves.&nbsp;<br />\r\n<br />\r\nDevemos ter em mente que a preven&ccedil;&atilde;o &eacute; a maneira mais econ&ocirc;mica, menos dolorida e menos preocupante de se cuidar da sa&uacute;de bucal e que ao se fazer preven&ccedil;&atilde;o estamos evitando o tratamento de problemas que se tornariam graves. Existem algumas medidas muito simples que cada um de n&oacute;s pode tomar para diminuir significativamente o risco do desenvolvimento de c&aacute;rie, gengivite e outros problemas bucais.</p>\r\n\r\n<ul>\r\n	<li>Escovar bem os dentes e usar o fio dental diariamente.</li>\r\n	<li>Ingerir alimentos balanceados e evitar comer entre as principais refei&ccedil;&otilde;es.</li>\r\n	<li>Usar produtos de higiene bucal, inclusive creme dental, que contenham fl&uacute;or.</li>\r\n	<li>Usar enxag&uuml;ante bucal com fl&uacute;or, caso seu dentista recomende.</li>\r\n	<li>Garantir que crian&ccedil;as abaixo de 12 anos tomem &aacute;gua pot&aacute;vel fluoretada ou suplementos de fl&uacute;or.</li>\r\n</ul>\r\n\r\n<p>H&aacute;lito puro e sorriso saud&aacute;vel s&atilde;o o resultado de uma boa higiene bucal. Isso significa que, com uma higiene bucal adequada:</p>\r\n\r\n<ul>\r\n	<li>Seus dentes ficam limpos e livres de res&iacute;duos alimentares;</li>\r\n	<li>A gengiva n&atilde;o sangra nem d&oacute;i durante a escova&ccedil;&atilde;o e o uso do fio dental;</li>\r\n	<li>O mau h&aacute;lito deixa de ser um problema permanente.</li>\r\n</ul>\r\n\r\n<p>Consulte o seu dentista caso sua gengiva doa ou sangre quando voc&ecirc; escova os dentes ou usa fio dental, e principalmente se estiver passando por um problema de mau h&aacute;lito. Essas manifesta&ccedil;&otilde;es podem ser a indica&ccedil;&atilde;o da exist&ecirc;ncia de um problema mais grave.&nbsp;<br />\r\n<br />\r\nSeu dentista pode ensin&aacute;-lo a usar t&eacute;cnicas corretas de higiene bucal e indicar as &aacute;reas que exigem aten&ccedil;&atilde;o extra durante a escova&ccedil;&atilde;o e o uso do fio dental.</p>','higiene; bucal; cuidado','uploads/bb769512504ef866cffe977b30af9aed.jpg','Como garantir uma boa higiene bucal?','2015-08-24'),(41,'<p>Se voc&ecirc; acorda e os m&uacute;sculos da sua mand&iacute;bula est&atilde;o doloridos ou com dor de cabe&ccedil;a, voc&ecirc; pode estar sofrendo de bruxismo - um ranger ou um forte apertar dos dentes. O bruxismo pode fazer os dentes ficarem doloridos ou soltos, e, &agrave;s vezes, partes dos dentes s&atilde;o literalmente desgastados. Eventualmente, o bruxismo pode acarretar a destrui&ccedil;&atilde;o do osso circunvizinho e do tecido da gengiva. O Bruxismo tamb&eacute;m pode levar a problemas que envolvam a articula&ccedil;&atilde;o da mand&iacute;bula, como s&iacute;ndrome da articula&ccedil;&atilde;o t&ecirc;mporo-mandibular (ATM).<br />\r\n<br />\r\n<strong>Como saber se tenho bruxismo?</strong><br />\r\n<br />\r\nPara muitas pessoas, o bruxismo &eacute; um h&aacute;bito inconsciente. Estas pessoas podem nem mesmo perceber que est&atilde;o fazendo isto, at&eacute; que algu&eacute;m comente que elas fazem um horr&iacute;vel som de ranger de dentes enquanto est&atilde;o dormindo. Para outras pessoas, &eacute; quando fazem um exame dental rotineiro e descobrem que seus dentes est&atilde;o desgastados ou o esmalte de seu dente est&aacute; rachado.<br />\r\nOutros potenciais sinais de bruxismo incluem dor na face, na cabe&ccedil;a e no pesco&ccedil;o. Seu dentista &eacute; capaz de fazer um diagn&oacute;stico preciso e determinar se a origem da dor facial &eacute; causada por bruxismo.<br />\r\n<br />\r\n<strong>Como o bruxismo &eacute; tratado?</strong><br />\r\n<br />\r\nO tratamento apropriado depender&aacute; do que est&aacute; lhe causando o problema. Fazendo perguntas apropriadas e examinando detalhadamente seus dentes, seu dentista pode lhe ajudar a determinar se a fonte potencial de seu bruxismo. Com base no grau dos danos causados a seus dentes e a causa prov&aacute;vel, seu dentista poder&aacute; sugerir:<br />\r\n<br />\r\nO uso de um dispositivo quando dormir. Feito sob medida pelo seu dentista e ajustado aos seus dentes, o dispositivo encaixa-se sobre os dentes superiores e os protege de se triturarem com os dentes inferiores. Apesar de o dispositivo ser uma boa maneira para lidar com bruxismo, ele n&atilde;o &eacute; uma cura.<br />\r\n<br />\r\nEncontrando meios de relaxamento. A tens&atilde;o cotidiana parece ser uma das causas principais do bruxismo, e n&atilde;o importa o que seja que reduza a tens&atilde;o, pode contribuir - ouvir m&uacute;sica, ler um livro, fazer um passeio ou tomar um banho. Procurar alguma terapia auxiliar&aacute; no aprendizado de meios eficazes de controlar situa&ccedil;&otilde;es estressantes. Adicionalmente, se aplicar uma toalhinha morna e molhada no lado de sua face isto poder&aacute; ajudar a relaxar os m&uacute;sculos doloridos devido &agrave; press&atilde;o exercida.<br />\r\n<br />\r\nReduzindo a &quot;exposi&ccedil;&atilde;o&quot; de um ou mais dentes para igualar sua mordida. Uma mordida anormal, no qual os dentes n&atilde;o se ajustam bem, tamb&eacute;m pode ser corrigido com restaura&ccedil;&otilde;es, coroas ou ortodontia..</p>','bruxismo; sinais; sintomas','uploads/2ed0e52876100c00d18067accb33280f.jpg','Bruxismo: sinais e sintomas','2015-08-27');
/*!40000 ALTER TABLE `blogpost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidade`
--

LOCK TABLES `especialidade` WRITE;
/*!40000 ALTER TABLE `especialidade` DISABLE KEYS */;
INSERT INTO `especialidade` VALUES (41,'Implante Dentário','','uploads/f61ae669cf9e383ffbfab5c053858609.png'),(42,'Protocolo','','uploads/d3d9c90c3b53146c9209f1355b077403.png'),(43,'Estética','','uploads/646e6d75789a56ba34bf0c39af7bb1e4.png'),(44,'Clareamento','','uploads/754bdedd76ff5719901bab842d4c29af.png'),(45,'Facetas Laminadas','','uploads/60f3698a3d5fee73427d1ba72445132e.png'),(46,'Reabilitação Oral','','uploads/fb837da0bac02b074e0b5881aedd8013.png');
/*!40000 ALTER TABLE `especialidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estrutura`
--

DROP TABLE IF EXISTS `estrutura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estrutura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estrutura`
--

LOCK TABLES `estrutura` WRITE;
/*!40000 ALTER TABLE `estrutura` DISABLE KEYS */;
INSERT INTO `estrutura` VALUES (25,'uploads/89063205fed41b74069919811744f958.jpg'),(26,'uploads/6a8b88b4ed8af5b93beff9118a29739e.jpg'),(27,'uploads/736f3e5855ca11206f954df0e823d127.jpg'),(28,'uploads/d515543346ae8eab0b6c5802773ed431.jpg'),(29,'uploads/d36d2aea9bafcf86f39c04b3adac5fa9.jpg'),(30,'uploads/ae8c8f3551ef525c70400ea0a14d77c1.jpg');
/*!40000 ALTER TABLE `estrutura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shortDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialtyShortDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bannerMiddleFrase` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home`
--

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` VALUES (1,'Com 24 anos de atuação em Juiz de Fora, a cirurgiã-dentista oferece técnicas eficazes para a reabilitação oral e estética.\r\n','Substituição de próteses fixas e móveis por implantes; protocolo - técnica capaz de devolver a função mastigatória; clareamentos e correção de pequenos defeitos de anatomia e cor com lâminas de porcelana.','Há 24 anos oferecendo técnicas eficazes para a reabilitação oral e estética.');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagebannerhome`
--

DROP TABLE IF EXISTS `imagebannerhome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagebannerhome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHome` int(11) DEFAULT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idHome` (`idHome`),
  CONSTRAINT `imagebannerhome_ibfk_1` FOREIGN KEY (`idHome`) REFERENCES `home` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagebannerhome`
--

LOCK TABLES `imagebannerhome` WRITE;
/*!40000 ALTER TABLE `imagebannerhome` DISABLE KEYS */;
INSERT INTO `imagebannerhome` VALUES (10,NULL,'uploads/317af0978785052425444ea04939bb8e.jpg'),(11,1,'uploads/9cbe9f5d5e43316b406db875f62d4600.jpg');
/*!40000 ALTER TABLE `imagebannerhome` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oquefazemos`
--

DROP TABLE IF EXISTS `oquefazemos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oquefazemos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(35) NOT NULL,
  `idSobre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idSobre` (`idSobre`),
  KEY `idSobre_2` (`idSobre`),
  CONSTRAINT `oquefazemos_ibfk_1` FOREIGN KEY (`idSobre`) REFERENCES `sobre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oquefazemos`
--

LOCK TABLES `oquefazemos` WRITE;
/*!40000 ALTER TABLE `oquefazemos` DISABLE KEYS */;
INSERT INTO `oquefazemos` VALUES (3,'Implante Dentário',1),(4,'Protocolo',1),(5,'Estética',1);
/*!40000 ALTER TABLE `oquefazemos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sobre`
--

DROP TABLE IF EXISTS `sobre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sobre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `imagemLateral` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sobre`
--

LOCK TABLES `sobre` WRITE;
/*!40000 ALTER TABLE `sobre` DISABLE KEYS */;
INSERT INTO `sobre` VALUES (1,'“A felicidade do paciente após o tratamento é algo que não tem preço. Uma delas me relatou que o que a deixou mais emocionada após a substituição da dentadura foi sentir o pão quentinho no céu da boca, o que não ocorria há muito tempo”, relembra a Dra. Cláudia, que busca oferecer custos mais baixos e facilidade de pagamento para permitir ao paciente a realização do sonho de voltar a sorrir. “Já não há mais empecilhos para ter um sorriso perfeito e saudável”, destaca a cirurgiã-dentista.\r\nAlém do implante dentário, carro-chefe do trabalho da clínica, há também outros serviços como o protocolo - técnica capaz de devolver a função mastigatória; clareamentos e correção de pequenos defeitos de anatomia e cor com lâminas de porcelana.','teste','uploads/sobre-imagem-side.jpg');
/*!40000 ALTER TABLE `sobre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'adminuser','adminuser','luizguilherme.goiana@gmail.com','luizguilherme.goiana@gmail.com',1,'dc2g6lt22u8k8scw0sc00kscw0g08sk','$2y$13$dc2g6lt22u8k8scw0sc00ele2ODY03/aaCxUvDGi0v.ekKWJAhXAe','2015-10-22 13:41:13',0,0,NULL,NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',0,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-15 14:43:39
