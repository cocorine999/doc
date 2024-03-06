--
-- PostgreSQL database dump
--

-- Dumped from database version 14.11 (Ubuntu 14.11-0ubuntu0.22.04.1)
-- Dumped by pg_dump version 14.11 (Ubuntu 14.11-0ubuntu0.22.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: articles; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.articles (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT true NOT NULL,
    created_by uuid NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.articles OWNER TO master_db_admin;

--
-- Name: COLUMN articles.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.articles.name IS 'The unique name of the articles';


--
-- Name: COLUMN articles.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.articles.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN articles.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.articles.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN articles.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.articles.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN articles.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.articles.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN articles.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.articles.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: categories_of_employees; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.categories_of_employees (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    description text,
    department_id uuid,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT true NOT NULL,
    created_by uuid NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    category_id uuid
);


ALTER TABLE public.categories_of_employees OWNER TO master_db_admin;

--
-- Name: COLUMN categories_of_employees.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.name IS 'The unique name of the categories_of_employees';


--
-- Name: COLUMN categories_of_employees.description; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.description IS 'Description of the category';


--
-- Name: COLUMN categories_of_employees.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN categories_of_employees.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN categories_of_employees.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN categories_of_employees.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN categories_of_employees.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.categories_of_employees.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: companies; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.companies (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    registration_number character varying(255),
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_by uuid,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.companies OWNER TO master_db_admin;

--
-- Name: COLUMN companies.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.name IS 'Name of the company';


--
-- Name: COLUMN companies.registration_number; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.registration_number IS 'Name of the company';


--
-- Name: COLUMN companies.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN companies.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN companies.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN companies.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN companies.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.companies.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: credentials; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.credentials (
    id uuid NOT NULL,
    identifier character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    user_id uuid NOT NULL,
    created_by uuid NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.credentials OWNER TO master_db_admin;

--
-- Name: COLUMN credentials.identifier; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.credentials.identifier IS 'Encrypted identifier for the user';


--
-- Name: COLUMN credentials.password; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.credentials.password IS 'Encrypted password for the user';


--
-- Name: COLUMN credentials.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.credentials.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN credentials.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.credentials.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN credentials.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.credentials.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: departements; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.departements (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT true NOT NULL,
    created_by uuid NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.departements OWNER TO master_db_admin;

--
-- Name: COLUMN departements.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.departements.name IS 'The unique name of the departements';


--
-- Name: COLUMN departements.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.departements.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN departements.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.departements.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN departements.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.departements.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN departements.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.departements.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN departements.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.departements.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO master_db_admin;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: master_db_admin
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO master_db_admin;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: master_db_admin
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: oauth_access_tokens; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.oauth_access_tokens (
    id uuid NOT NULL,
    user_id uuid,
    client_id uuid NOT NULL,
    name character varying(255),
    scopes text,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_access_tokens OWNER TO master_db_admin;

--
-- Name: COLUMN oauth_access_tokens.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_access_tokens.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN oauth_access_tokens.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_access_tokens.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN oauth_access_tokens.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_access_tokens.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN oauth_access_tokens.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_access_tokens.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN oauth_access_tokens.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_access_tokens.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: oauth_auth_codes; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.oauth_auth_codes (
    id uuid NOT NULL,
    user_id uuid NOT NULL,
    client_id uuid NOT NULL,
    scopes text,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_auth_codes OWNER TO master_db_admin;

--
-- Name: COLUMN oauth_auth_codes.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_auth_codes.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN oauth_auth_codes.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_auth_codes.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN oauth_auth_codes.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_auth_codes.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN oauth_auth_codes.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_auth_codes.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN oauth_auth_codes.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_auth_codes.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: oauth_clients; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.oauth_clients (
    id uuid NOT NULL,
    user_id uuid,
    name character varying(255) NOT NULL,
    secret character varying(100),
    provider character varying(255),
    redirect text NOT NULL,
    personal_access_client boolean NOT NULL,
    password_client boolean NOT NULL,
    revoked boolean NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_clients OWNER TO master_db_admin;

--
-- Name: COLUMN oauth_clients.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_clients.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN oauth_clients.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_clients.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN oauth_clients.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_clients.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN oauth_clients.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_clients.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN oauth_clients.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_clients.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: oauth_personal_access_clients; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.oauth_personal_access_clients (
    id uuid NOT NULL,
    client_id uuid NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_personal_access_clients OWNER TO master_db_admin;

--
-- Name: COLUMN oauth_personal_access_clients.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_personal_access_clients.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN oauth_personal_access_clients.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_personal_access_clients.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN oauth_personal_access_clients.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_personal_access_clients.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN oauth_personal_access_clients.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_personal_access_clients.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN oauth_personal_access_clients.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_personal_access_clients.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: oauth_refresh_tokens; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.oauth_refresh_tokens (
    id uuid NOT NULL,
    access_token_id uuid NOT NULL,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_refresh_tokens OWNER TO master_db_admin;

--
-- Name: COLUMN oauth_refresh_tokens.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_refresh_tokens.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN oauth_refresh_tokens.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_refresh_tokens.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN oauth_refresh_tokens.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_refresh_tokens.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN oauth_refresh_tokens.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_refresh_tokens.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN oauth_refresh_tokens.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.oauth_refresh_tokens.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: people; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.people (
    id uuid NOT NULL,
    last_name character varying(255) NOT NULL,
    first_name character varying(255) NOT NULL,
    middle_name jsonb DEFAULT '[]'::jsonb NOT NULL,
    sex character varying(255) DEFAULT 'unknown'::character varying NOT NULL,
    marital_status character varying(255) DEFAULT 'single'::character varying NOT NULL,
    birth_date date,
    nip bigint,
    ifu bigint,
    nationality character varying(255),
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_by uuid,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    CONSTRAINT people_marital_status_check CHECK (((marital_status)::text = ANY ((ARRAY['single'::character varying, 'married'::character varying, 'divorced'::character varying, 'widowed'::character varying])::text[]))),
    CONSTRAINT people_sex_check CHECK (((sex)::text = ANY ((ARRAY['male'::character varying, 'female'::character varying, 'unknown'::character varying])::text[])))
);


ALTER TABLE public.people OWNER TO master_db_admin;

--
-- Name: COLUMN people.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.people.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN people.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.people.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN people.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.people.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN people.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.people.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN people.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.people.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: permissions; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.permissions (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    key character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,
    description text,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.permissions OWNER TO master_db_admin;

--
-- Name: COLUMN permissions.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.name IS 'Unique name of the permission';


--
-- Name: COLUMN permissions.key; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.key IS 'Unique key of the permission';


--
-- Name: COLUMN permissions.slug; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.slug IS 'Unique slug of the permission';


--
-- Name: COLUMN permissions.description; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.description IS 'Description of the permission';


--
-- Name: COLUMN permissions.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.status IS 'Record status:
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN permissions.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN permissions.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN permissions.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN permissions.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.permissions.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO master_db_admin;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: master_db_admin
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO master_db_admin;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: master_db_admin
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: postes; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.postes (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT true NOT NULL,
    department_id uuid NOT NULL,
    created_by uuid NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.postes OWNER TO master_db_admin;

--
-- Name: COLUMN postes.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.postes.name IS 'The unique name of the postes';


--
-- Name: COLUMN postes.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.postes.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN postes.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.postes.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN postes.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.postes.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN postes.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.postes.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN postes.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.postes.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: role_has_permissions; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.role_has_permissions (
    id uuid NOT NULL,
    role_id uuid NOT NULL,
    permission_id uuid NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_detach boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.role_has_permissions OWNER TO master_db_admin;

--
-- Name: COLUMN role_has_permissions.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.role_has_permissions.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN role_has_permissions.can_be_detach; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.role_has_permissions.can_be_detach IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN role_has_permissions.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.role_has_permissions.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN role_has_permissions.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.role_has_permissions.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN role_has_permissions.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.role_has_permissions.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: roles; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.roles (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    key character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,
    description text,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    created_by uuid
);


ALTER TABLE public.roles OWNER TO master_db_admin;

--
-- Name: COLUMN roles.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.name IS 'The unique name of the role';


--
-- Name: COLUMN roles.key; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.key IS 'The unique key of the role';


--
-- Name: COLUMN roles.slug; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.slug IS 'The unique slug of the role';


--
-- Name: COLUMN roles.description; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.description IS 'Description of the role';


--
-- Name: COLUMN roles.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN roles.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN roles.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN roles.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN roles.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.roles.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: unite_mesures; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.unite_mesures (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    symbol character varying(255) NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT true NOT NULL,
    created_by uuid NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.unite_mesures OWNER TO master_db_admin;

--
-- Name: COLUMN unite_mesures.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.name IS 'The unique name of the unite_mesure';


--
-- Name: COLUMN unite_mesures.symbol; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.symbol IS 'The symbol of the unite_mesure';


--
-- Name: COLUMN unite_mesures.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN unite_mesures.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN unite_mesures.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN unite_mesures.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN unite_mesures.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_mesures.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: unite_travailles; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.unite_travailles (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    hint numeric(8,2) NOT NULL,
    rate numeric(8,2) NOT NULL,
    type_of_unite_travaille character varying(255) DEFAULT 'article'::character varying NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT true NOT NULL,
    created_by uuid NOT NULL,
    unite_mesure_id uuid NOT NULL,
    article_id uuid,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    CONSTRAINT unite_travailles_type_of_unite_travaille_check CHECK (((type_of_unite_travaille)::text = ANY ((ARRAY['article'::character varying, 'temps'::character varying])::text[])))
);


ALTER TABLE public.unite_travailles OWNER TO master_db_admin;

--
-- Name: COLUMN unite_travailles.name; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.name IS 'The unique name of the unite_travailles';


--
-- Name: COLUMN unite_travailles.hint; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.hint IS 'The hint of the unite_travailles';


--
-- Name: COLUMN unite_travailles.rate; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.rate IS 'The rate of the unite_travailles';


--
-- Name: COLUMN unite_travailles.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN unite_travailles.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN unite_travailles.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN unite_travailles.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN unite_travailles.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.unite_travailles.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: user_has_roles; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.user_has_roles (
    id uuid NOT NULL,
    user_id uuid NOT NULL,
    role_id uuid NOT NULL,
    attached_by uuid NOT NULL,
    status boolean DEFAULT true NOT NULL,
    can_be_detach boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.user_has_roles OWNER TO master_db_admin;

--
-- Name: COLUMN user_has_roles.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.user_has_roles.status IS 'Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN user_has_roles.can_be_detach; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.user_has_roles.can_be_detach IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN user_has_roles.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.user_has_roles.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN user_has_roles.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.user_has_roles.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN user_has_roles.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.user_has_roles.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: users; Type: TABLE; Schema: public; Owner: master_db_admin
--

CREATE TABLE public.users (
    id uuid NOT NULL,
    type_of_account character varying(255) DEFAULT 'personal'::character varying NOT NULL,
    username character varying(255),
    phone_number jsonb NOT NULL,
    address jsonb,
    email character varying(255),
    userable_type character varying(255) NOT NULL,
    userable_id uuid NOT NULL,
    email_verified_at timestamp(0) without time zone,
    email_verified boolean DEFAULT false NOT NULL,
    account_activated boolean DEFAULT false NOT NULL,
    account_activated_at timestamp(0) without time zone,
    account_verified boolean DEFAULT false NOT NULL,
    account_verified_at timestamp(0) without time zone,
    email_verification_token character varying(255),
    status boolean DEFAULT true NOT NULL,
    can_be_delete boolean DEFAULT false NOT NULL,
    account_status character varying(255) DEFAULT 'pending_activation'::character varying NOT NULL,
    created_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    created_by uuid NOT NULL,
    CONSTRAINT users_account_status_check CHECK (((account_status)::text = ANY ((ARRAY['pending_activation'::character varying, 'pending_verification'::character varying, 'pending_password_reset'::character varying, 'active'::character varying, 'suspended'::character varying, 'disabled'::character varying, 'closed'::character varying, 'inactive'::character varying, 'banned'::character varying, 'locked'::character varying])::text[]))),
    CONSTRAINT users_type_of_account_check CHECK (((type_of_account)::text = ANY ((ARRAY['personal'::character varying, 'moral'::character varying])::text[])))
);


ALTER TABLE public.users OWNER TO master_db_admin;

--
-- Name: COLUMN users.username; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.username IS 'The unique username of the user';


--
-- Name: COLUMN users.phone_number; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.phone_number IS 'The phone number of the user';


--
-- Name: COLUMN users.address; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.address IS 'Address of the user';


--
-- Name: COLUMN users.email; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.email IS 'Email address of the user';


--
-- Name: COLUMN users.email_verified_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.email_verified_at IS 'Timestamp of email verification';


--
-- Name: COLUMN users.email_verified; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.email_verified IS 'Email verification status';


--
-- Name: COLUMN users.account_activated; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.account_activated IS 'Account activation status';


--
-- Name: COLUMN users.account_activated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.account_activated_at IS 'Timestamp of account activation';


--
-- Name: COLUMN users.account_verified; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.account_verified IS 'Account verification status';


--
-- Name: COLUMN users.account_verified_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.account_verified_at IS 'Timestamp of account verification';


--
-- Name: COLUMN users.email_verification_token; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.email_verification_token IS 'Token for email verification';


--
-- Name: COLUMN users.status; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.status IS 'Record status: 
                        - TRUE: Active record or soft delete record
                        - FALSE: permanently Deleted and can be archived in another datastore';


--
-- Name: COLUMN users.can_be_delete; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.can_be_delete IS 'Flag indicating whether the record can be deleted';


--
-- Name: COLUMN users.created_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.created_at IS 'Timestamp indicating when the record was created';


--
-- Name: COLUMN users.updated_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.updated_at IS 'Timestamp indicating the last update of the record';


--
-- Name: COLUMN users.deleted_at; Type: COMMENT; Schema: public; Owner: master_db_admin
--

COMMENT ON COLUMN public.users.deleted_at IS 'Soft delete column for marking records as deleted without permanent removal';


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Data for Name: articles; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.articles (id, name, status, can_be_delete, created_by, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: categories_of_employees; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.categories_of_employees (id, name, description, department_id, status, can_be_delete, created_by, created_at, updated_at, deleted_at, category_id) FROM stdin;
\.


--
-- Data for Name: companies; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.companies (id, name, registration_number, status, can_be_delete, created_by, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: credentials; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.credentials (id, identifier, password, user_id, created_by, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: departements; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.departements (id, name, status, can_be_delete, created_by, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2019_12_14_000001_create_personal_access_tokens_table	1
2	2024_02_29_145920_create_permissions_table	1
3	2024_02_29_145925_create_roles_table	1
4	2024_02_29_145937_create_role_has_permissions_table	1
5	2024_02_29_150003_create_users_table	1
6	2024_02_29_150017_create_people_table	1
7	2024_02_29_150024_create_companies_table	1
8	2024_02_29_150030_create_credentials_table	1
9	2024_03_01_121929_add_new_columns_to_tables	1
10	2024_03_04_022358_create_user_has_roles_table	1
11	2024_06_01_000000_create_oauth_clients_table	1
12	2024_06_01_000001_create_oauth_auth_codes_table	1
13	2024_06_01_000002_create_oauth_access_tokens_table	1
14	2024_06_01_000003_create_oauth_refresh_tokens_table	1
15	2024_06_01_000005_create_oauth_personal_access_clients_table	1
21	2024_03_05_143455_create_articles_table	2
22	2024_03_05_150547_create_unite_mesures_table	2
23	2024_03_05_150620_create_unite_travailles_table	2
24	2024_03_05_160539_create_departements_table	2
25	2024_03_05_165304_create_postes_table	2
26	2024_03_06_034927_create_categories_of_employees_table	3
27	2024_06_01_121929_add_new_columns_to_tables	3
\.


--
-- Data for Name: oauth_access_tokens; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.oauth_access_tokens (id, user_id, client_id, name, scopes, revoked, expires_at, status, can_be_delete, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: oauth_auth_codes; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.oauth_auth_codes (id, user_id, client_id, scopes, revoked, expires_at, status, can_be_delete, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: oauth_clients; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.oauth_clients (id, user_id, name, secret, provider, redirect, personal_access_client, password_client, revoked, status, can_be_delete, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: oauth_personal_access_clients; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.oauth_personal_access_clients (id, client_id, status, can_be_delete, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: oauth_refresh_tokens; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.oauth_refresh_tokens (id, access_token_id, revoked, expires_at, status, can_be_delete, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: people; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.people (id, last_name, first_name, middle_name, sex, marital_status, birth_date, nip, ifu, nationality, status, can_be_delete, created_by, created_at, updated_at, deleted_at) FROM stdin;
9b7e70e3-826c-44db-921a-cd7d4f47753a	JASKOLSKI	floy	["John", "Doe", "Smith"]	male	single	\N	\N	\N	\N	t	f	\N	2024-03-05 21:20:21	2024-03-05 21:20:21	\N
9b7e715e-dd9e-4741-b7b1-c6d3b2bc5e21	BAUCH	ubaldo	["John", "Doe", "Smith"]	male	single	\N	\N	\N	\N	t	f	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	2024-03-05 21:21:42	2024-03-05 21:21:42	\N
\.


--
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.permissions (id, name, key, slug, description, status, can_be_delete, created_at, updated_at, deleted_at) FROM stdin;
9b7e5ab3-b788-48ae-9c28-8ba1a7c1f324	View Users	view_users	view-users	Permission to view users	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab3-d7ec-4637-abf1-b121fe44d7ba	Create Users	create_users	create-users	Permission to create new users	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab3-de2f-4781-a379-4df885a68d3b	Edit Users	edit_users	edit-users	Permission to edit existing users	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab3-e711-4832-9be3-45915986f9d1	Delete Users	delete_users	delete-users	Permission to delete users	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab3-f6cb-4cec-8ccf-1b1b86539f73	View Roles	view_roles	view-roles	Permission to view roles	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab4-0144-4681-807c-fafdab968b75	Edit Roles	edit_roles	edit-roles	Permission to edit roles	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab4-086a-4fdb-8392-fce2c94dbdc0	Delete Roles	delete_roles	delete-roles	Permission to delete roles	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab4-139f-483e-a825-0274bab7b580	View Permissions	view_permissions	view-permissions	Permission to view permissions	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab4-2029-4211-906a-f4eb66369717	Edit Permissions	edit_permissions	edit-permissions	Permission to edit permissions	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
9b7e5ab4-2955-44ea-a0a1-5c2dbdf9ae12	Delete Permissions	delete_permissions	delete-permissions	Permission to delete permissions	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N
\.


--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: postes; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.postes (id, name, status, can_be_delete, department_id, created_by, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: role_has_permissions; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.role_has_permissions (id, role_id, permission_id, status, can_be_detach, created_at, updated_at, deleted_at) FROM stdin;
9b7e61c7-215b-4353-a2b8-3e584a0e7aeb	9b7e61c7-132f-42b7-ac95-5c0fbef52d68	9b7e5ab3-b788-48ae-9c28-8ba1a7c1f324	t	f	2024-03-05 12:38:06	\N	\N
9b7e6925-b21e-4abe-8381-a0012c963e7c	9b7e5ad7-9215-4a97-b1ca-3121313b99cc	9b7e5ab3-e711-4832-9be3-45915986f9d1	t	f	2024-03-05 12:58:43	\N	\N
9b7e5ad7-9e8a-4d64-868d-edc10f9a9fe3	9b7e5ad7-9215-4a97-b1ca-3121313b99cc	9b7e5ab3-b788-48ae-9c28-8ba1a7c1f324	t	f	2024-03-05 12:18:43	\N	2024-03-05 21:00:33
9b7e6b13-96f1-477c-98a0-3648820ae9e7	9b7e5ad7-9215-4a97-b1ca-3121313b99cc	9b7e5ab3-b788-48ae-9c28-8ba1a7c1f324	t	f	2024-03-05 13:04:06	\N	\N
9b7e70bb-b46d-499b-8690-9023fbf19a5b	9b7e70bb-a890-41d0-975f-ee36727b1938	9b7e5ab3-b788-48ae-9c28-8ba1a7c1f324	t	f	2024-03-05 13:19:55	\N	\N
\.


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.roles (id, name, key, slug, description, status, can_be_delete, created_at, updated_at, deleted_at, created_by) FROM stdin;
9b7e5ab4-3661-4d03-98b1-77be641e2918	super administrateur	super_administrateur	super-administrateur	Super Administrator Role	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N	\N
9b7e5ab4-3bfe-4311-bbaa-126d7e9ded19	administrateur	administrateur	administrateur	Role	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N	\N
9b7e5ab4-4a6c-45b6-bfb4-24ee79db1f55	employer	employer	Employer	Role	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N	\N
9b7e5ab4-4f1f-4f85-9ea2-8c91b914a01d	partenaire	partenaire	partenaire	Role	t	f	2024-03-05 20:18:19	2024-03-05 20:18:19	\N	\N
9b7e61c7-132f-42b7-ac95-5c0fbef52d68	34x8nfdz4ktw9icmzepvjhsfo	34x8nfdz4ktw9icmzepvjhsfo	34x8nfdz4ktw9icmzepvjhsfo	If we navigate the feed, we can get to the SSL hard drive through the solid state IB port!	t	f	2024-03-05 20:38:06	2024-03-05 20:38:06	\N	\N
9b7e70bb-a890-41d0-975f-ee36727b1938	3snhxtfedqaktfunlp5qdpmqyap3tbi	3snhxtfedqaktfunlp5qdpmqyap3tbi	3snhxtfedqaktfunlp5qdpmqyap3tbi	Use the back-end ADP interface, then you can connect the back-end protocol!	t	f	2024-03-05 21:19:55	2024-03-05 21:19:55	\N	\N
9b7e5ad7-9215-4a97-b1ca-3121313b99cc	abonnedfment	1wz3dgpwoe5rexp7hesbtkfnaqwqslub	1wz3dgpwoe5rexp7hesbtkfnaqwqslub	We need to transmit the mobile JBOD protocol!	t	f	2024-03-05 20:18:42	2024-03-06 01:51:40	\N	\N
\.


--
-- Data for Name: unite_mesures; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.unite_mesures (id, name, symbol, status, can_be_delete, created_by, created_at, updated_at, deleted_at) FROM stdin;
9b7edcac-76ae-4f7e-91ac-25c08aa4f786	17mfzx6cppefqwbvihvk165fq1tlz8nrkc	kg	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	2024-03-06 02:21:44	2024-03-06 02:21:44	\N
9b7edfe2-1617-4bcf-9956-e59e98443a34	1glvry6d34ac1ycicddfygbxwvai553vaa	g	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	2024-03-06 02:30:43	2024-03-06 02:30:43	\N
\.


--
-- Data for Name: unite_travailles; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.unite_travailles (id, name, hint, rate, type_of_unite_travaille, status, can_be_delete, created_by, unite_mesure_id, article_id, created_at, updated_at, deleted_at) FROM stdin;
9b7ee057-2ce6-4f37-a8d5-63947ffb69db	alycia34	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:31:59	2024-03-06 02:31:59	\N
9b7ee0c1-0ada-4e2c-9bb1-010f55a9a819	giovanni_waelchi	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:33:09	2024-03-06 02:33:09	\N
9b7ee226-ea5c-408a-a821-015894825f4c	rashawn.olson	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:37:03	2024-03-06 02:37:03	\N
9b7ee23c-8bb6-4f41-b155-570da047b1cd	andreane.terry	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:37:18	2024-03-06 02:37:18	\N
9b7ee2ec-d6d5-4d35-bc2e-2a27973e7b99	jana57	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:39:13	2024-03-06 02:39:13	\N
9b7ee315-a7b6-442c-aafd-c25dbfe21d61	damion.crooks	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:39:40	2024-03-06 02:39:40	\N
9b7ee337-45e3-4f9e-b469-ad8c7ccd3802	adolphus45	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:40:02	2024-03-06 02:40:02	\N
9b7ee34f-24b1-4574-a33c-3de662a5fde2	autumn.stokes	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:40:18	2024-03-06 02:40:18	\N
9b7ee35d-9d0a-4fa6-abc8-a4908813bcf0	Joany88	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:40:27	2024-03-06 02:40:27	\N
9b7ee38b-a79e-4277-940a-159dec37f772	Guido40	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:40:57	2024-03-06 02:40:57	\N
9b7ee3f4-3021-4c4c-9759-176b93695e5f	janick34	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:42:06	2024-03-06 02:42:06	\N
9b7ee406-3253-4b4b-bf3c-040b7e226319	isadore_hyatt	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:42:17	2024-03-06 02:42:17	\N
9b7ee41a-5d96-4fe4-b23f-add4a9473e50	golden_bailey56	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:42:31	2024-03-06 02:42:31	\N
9b7ee42a-a63a-47fa-afcd-37f20ccf055a	magdalena.metz36	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:42:41	2024-03-06 02:42:41	\N
9b7ee45b-4261-450b-809a-53ddae18efe3	kellie.schmidt71	1.00	1000.00	temps	t	t	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7edfe2-1617-4bcf-9956-e59e98443a34	\N	2024-03-06 02:43:13	2024-03-06 02:46:26	\N
\.


--
-- Data for Name: user_has_roles; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.user_has_roles (id, user_id, role_id, attached_by, status, can_be_detach, created_at, updated_at, deleted_at) FROM stdin;
9b7e70e3-9ac6-41b4-afed-cf4d393234e2	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7e5ad7-9215-4a97-b1ca-3121313b99cc	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	t	f	2024-03-05 13:20:21	\N	\N
9b7e715e-f61b-471a-8e32-d956881e4114	9b7e715e-e6a8-4110-96b3-15ef35ec88d0	9b7e5ad7-9215-4a97-b1ca-3121313b99cc	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	t	f	2024-03-05 13:21:42	\N	\N
9b7e7360-cdb5-4800-b87b-fc203f96633e	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	9b7e5ab4-3bfe-4311-bbaa-126d7e9ded19	9b7e70e3-8a66-4e87-bb53-6b2d72da4399	t	f	2024-03-05 13:27:19	\N	\N
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: master_db_admin
--

COPY public.users (id, type_of_account, username, phone_number, address, email, userable_type, userable_id, email_verified_at, email_verified, account_activated, account_activated_at, account_verified, account_verified_at, email_verification_token, status, can_be_delete, account_status, created_at, updated_at, deleted_at, created_by) FROM stdin;
9b7e70e3-8a66-4e87-bb53-6b2d72da4399	personal	jaskolski.floy	{"number": 60172055, "area_code": null, "country_code": 1}	\N	\N	App\\Models\\Person	9b7e70e3-826c-44db-921a-cd7d4f47753a	\N	f	f	\N	f	\N	\N	t	f	pending_activation	2024-03-05 21:20:21	2024-03-05 21:20:21	\N	9b7e70e3-8a66-4e87-bb53-6b2d72da4399
9b7e715e-e6a8-4110-96b3-15ef35ec88d0	personal	bauch.ubaldo	{"number": 76158567, "area_code": null, "country_code": 81}	\N	\N	App\\Models\\Person	9b7e715e-dd9e-4741-b7b1-c6d3b2bc5e21	\N	f	f	\N	f	\N	\N	t	f	pending_activation	2024-03-05 21:21:42	2024-03-05 21:21:42	\N	9b7e70e3-8a66-4e87-bb53-6b2d72da4399
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: master_db_admin
--

SELECT pg_catalog.setval('public.migrations_id_seq', 27, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: master_db_admin
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: articles articles_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.articles
    ADD CONSTRAINT articles_name_unique UNIQUE (name);


--
-- Name: articles articles_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.articles
    ADD CONSTRAINT articles_pkey PRIMARY KEY (id);


--
-- Name: categories_of_employees categories_of_employees_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.categories_of_employees
    ADD CONSTRAINT categories_of_employees_name_unique UNIQUE (name);


--
-- Name: categories_of_employees categories_of_employees_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.categories_of_employees
    ADD CONSTRAINT categories_of_employees_pkey PRIMARY KEY (id);


--
-- Name: companies companies_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.companies
    ADD CONSTRAINT companies_pkey PRIMARY KEY (id);


--
-- Name: companies companies_registration_number_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.companies
    ADD CONSTRAINT companies_registration_number_unique UNIQUE (registration_number);


--
-- Name: credentials credentials_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.credentials
    ADD CONSTRAINT credentials_pkey PRIMARY KEY (id);


--
-- Name: departements departements_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.departements
    ADD CONSTRAINT departements_name_unique UNIQUE (name);


--
-- Name: departements departements_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.departements
    ADD CONSTRAINT departements_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: oauth_access_tokens oauth_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_access_tokens
    ADD CONSTRAINT oauth_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: oauth_auth_codes oauth_auth_codes_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_auth_codes
    ADD CONSTRAINT oauth_auth_codes_pkey PRIMARY KEY (id);


--
-- Name: oauth_clients oauth_clients_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_clients
    ADD CONSTRAINT oauth_clients_pkey PRIMARY KEY (id);


--
-- Name: oauth_personal_access_clients oauth_personal_access_clients_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_personal_access_clients
    ADD CONSTRAINT oauth_personal_access_clients_pkey PRIMARY KEY (id);


--
-- Name: oauth_refresh_tokens oauth_refresh_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_refresh_tokens
    ADD CONSTRAINT oauth_refresh_tokens_pkey PRIMARY KEY (id);


--
-- Name: people people_ifu_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.people
    ADD CONSTRAINT people_ifu_unique UNIQUE (ifu);


--
-- Name: people people_nip_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.people
    ADD CONSTRAINT people_nip_unique UNIQUE (nip);


--
-- Name: people people_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.people
    ADD CONSTRAINT people_pkey PRIMARY KEY (id);


--
-- Name: permissions permissions_key_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_key_unique UNIQUE (key);


--
-- Name: permissions permissions_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_unique UNIQUE (name);


--
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- Name: permissions permissions_slug_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_slug_unique UNIQUE (slug);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: postes postes_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_name_unique UNIQUE (name);


--
-- Name: postes postes_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_pkey PRIMARY KEY (id);


--
-- Name: role_has_permissions role_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (id);


--
-- Name: roles roles_key_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_key_unique UNIQUE (key);


--
-- Name: roles roles_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_unique UNIQUE (name);


--
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: roles roles_slug_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_slug_unique UNIQUE (slug);


--
-- Name: unite_mesures unite_mesures_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_mesures
    ADD CONSTRAINT unite_mesures_name_unique UNIQUE (name);


--
-- Name: unite_mesures unite_mesures_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_mesures
    ADD CONSTRAINT unite_mesures_pkey PRIMARY KEY (id);


--
-- Name: unite_travailles unite_travailles_name_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_travailles
    ADD CONSTRAINT unite_travailles_name_unique UNIQUE (name);


--
-- Name: unite_travailles unite_travailles_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_travailles
    ADD CONSTRAINT unite_travailles_pkey PRIMARY KEY (id);


--
-- Name: user_has_roles user_has_roles_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.user_has_roles
    ADD CONSTRAINT user_has_roles_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_phone_number_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_phone_number_unique UNIQUE (phone_number);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users users_username_unique; Type: CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_username_unique UNIQUE (username);


--
-- Name: articles_name_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX articles_name_status_can_be_delete_index ON public.articles USING btree (name, status, can_be_delete);


--
-- Name: categories_of_employees_name_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX categories_of_employees_name_status_can_be_delete_index ON public.categories_of_employees USING btree (name, status, can_be_delete);


--
-- Name: companies_name_created_by_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX companies_name_created_by_status_can_be_delete_index ON public.companies USING btree (name, created_by, status, can_be_delete);


--
-- Name: departements_name_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX departements_name_status_can_be_delete_index ON public.departements USING btree (name, status, can_be_delete);


--
-- Name: oauth_access_tokens_user_id_client_id_scopes_status_can_be_dele; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX oauth_access_tokens_user_id_client_id_scopes_status_can_be_dele ON public.oauth_access_tokens USING btree (user_id, client_id, scopes, status, can_be_delete);


--
-- Name: oauth_auth_codes_user_id_client_id_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX oauth_auth_codes_user_id_client_id_status_can_be_delete_index ON public.oauth_auth_codes USING btree (user_id, client_id, status, can_be_delete);


--
-- Name: oauth_clients_user_id_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX oauth_clients_user_id_status_can_be_delete_index ON public.oauth_clients USING btree (user_id, status, can_be_delete);


--
-- Name: oauth_personal_access_clients_client_id_status_can_be_delete_in; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX oauth_personal_access_clients_client_id_status_can_be_delete_in ON public.oauth_personal_access_clients USING btree (client_id, status, can_be_delete);


--
-- Name: oauth_refresh_tokens_access_token_id_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX oauth_refresh_tokens_access_token_id_status_can_be_delete_index ON public.oauth_refresh_tokens USING btree (access_token_id, status, can_be_delete);


--
-- Name: people_last_name_first_name_middle_name_sex_marital_status_crea; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX people_last_name_first_name_middle_name_sex_marital_status_crea ON public.people USING btree (last_name, first_name, middle_name, sex, marital_status, created_by, status, can_be_delete);


--
-- Name: permissions_name_slug_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX permissions_name_slug_status_can_be_delete_index ON public.permissions USING btree (name, slug, status, can_be_delete);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: postes_name_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX postes_name_status_can_be_delete_index ON public.postes USING btree (name, status, can_be_delete);


--
-- Name: role_has_permissions_role_id_permission_id_status_can_be_detach; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX role_has_permissions_role_id_permission_id_status_can_be_detach ON public.role_has_permissions USING btree (role_id, permission_id, status, can_be_detach);


--
-- Name: roles_created_by_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX roles_created_by_index ON public.roles USING btree (created_by);


--
-- Name: roles_name_slug_key_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX roles_name_slug_key_status_can_be_delete_index ON public.roles USING btree (name, slug, key, status, can_be_delete);


--
-- Name: unite_mesures_name_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX unite_mesures_name_status_can_be_delete_index ON public.unite_mesures USING btree (name, status, can_be_delete);


--
-- Name: unite_travailles_name_status_can_be_delete_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX unite_travailles_name_status_can_be_delete_index ON public.unite_travailles USING btree (name, status, can_be_delete);


--
-- Name: user_has_roles_user_id_role_id_status_can_be_detach_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX user_has_roles_user_id_role_id_status_can_be_detach_index ON public.user_has_roles USING btree (user_id, role_id, status, can_be_detach);


--
-- Name: users_created_by_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX users_created_by_index ON public.users USING btree (created_by);


--
-- Name: users_type_of_account_phone_number_email_status_can_be_delete_i; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX users_type_of_account_phone_number_email_status_can_be_delete_i ON public.users USING btree (type_of_account, phone_number, email, status, can_be_delete);


--
-- Name: users_userable_type_userable_id_index; Type: INDEX; Schema: public; Owner: master_db_admin
--

CREATE INDEX users_userable_type_userable_id_index ON public.users USING btree (userable_type, userable_id);


--
-- Name: articles articles_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.articles
    ADD CONSTRAINT articles_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: categories_of_employees categories_of_employees_category_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.categories_of_employees
    ADD CONSTRAINT categories_of_employees_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.categories_of_employees(id) ON DELETE CASCADE;


--
-- Name: categories_of_employees categories_of_employees_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.categories_of_employees
    ADD CONSTRAINT categories_of_employees_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: categories_of_employees categories_of_employees_department_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.categories_of_employees
    ADD CONSTRAINT categories_of_employees_department_id_foreign FOREIGN KEY (department_id) REFERENCES public.departements(id) ON DELETE CASCADE;


--
-- Name: companies companies_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.companies
    ADD CONSTRAINT companies_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: credentials credentials_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.credentials
    ADD CONSTRAINT credentials_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: credentials credentials_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.credentials
    ADD CONSTRAINT credentials_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: departements departements_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.departements
    ADD CONSTRAINT departements_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: oauth_access_tokens oauth_access_tokens_client_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_access_tokens
    ADD CONSTRAINT oauth_access_tokens_client_id_foreign FOREIGN KEY (client_id) REFERENCES public.oauth_clients(id) ON DELETE CASCADE;


--
-- Name: oauth_access_tokens oauth_access_tokens_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_access_tokens
    ADD CONSTRAINT oauth_access_tokens_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: oauth_auth_codes oauth_auth_codes_client_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_auth_codes
    ADD CONSTRAINT oauth_auth_codes_client_id_foreign FOREIGN KEY (client_id) REFERENCES public.oauth_clients(id) ON DELETE CASCADE;


--
-- Name: oauth_auth_codes oauth_auth_codes_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_auth_codes
    ADD CONSTRAINT oauth_auth_codes_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: oauth_clients oauth_clients_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_clients
    ADD CONSTRAINT oauth_clients_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: oauth_personal_access_clients oauth_personal_access_clients_client_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_personal_access_clients
    ADD CONSTRAINT oauth_personal_access_clients_client_id_foreign FOREIGN KEY (client_id) REFERENCES public.oauth_clients(id) ON DELETE CASCADE;


--
-- Name: oauth_refresh_tokens oauth_refresh_tokens_access_token_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.oauth_refresh_tokens
    ADD CONSTRAINT oauth_refresh_tokens_access_token_id_foreign FOREIGN KEY (access_token_id) REFERENCES public.oauth_access_tokens(id) ON DELETE CASCADE;


--
-- Name: people people_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.people
    ADD CONSTRAINT people_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: postes postes_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: postes postes_department_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_department_id_foreign FOREIGN KEY (department_id) REFERENCES public.departements(id) ON DELETE CASCADE;


--
-- Name: role_has_permissions role_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- Name: role_has_permissions role_has_permissions_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- Name: roles roles_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: unite_mesures unite_mesures_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_mesures
    ADD CONSTRAINT unite_mesures_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: unite_travailles unite_travailles_article_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_travailles
    ADD CONSTRAINT unite_travailles_article_id_foreign FOREIGN KEY (article_id) REFERENCES public.articles(id) ON DELETE CASCADE;


--
-- Name: unite_travailles unite_travailles_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_travailles
    ADD CONSTRAINT unite_travailles_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: unite_travailles unite_travailles_unite_mesure_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.unite_travailles
    ADD CONSTRAINT unite_travailles_unite_mesure_id_foreign FOREIGN KEY (unite_mesure_id) REFERENCES public.unite_mesures(id) ON DELETE CASCADE;


--
-- Name: user_has_roles user_has_roles_attached_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.user_has_roles
    ADD CONSTRAINT user_has_roles_attached_by_foreign FOREIGN KEY (attached_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: user_has_roles user_has_roles_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.user_has_roles
    ADD CONSTRAINT user_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- Name: user_has_roles user_has_roles_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.user_has_roles
    ADD CONSTRAINT user_has_roles_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: users users_created_by_foreign; Type: FK CONSTRAINT; Schema: public; Owner: master_db_admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_created_by_foreign FOREIGN KEY (created_by) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

