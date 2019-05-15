--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.11
-- Dumped by pg_dump version 9.6.11

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: produit; Type: TABLE; Schema: public; Owner: etudiant
--

CREATE TABLE public.produit (
    prd_id character varying(10) NOT NULL,
    prd_nom character varying(20),
    prd_qte integer,
    prd_pu numeric(6,2),
    prd_cat character varying(30)
);


ALTER TABLE public.produit OWNER TO etudiant;

--
-- Name: users; Type: TABLE; Schema: public; Owner: etudiant
--

CREATE TABLE public.users (
    id character varying(30) NOT NULL,
    mdp character varying(15)
);


ALTER TABLE public.users OWNER TO etudiant;

--
-- Data for Name: produit; Type: TABLE DATA; Schema: public; Owner: etudiant
--

COPY public.produit (prd_id, prd_nom, prd_qte, prd_pu, prd_cat) FROM stdin;
BA21	Fusée	1000	80.99	Jouet
YA07	Lune Gonflable	12	569.99	Jouet
NO69	Dieu	1	3.99	Outil
ME10	Branche de Granola	100	20.99	Nourriture
NI78	BoobsPad	94	55.99	Déco
RE69	Nuage Radioactif	8000	9.01	Déco
HO66	Soleil Portable	2	87.66	Outil
LE990	Patate Kryptonienne	90	109.99	Nourriture
JP998	Cheveux	10	789.01	Déco
BE251	Pisto-portail	1	1.99	Outil
AB12	Cure dent en mousse	1999	2.99	Outil
KJ81	Colle au cacao	89	9.99	Nourriture
RI03	Tatami au citron	99	10.99	Nourriture
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: etudiant
--

COPY public.users (id, mdp) FROM stdin;
Touklakos	azerty
NicoNicoNii	azerty
Moi	azerty
Lex Luthor	azerty
Fée Clochette	azerty
\.


--
-- Name: produit produit_pkey; Type: CONSTRAINT; Schema: public; Owner: etudiant
--

ALTER TABLE ONLY public.produit
    ADD CONSTRAINT produit_pkey PRIMARY KEY (prd_id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: etudiant
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

